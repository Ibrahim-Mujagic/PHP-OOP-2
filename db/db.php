<?php
require __DIR__.'./../models/Category.php';
require __DIR__.'./../models/Product.php';
require __DIR__.'./../models/Sit.php';
require __DIR__.'./../models/Ingredients.php';
require __DIR__.'./../models/Food.php';
require __DIR__.'./../models/Toy.php';

$gourmet_mousse = new Food('Gourmet Gold Mousse','Purina',new Category('Cat'),'12,69',12,'1kg',new Ingredients('Pollo','Manzo'),'Delizionso');
$gourmet_mousse->getImage('https://shop-cdn-m.mediazs.com/bilder/gourmet/gold/mousse/x/g/alimento/umido/per/gatti/2/400/12130939_front_pack_1_2.jpg');

$wolf_wilderness = new Food('Wolf of Wilderness','WOLFFOOD',new Category('Dog'),'11.00',1,'600g',new Ingredients('Agnello','Bovino'),'Ottimo');
$wolf_wilderness->getImage('https://shop-cdn-m.mediazs.com/bilder/wolf/of/wilderness/x/g/9/400/3_einzeldose_1000x1000_it_9.jpg');

$nature_mangime = new Food('Raffy P Nature Mangime','Nature',new Category('Turtle'),'19.99',1,'1kg',new Ingredients('organismi animali','vegetali selezionati','vitamine'),'Ottimo');
$nature_mangime->getImage('https://shop-cdn-m.mediazs.com/bilder/sera/raffy/p/nature/mangime/per/tartarughe/acquatiche/9/400/5970_pla_sera_raffy_p_2_jpg_9.jpg');

$letto_basic = new Sit('Letto Basic','Zoo Plus',new Category('Cat'),'29.50',1,'Big','Finta Pelliccia');
$letto_basic->getImage('https://shop-cdn-m.mediazs.com/bilder/letto/basic/1/400/104017_104120_fg_8187_1.jpg');

$cucciaTrixie = new Sit('Cuccia per cani Trixie','Trixie',new Category('Dog'),'39.99',1,'Big','Legno di pino');
$cucciaTrixie->getImage('https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/trixie/natura/classic/con/tetto/piatto/0/400/105956_pla_trixie_natura_flachdach_classic_hs_04_0.jpg');

$colonna_tiragraffi = new Toy('Colonna tiragraffi a parete Phoebe','Phoebe',new Category('Cat'),'12.00',1,'Medium','Corda');
$colonna_tiragraffi->getImage('https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/colonna/tiragraffi/a/parete/phoebe/4/400/105455_pla_kratzstamm_wllie_fg_8476_4.jpg');

$tiaki_frisbee = new Toy('TIAKI Frisbee','TIAKI',new Category('Dog'),'8.00',1,'Medium','Plastic');
$tiaki_frisbee->getImage('https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/frisbee/6/400/374996_tiaki_frisbee_fg_3548_6.jpg');

$pet_shop_products = [$gourmet_mousse,$wolf_wilderness,$nature_mangime,$letto_basic,$cucciaTrixie,$colonna_tiragraffi,$tiaki_frisbee];