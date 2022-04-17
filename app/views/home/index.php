<main class="pb-16 mx-40">
    <section class="h-max py-2 px-3 pt-16">
    </section>
    <section class="flex h-max flex-col gap-3 px-3 lg:px-7">
        <?php foreach($data['kategori'] as $kategori) : 
            $kategori = $kategori['list'];
            $products = $data['products'];
            if(isset($products[0])) :
            ?>
        <h1 class="ml-6 text-2xl">
            <?= ucwords($kategori) ?>
        </h1>
        <div class="list-produk">
            <?php foreach($products as $product) :?>
            <div class="produk group">
                <div class="h-40 w-40 overflow-clip">
                    <img class="w-40 group-hover:scale-125 transition-all duration-300"
                        src="assets/img/produk/<?=$product['image']?>" alt="<?=$product['image']?>">
                </div>
                <div class="flex h-max flex-col justify-between w-full gap-2 overflow-hidden p-3">
                    <p class="text-sm line-clamp-2"><?= $product['produk'] ?></p>
                    <?php if($product['promo'] != 0) : ?>
                    <p class="text-sm font-bold">Rp
                        <?= number_format($product['promo'],0,',','.') ?>,-</p>
                    <p><span
                            class="mr-2 h-1 w-2 rounded-sm bg-red-200 p-1 text-xs font-bold text-red-900 no-underline"><?= floor((($product['price']-$product['promo'])/$product['price'])*100) ?>%</span><span
                            class="text-xs line-through">Rp
                            <?= number_format($product['price'],0,',','.') ?></span>,-
                    </p>
                    <?php else :?>
                    <p class="text-sm font-bold">Rp
                        <?= number_format($product['price'],0,',','.') ?>,-</p>
                    <?php endif ?>
                    <a class="text-xs text-center justify-self-end rounded-sm bg-indigo-800 px-3 py-2 text-white transition-all hover:bg-indigo-600 active:bg-indigo-900"
                        href="<?= $product['link'].$product['id'] ?>" target="_blank">Pesan Sekarang</a>
                    <a class="text-xs text-center justify-self-end rounded-sm bg-indigo-800 px-3 py-2 text-white transition-all hover:bg-indigo-600 active:bg-indigo-900"
                        href="detail?id=<?=$product['id']?>" target="_blank">Lihat</a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <?php endif; endforeach ?>
    </section>
</main>