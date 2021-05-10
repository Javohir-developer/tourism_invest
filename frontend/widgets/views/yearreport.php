
<section class="year_report">
    <div class="container">
        <div class="frame" style="z-index: 9;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="left">
                        <h2><?=__('Valyutalar konverteri')?></h2>
                        <form action="">
                            <input type="number" value="100" id="sumInput">
                            <select class="selectpicker">
								<option data-content="<span data-value='0'><?=__('Valyuta tanlang')?></span>"></option>
								<?foreach ($kurs as $item) {
									echo "<option data-content=\"<img src='" . $this->getImageUrl("img/{$item['name']}.png") . "'><span data-value='{$item['value']}'>{$item['name']}</span>\"></option>";
								}?>
                            </select>
                            <input type="number" aria-controls="off" readonly="" value="0" id="sumOut">
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
					<a href="http://strategy.gov.uz/">
                    <div class="right">
                        <div class="img">
                            <img src="<?=$this->getImageUrl('img/rasm.jpg')?>" alt="">
                        </div>
                        <div class="title"><?=__('2017-2021 yil Xarakatlar Strategiyasi')?></div>
                    </div>
					</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="reporting">
                        <h2><?=__('Yillik hisobot')?></h2>
                        <div class="title">
							<?=__('2018 йил пахта хом ашёси тайёрлаш тўғрисида МАЪЛУМОТ')?>
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="qoraqalpoq" role="tabpanel"                                                    aria-labelledby="pills-home-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('ҚҚР')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">145 838</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">126 835</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">19 583</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">184 200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="xorazm" role="tabpanel"                                                             aria-labelledby="pills-profile-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Хоразм')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">195 994</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">178 294</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">17 700</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">246 400</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="navoiy" role="tabpanel"                                                             aria-labelledby="pills-contact-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Навоий')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">72 582</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">-</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">72 582</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">94 600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="samarqand" role="tabpanel"                                                                aria-labelledby="pills-home-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Самарқанд ')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">117 780</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">104 135</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">16 645</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">208 600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="buxoro" role="tabpanel"                                                             aria-labelledby="pills-profile-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Бухоро')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">259 334</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">233 353</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">25 981</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">318 301</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="surxondaryo" role="tabpanel"                                                             aria-labelledby="pills-contact-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Сурхондарё ')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">131 584</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">104 147</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">27 407</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">234 500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="jizzax" role="tabpanel"                                                             aria-labelledby="pills-profile-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Жиззах ')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">133 412</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">129 874</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">3 538</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">208 600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="qashqadaryo" role="tabpanel"                                                             aria-labelledby="pills-contact-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Қашқадарё ')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">212 059</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">194 780</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">17 279</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">2318 300</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sirdaryo" role="tabpanel"                                                                aria-labelledby="pills-home-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Сирдарё')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">133 706</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">104 581</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">29 125</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">193 600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="toshkent" role="tabpanel"                                                             aria-labelledby="pills-profile-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Тошкент ')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">122 136</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">106 582</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">15 907</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">219 600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="fargona" role="tabpanel"                                                             aria-labelledby="pills-contact-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Фарғона')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">198 760</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">180 460</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">18 300</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">238 600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="andijon" role="tabpanel"                                                             aria-labelledby="pills-contact-tab">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Андижон')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">207 040</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">160 797</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">46 243</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">240 800</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="namangan">
                                <div class="statistics">
                                    <div class="statistics_bg"></div>
                                    <div class="place">
                                        <?=__('Наманган')?>
                                    </div>
                                    <div class="subtitle">
                                        <?=__('Пахта хом ашёси')?>
                                    </div>
                                    <div class="producc">
                                        <div>
                                            <span class="name_product"><?=__('Мавсум бошидан')?></span>
                                            <span class=""></span>
                                            <span class="total">148 310</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Давлат буюртмаси')?></span>
                                            <span class=""></span>
                                            <span class="total">129 018</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Кластер ва Қўшма корхоналар')?></span>
                                            <span class=""></span>
                                            <span class="total">19 292</span>
                                        </div>
                                        <div>
                                            <span class="name_product"><?=__('Шартномавий режа, тонна')?></span>
                                            <span class=""></span>
                                            <span class="total">192 500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="uz_map">
                        <a href="#qoraqalpoq" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Qoraqalpog‘iston Respublikasi</div>
                                <div class="subtitle">Qoraqalpog‘iston Respublikasi</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#xorazm" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Xorazm</div>
                                <div class="subtitle">Xorazm</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#navoiy" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Navoiy</div>
                                <div class="subtitle">Navoiy</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#samarqand" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Samarqand</div>
                                <div class="subtitle">Samarqand</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#buxoro" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Buxoro</div>
                                <div class="subtitle">Buxoro</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#surxondaryo" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Surxondaryo</div>
                                <div class="subtitle">Surxondaryo</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#jizzax" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Jizzax</div>
                                <div class="subtitle">Jizzax</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#qashqadaryo" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">qashqadaryo</div>
                                <div class="subtitle">Qashqadaryo</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#sirdaryo" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Sirdaryo</div>
                                <div class="subtitle">Sirdaryo</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#toshkent" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Toshkent</div>
                                <div class="subtitle">Toshkent</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#fargona" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Farg'ona</div>
                                <div class="subtitle">Farg'ona</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#andijon" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Andijon</div>
                                <div class="subtitle">Andijon</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                        <a href="#namangan" class="map-item">
                            <div class="item-tooltip">
                                <div class="title">Namangan</div>
                                <div class="subtitle">Namangan</div>
                            </div>
                            <div class="item-marker"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="annual_statistics">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="title_year"><?=__('Qishloq xo’jaligi jamg’armasi yillik ko’rsatkichlari')?></div>
                        <div class="second_slider1 owl-carousel owl-theme" id="sync1">
                            <div class="frame">
                                <div class="title">2015-2018 yillardagi don maxsulotlari ko’rsatkichlari</div>
                                <div class="subtitle">O’tgan yilning sentyabr oyidan boshlanga paxta terim jarayoni shu faslning noyabr oyining oxirda yakuniga yetgan bunda umumiy hisobda 300.67 mln tonna paxta terib olindi.</div>
                            </div>
                            <div class="frame">
                                <div class="title">2015-2018 yillardagi don maxsulotlari ko’rsatkichlari</div>
                                <div class="subtitle">O’tgan yilning sentyabr oyidan boshlanga paxta terim jarayoni shu faslning noyabr oyining oxirda yakuniga yetgan bunda umumiy hisobda 300.67 mln tonna paxta terib olindi.</div>
                            </div>
                            <div class="frame">
                                <div class="title">2015-2018 yillardagi don maxsulotlari ko’rsatkichlari</div>
                                <div class="subtitle">O’tgan yilning sentyabr oyidan boshlanga paxta terim jarayoni shu faslning noyabr oyining oxirda yakuniga yetgan bunda umumiy hisobda 300.67 mln tonna paxta terib olindi.</div>
                            </div>
                            <div class="frame">
                                <div class="title">2015-2018 yillardagi don maxsulotlari ko’rsatkichlari</div>
                                <div class="subtitle">O’tgan yilning sentyabr oyidan boshlanga paxta terim jarayoni shu faslning noyabr oyining oxirda yakuniga yetgan bunda umumiy hisobda 300.67 mln tonna paxta terib olindi.</div>
                            </div>
                            <div class="frame">
                                <div class="title">2015-2018 yillardagi don maxsulotlari ko’rsatkichlari</div>
                                <div class="subtitle">O’tgan yilning sentyabr oyidan boshlanga paxta terim jarayoni shu faslning noyabr oyining oxirda yakuniga yetgan bunda umumiy hisobda 300.67 mln tonna paxta terib olindi.</div>
                            </div>
                            <div class="frame">
                                <div class="title">2015-2018 yillardagi don maxsulotlari ko’rsatkichlari</div>
                                <div class="subtitle">O’tgan yilning sentyabr oyidan boshlanga paxta terim jarayoni shu faslning noyabr oyining oxirda yakuniga yetgan bunda umumiy hisobda 300.67 mln tonna paxta terib olindi.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="second_slider2 owl-carousel owl-theme" id="sync2">
                            <div class="img">
                                <canvas id="myChart"></canvas>
                            </div>
                            <div class="img">
                                <img src="img/dashboard.png" alt="">
                            </div>
                            <div class="img">
                                <img src="img/dashboard.png" alt="">
                            </div>
                            <div class="img">
                                <img src="img/dashboard.png" alt="">
                            </div>
                            <div class="img">
                                <img src="img/dashboard.png" alt="">
                            </div>
                            <div class="img">
                                <img src="img/dashboard.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="documents">
            <div class="row">

                <?php
                $menu_frontend_header = new \common\modules\menu\components\MenuHujjatlar(['alias' => 'menu-hujjatlar', 'without_cache' => true]);
                ?>

            </div>
        </div>
    </div>
</section>