<div class="px-6 py-8">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-display font-bold text-white mb-1">Catalog Management</h1>
            <p class="text-gray-400 text-sm">Manage products, OMRI status, and AI descriptions</p>
        </div>
        <button class="bg-eco-green text-eco-darker px-4 py-2 rounded-lg font-bold hover:shadow-[0_0_15px_rgba(0,255,163,0.4)] transition-all text-sm flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Add New Product
        </button>
    </div>

    <!-- Product List -->
    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/10 text-gray-400 text-sm uppercase tracking-wider">
                        <th class="pb-4 font-medium pl-4">Product Name</th>
                        <th class="pb-4 font-medium">Description</th>
                        <th class="pb-4 font-medium">Status</th>
                        <th class="pb-4 font-medium">AI Tools</th>
                        <th class="pb-4 font-medium text-right pr-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <?php foreach($products as $product): ?>
                    <tr class="border-b border-white/5 hover:bg-white/5 transition-colors group">
                        <td class="py-4 pl-4">
                            <div class="font-bold text-white"><?= htmlspecialchars($product['name']) ?></div>
                            <div class="text-xs text-gray-500">/<?= htmlspecialchars($product['slug']) ?></div>
                        </td>
                        <td class="py-4 pr-6 text-gray-400 font-light max-w-xs truncate">
                            <?= htmlspecialchars($product['desc']) ?>
                        </td>
                        <td class="py-4">
                            <span class="px-2 py-1 bg-eco-green/10 border border-eco-green/20 text-eco-green rounded uppercase text-[10px] tracking-wider font-bold">
                                <?= htmlspecialchars($product['status']) ?>
                            </span>
                        </td>
                        <td class="py-4">
                            <button class="text-purple-400 hover:text-purple-300 flex items-center gap-1 text-xs font-semibold bg-purple-500/10 px-2 py-1 rounded">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                Optimize
                            </button>
                        </td>
                        <td class="py-4 text-right pr-4">
                            <button class="text-gray-400 hover:text-white transition-colors mr-3">Edit</button>
                            <button class="text-red-400 hover:text-red-300 transition-colors">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
