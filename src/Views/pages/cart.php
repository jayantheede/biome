<section class="min-h-screen pt-32 pb-20 relative bg-[#060B09]">
    <div class="container mx-auto px-6 relative z-10">
        <div class="mb-12 hero-element">
            <h1 class="text-4xl md:text-5xl font-display font-bold text-white mb-4">Secure <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF6B00] to-[#0E8028]">Checkout</span></h1>
            <a href="/shop" class="text-sm text-gray-400 hover:text-[#FF6B00] transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Continue Shopping
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12" id="cartContainer">
            
            <!-- Cart Items (Populated by JS) -->
            <div class="lg:col-span-2 space-y-6 hero-element" id="cartItemsList">
                <!-- Fallback empty state -->
                <div class="glass-panel p-12 rounded-[30px] border border-white/5 text-center" id="emptyCartState">
                    <div class="w-20 h-20 mx-auto rounded-full bg-white/5 flex items-center justify-center mb-6 text-gray-600">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-white mb-2">Your cart is empty</h3>
                    <p class="text-gray-400 mb-8">Looks like you haven't added any biologicals to your order yet.</p>
                    <a href="/shop" class="inline-block px-8 py-3 rounded-full bg-[#FF6B00] text-[#060B09] font-bold hover:bg-white transition-colors">Browse Shop</a>
                </div>
            </div>

            <!-- Checkout Form & Summary -->
            <div class="hero-element hidden" id="checkoutSection">
                <div class="glass-panel p-8 rounded-[30px] border border-white/10 sticky top-32 shadow-[0_0_50px_rgba(0,0,0,0.5)]">
                    <h3 class="text-xl font-bold text-white mb-6">Order Summary</h3>
                    
                    <div class="space-y-4 mb-6 text-sm">
                        <div class="flex justify-between text-gray-400">
                            <span>Subtotal</span>
                            <span id="summarySubtotal" class="text-white font-medium">$0.00</span>
                        </div>
                        <div class="flex justify-between text-gray-400">
                            <span>Freight Shipping</span>
                            <span class="text-white font-medium">Calculated at next step</span>
                        </div>
                        <div class="flex justify-between text-gray-400">
                            <span>Tax</span>
                            <span class="text-white font-medium">$0.00</span>
                        </div>
                        <div class="pt-4 border-t border-white/10 flex justify-between text-white font-bold text-lg">
                            <span>Total</span>
                            <span id="summaryTotal" class="text-[#FF6B00]">$0.00</span>
                        </div>
                    </div>

                    <form onsubmit="processCheckout(event)" class="space-y-4">
                        
                        <!-- Express Checkout Wallets -->
                        <div class="mb-8">
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest text-center mb-4 relative flex items-center justify-center">
                                <span class="bg-[#060B09] px-3 z-10">Express Checkout</span>
                                <div class="absolute inset-0 flex items-center z-0">
                                    <div class="w-full border-t border-white/10"></div>
                                </div>
                            </h4>
                            <div class="flex flex-col gap-3">
                                <button type="button" onclick="simulateWalletCheckout('Shop Pay')" class="w-full py-3 rounded-lg bg-[#5A31F4] text-white font-bold hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                                    Shop Pay
                                </button>
                                <div class="grid grid-cols-2 gap-3">
                                    <button type="button" onclick="simulateWalletCheckout('Apple Pay')" class="w-full py-3 rounded-lg bg-white text-black font-bold hover:bg-gray-200 transition-colors flex items-center justify-center gap-2">
                                        <svg class="w-5 h-5" viewBox="0 0 384 512" fill="currentColor"><path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/></svg>
                                        Pay
                                    </button>
                                    <button type="button" onclick="simulateWalletCheckout('Google Pay')" class="w-full py-3 rounded-lg bg-black border border-white/20 text-white font-bold hover:bg-gray-900 transition-colors flex items-center justify-center gap-2">
                                        <svg class="w-5 h-5" viewBox="0 0 48 48" fill="none"><path d="M23.49 20.72V24.5H33.25C32.86 26.85 31.06 28.66 28.71 28.66C25.43 28.66 22.77 26 22.77 22.72C22.77 19.44 25.43 16.78 28.71 16.78C30.2 16.78 31.53 17.33 32.55 18.27L35.21 15.61C33.56 14.05 31.36 13 28.71 13C23.31 13 18.93 17.38 18.93 22.78C18.93 28.18 23.31 32.56 28.71 32.56C33.64 32.56 37.1 29.1 37.1 23.86C37.1 23.08 37.02 22.45 36.86 21.83H23.49" fill="currentColor"/></svg>
                                        Pay
                                    </button>
                                </div>
                            </div>
                        </div>

                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-widest text-center mb-6 relative flex items-center justify-center mt-8">
                            <span class="bg-[#060B09] px-3 z-10">Or pay with credit card</span>
                            <div class="absolute inset-0 flex items-center z-0">
                                <div class="w-full border-t border-white/10"></div>
                            </div>
                        </h4>

                        <div>
                            <input type="email" required placeholder="Email Address" class="w-full bg-[#030504]/80 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:border-[#FF6B00] transition-colors outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" required placeholder="First Name" class="w-full bg-[#030504]/80 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:border-[#FF6B00] transition-colors outline-none">
                            <input type="text" required placeholder="Last Name" class="w-full bg-[#030504]/80 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:border-[#FF6B00] transition-colors outline-none">
                        </div>
                        <div>
                            <input type="text" required placeholder="Farm / Company Name" class="w-full bg-[#030504]/80 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:border-[#FF6B00] transition-colors outline-none">
                        </div>
                        <div>
                            <input type="text" required placeholder="Shipping Address" class="w-full bg-[#030504]/80 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:border-[#FF6B00] transition-colors outline-none">
                        </div>
                        
                        <div class="p-4 border border-[#FF6B00]/30 rounded-lg bg-[#FF6B00]/5 flex items-center justify-between mt-4 mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-4 h-4 rounded-full border-2 border-[#FF6B00] flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-[#FF6B00]"></div>
                                </div>
                                <span class="text-sm text-white font-medium">Credit Card</span>
                            </div>
                            <div class="flex gap-2 text-white">
                                <svg class="w-8 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg>
                            </div>
                        </div>
                        <div>
                            <input type="text" required placeholder="Card Number" class="w-full bg-[#030504]/80 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:border-[#FF6B00] transition-colors outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" required placeholder="MM/YY" class="w-full bg-[#030504]/80 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:border-[#FF6B00] transition-colors outline-none">
                            <input type="text" required placeholder="CVC" class="w-full bg-[#030504]/80 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:border-[#FF6B00] transition-colors outline-none">
                        </div>

                        <button type="submit" id="checkoutBtn" class="w-full mt-6 py-4 rounded-xl bg-gradient-to-r from-[#FF6B00] to-[#0E8028] text-[#060B09] font-bold text-lg hover:shadow-[0_0_30px_rgba(0,255,163,0.4)] transition-all">
                            Complete Order
                        </button>
                    </form>
                    <div class="flex items-center justify-center gap-2 mt-4 text-xs text-gray-500">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        Secure 256-bit SSL Encryption
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Order Success Modal -->
<div id="successModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm hidden opacity-0 transition-opacity duration-500">
    <div class="glass-panel p-10 rounded-[30px] border border-[#FF6B00]/50 max-w-md w-full text-center transform scale-95 transition-transform duration-500" id="successModalInner">
        <div class="w-20 h-20 mx-auto rounded-full bg-[#FF6B00]/20 flex items-center justify-center mb-6 text-[#FF6B00]">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <h2 class="text-3xl font-display font-bold text-white mb-4">Order Confirmed!</h2>
        <p class="text-gray-400 mb-8 font-light">Thank you for your purchase. We are preparing your biologicals for shipment. You will receive an email with tracking details shortly.</p>
        <a href="/shop" class="block w-full py-4 rounded-xl bg-[#FF6B00] text-[#060B09] font-bold hover:bg-white transition-colors">Return to Shop</a>
    </div>
</div>

<script>
    gsap.from(".hero-element", { y: 50, opacity: 0, duration: 1.2, stagger: 0.2, ease: "power3.out" });

    function renderCart() {
        const cart = JSON.parse(localStorage.getItem('rb_cart')) || [];
        const container = document.getElementById('cartItemsList');
        const emptyState = document.getElementById('emptyCartState');
        const checkoutSection = document.getElementById('checkoutSection');
        
        if (cart.length === 0) {
            container.innerHTML = '';
            container.appendChild(emptyState);
            emptyState.classList.remove('hidden');
            checkoutSection.classList.add('hidden');
            return;
        }

        emptyState.classList.add('hidden');
        checkoutSection.classList.remove('hidden');
        
        let html = '';
        let total = 0;

        cart.forEach((item, index) => {
            const itemTotal = item.price * item.qty;
            total += itemTotal;
            html += `
                <div class="glass-panel p-6 rounded-[24px] border border-white/5 flex flex-col md:flex-row items-center gap-6 relative">
                    <div class="w-24 h-24 bg-[#030504] rounded-xl flex items-center justify-center p-2 flex-shrink-0">
                        <img src="${item.image}" class="h-full object-contain">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-xl font-bold text-white">${item.name}</h3>
                        <p class="text-sm text-gray-500">Direct Delivery Form</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center bg-[#030504]/80 border border-white/10 rounded-lg">
                            <button onclick="updateQty(${index}, -1)" class="px-3 py-2 text-gray-400 hover:text-white transition-colors">-</button>
                            <span class="px-2 text-white font-medium min-w-[30px] text-center">${item.qty}</span>
                            <button onclick="updateQty(${index}, 1)" class="px-3 py-2 text-gray-400 hover:text-white transition-colors">+</button>
                        </div>
                        <div class="text-xl font-bold text-white min-w-[100px] text-right">$${itemTotal.toFixed(2)}</div>
                        <button onclick="removeItem(${index})" class="p-2 text-gray-600 hover:text-red-400 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                </div>
            `;
        });

        container.innerHTML = html;
        document.getElementById('summarySubtotal').innerText = `$${total.toFixed(2)}`;
        document.getElementById('summaryTotal').innerText = `$${total.toFixed(2)}`;
    }

    function updateQty(index, change) {
        let cart = JSON.parse(localStorage.getItem('rb_cart')) || [];
        cart[index].qty += change;
        if(cart[index].qty <= 0) {
            cart.splice(index, 1);
        }
        localStorage.setItem('rb_cart', JSON.stringify(cart));
        window.dispatchEvent(new Event('cartUpdated'));
        renderCart();
    }

    function removeItem(index) {
        let cart = JSON.parse(localStorage.getItem('rb_cart')) || [];
        cart.splice(index, 1);
        localStorage.setItem('rb_cart', JSON.stringify(cart));
        window.dispatchEvent(new Event('cartUpdated'));
        renderCart();
    }

    function processCheckout(e) {
        e.preventDefault();
        const btn = document.getElementById('checkoutBtn');
        btn.innerHTML = '<div class="w-6 h-6 border-2 border-[#060B09] border-t-transparent rounded-full animate-spin mx-auto"></div>';
        
        setTimeout(() => {
            // Clear cart
            localStorage.removeItem('rb_cart');
            window.dispatchEvent(new Event('cartUpdated'));
            
            // Show Success Modal
            const modal = document.getElementById('successModal');
            const modalInner = document.getElementById('successModalInner');
            modal.classList.remove('hidden');
            // small delay for display block to apply before animating opacity
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalInner.classList.remove('scale-95');
            }, 10);
            
        }, 2000);
    }

    function simulateWalletCheckout(walletName) {
        const btn = event.currentTarget;
        const originalHtml = btn.innerHTML;
        btn.innerHTML = '<div class="w-5 h-5 border-2 border-current border-t-transparent rounded-full animate-spin"></div>';
        
        setTimeout(() => {
            // Clear cart
            localStorage.removeItem('rb_cart');
            window.dispatchEvent(new Event('cartUpdated'));
            
            // Show Success Modal
            const modal = document.getElementById('successModal');
            const modalInner = document.getElementById('successModalInner');
            modal.classList.remove('hidden');
            
            // Update text to reflect wallet
            modalInner.querySelector('h2').innerText = `Paid via ${walletName}!`;
            
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalInner.classList.remove('scale-95');
                btn.innerHTML = originalHtml;
            }, 10);
            
        }, 1500);
    }

    // Initial render
    document.addEventListener('DOMContentLoaded', renderCart);
</script>
