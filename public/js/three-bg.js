// Three.js Animated Background (Microbial/Particle system)
document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById('webgl-canvas');
    if (!canvas) return;

    const scene = new THREE.Scene();
    
    // Camera setup
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 30;

    // Renderer setup
    const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(1); // Force 1x pixel ratio for massive performance boost

    // Particles setup (Microbial spores representation)
    const particlesGeometry = new THREE.BufferGeometry();
    const particlesCount = 300; // Optimized for performance
    
    const posArray = new Float32Array(particlesCount * 3);
    const scaleArray = new Float32Array(particlesCount);
    
    for(let i = 0; i < particlesCount * 3; i++) {
        // Spread particles
        posArray[i] = (Math.random() - 0.5) * 100;
    }
    
    for(let i = 0; i < particlesCount; i++) {
        scaleArray[i] = Math.random();
    }

    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
    particlesGeometry.setAttribute('aScale', new THREE.BufferAttribute(scaleArray, 1));

    // Custom shader material for glowing green particles
    const material = new THREE.ShaderMaterial({
        uniforms: {
            uTime: { value: 0 },
            uColor: { value: new THREE.Color('#FF6B00') }
        },
        vertexShader: `
            uniform float uTime;
            attribute float aScale;
            varying vec2 vUv;
            
            void main() {
                vUv = uv;
                vec4 modelPosition = modelMatrix * vec4(position, 1.0);
                
                // Add floating movement based on time and position
                modelPosition.y += sin(uTime * 0.5 + modelPosition.x * 0.5) * aScale * 2.0;
                modelPosition.x += cos(uTime * 0.3 + modelPosition.y * 0.5) * aScale * 2.0;
                
                vec4 viewPosition = viewMatrix * modelPosition;
                vec4 projectedPosition = projectionMatrix * viewPosition;
                
                gl_Position = projectedPosition;
                gl_PointSize = (10.0 * aScale) * (1.0 / -viewPosition.z);
            }
        `,
        fragmentShader: `
            uniform vec3 uColor;
            
            void main() {
                // Create a soft glowing circle
                float distanceToCenter = distance(gl_PointCoord, vec2(0.5));
                float strength = 0.05 / distanceToCenter - 0.1;
                
                gl_FragColor = vec4(uColor, strength * 0.5); // reduced opacity
            }
        `,
        transparent: true,
        depthWrite: false,
        blending: THREE.AdditiveBlending
    });

    const particlesMesh = new THREE.Points(particlesGeometry, material);
    scene.add(particlesMesh);

    // Mouse Interaction
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;
    const windowHalfX = window.innerWidth / 2;
    const windowHalfY = window.innerHeight / 2;

    document.addEventListener('mousemove', (event) => {
        mouseX = (event.clientX - windowHalfX);
        mouseY = (event.clientY - windowHalfY);
    });

    // Animation Loop
    const clock = new THREE.Clock();

    const tick = () => {
        const elapsedTime = clock.getElapsedTime();

        // Update material
        material.uniforms.uTime.value = elapsedTime;

        // Smooth mouse follow
        targetX = mouseX * 0.001;
        targetY = mouseY * 0.001;
        
        particlesMesh.rotation.y += 0.0005 + (targetX - particlesMesh.rotation.y) * 0.05;
        particlesMesh.rotation.x += 0.0005 + (targetY - particlesMesh.rotation.x) * 0.05;

        // Render
        renderer.render(scene, camera);

        // Call tick again on the next frame
        window.requestAnimationFrame(tick);
    }

    tick();

    // Handle Resize
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
});
