<?php include('include/header.php') ?>
<div class="page-title">
    <div class="ui container">
        <div class="ui grid">
            <div class="ten wide column">
                <h2 class="ui red header">Portfolio</h2>
            </div>
            <div class="six wide right aligned column">
                <ul class="ui small breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <span class=" active">Portfolio</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="inner-wrapper">
    <div class="ui container ">
        <div class="desktop-up">
            <div id="filterMenu" class="ui fluid secondary pointing menu">
                <a href="item" class="item active">All</a>
                <a href="design" class="item">Design</a>
                <a href="web" class="item">Web</a>
                <a href="wordpress" class="item">WordPress</a>
                <a href="e-commerce" class="item">e-Commerce</a>
                <a href="erp" class="item">ERP</a>
                <a href="mobile" class="item">Mobile App</a>
            </div>
            <div class="ui divider"></div>
        </div>
        <div class="mobile-up desktop-down ui form">
            <div class="field">
              <label>Category</label>
              <select id="filterMobileMenu" >
                <option value="item" >All</option>
                <option value="design" >Design</option>
                <option value="web" >Web</option>
                <option value="wordpress" >WordPress</option>
                <option value="e-commerce" >e-Commerce</option>
                <option value="erp" >ERP</option>
                <option value="mobile" >Mobile App</option>
              </select>
            </div>
            <div class="ui divider"></div>
        </div>

        <div class="ui active dimmer">
                <div class="ui text loader">Loading</div>
            </div>

        <div class=" portfolio ">

            <div class="item design web" data-category="1, 2" data-sort="value">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/thenaturepress.jpg" class="hidden content" alt="thenaturepress"><img src="image/clients/thenaturepress-logo.jpg" class="visible content" alt="thenaturepress"></div>
                    <div class="content">
                        <div class="header"><a href="https://thenaturepress.in/" rel="nofollow" target="_blank" title="tangles home salon">The Nature Press</a></div>
                        <div class="meta">Web Design, HTML5, CSS3, CorePHP, eCommerce</div>
                    </div>
                </div>
            </div>

            <div class="item design web" data-category="1, 2" data-sort="value">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/tangles.jpg" class="hidden content" alt="tangles"><img src="image/clients/tangles-logo.jpg" class="visible content" alt="tangles home salon"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.tangleshomesalon.com/" rel="nofollow" target="_blank" title="tangles home salon">Tangles Home Salon</a></div>
                        <div class="meta">Web Design, CorePHP</div>
                    </div>
                </div>
            </div>

            <div class="item web" data-category="2" data-sort="value">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/migadgets.jpg" class="hidden content" alt="migadgets"><img src="image/clients/migadgets-logo.jpg" class="visible content" alt="migadgets"></div>
                    <div class="content">
                        <div class="header"><a href="http://migadgets.biz/" rel="nofollow" target="_blank" title="migadgets">MiGadgets</a></div>
                        <div class="meta">HTML5 CSS3 CorePHP</div>
                    </div>
                </div>
            </div>

            <div class="item web wordpress" data-category="2, 4" data-sort="value">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/jk-internatinal.jpg" class="hidden content" alt="JK international "><img src="image/clients/jk-internatinal-logo.jpg" class="visible content" alt="JK international logo"></div>
                    <div class="content">
                        <div class="header"><a href="http://jjkinternational.com/" target="_blank" title="JK international">JK international</a></div>
                        <div class="meta">Business, WordPress</div>
                    </div>
                    
                </div>
            </div>

            <div class="item mobile e-commerce erp design" data-category="1, 3, 5" data-sort="value">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/mmsmobile-app.jpg" class="hidden content" alt="MMSMobile logo, mobile app, Mobile Apis, Web-Service, e-Commerce,erp"><img src="image/clients/mmsmobile-app-1.jpg" class="visible content" alt="MMSMobile logo, mobile app, e-Commerce,erp, Mobile Apis, Web-Service,"></div>
                    <div class="content">
                        <div class="header">MMSMobile</div>
                        <div class="meta">Mobile App, e-Commerce, Hybrid</div>
                    </div>
                </div>
            </div>

            <div class="item mobile design" data-category="1, 5" data-sort="value">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/IMMEDIA-logo.jpg" class="hidden content" alt="IMMEDIA logo, mobile app, social login"><img src="image/clients/IMMEDIA.jpg" class="visible content" alt="IMMEDIA logo, mobile app, social login"></div>
                    <div class="content">
                        <div class="header">IMMEDIA</div>
                        <div class="meta">Mobile App, ionic</div>
                    </div>
                </div>
            </div>

            <div class="item web" data-category="2" data-sort="value">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/scdsglobal.jpg" class="hidden content" alt="SCDS Global"><img src="image/clients/scdsglobal-logo.jpg" class="visible content" alt="SCDS logo"></div>
                    <div class="content">
                        <div class="header"><a href="http://scdsglobal.com/" target="_blank" rel="nofollow" title="SCDS Global">SCDS Global</a></div>
                        <div class="meta">HTML5 CSS3</div>
                    </div>
                </div>
            </div>

            <div class="item web erp" data-category="2">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/GeneKart-home.jpg" class="hidden content" alt="GeneKart , high end diagnostic services,  healthcare services , clinical diagnostic, Health, DNA test"><img src="image/clients/GeneKart-logo.png" class="visible content" alt="GeneKart logo, high end diagnostic services,  healthcare services , clinical diagnostic, Health, DNA test"></div>
                    <div class="content">
                        <div class="header"><a href="http://genekart.in/" target="_blank" rel="nofollow" title="GeneKart, high end diagnostic services,  healthcare services , clinical diagnostic, Health, DNA test">GeneKart</a></div>
                        <div class="meta">ERP, Core PHP </div>

                    </div>
                    
                </div>
            </div>

            <div class="item e-commerce" data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/sidsessentials.jpg" class="hidden content" alt="sids-essential"><img src="image/clients/sidsessentials-logo.jpg" class="visible content" alt="sids-essential logo, Pet Food, Super food, Dog Food, Cat Food site"></div>
                    <div class="content">
                        <div class="header"><a href="http://sidsessentials.com/" rel="nofollow" target="_blank" title="sids-essential, Pet Food, Super food, Dog Food, Cat Food site">SidsEssentials</a></div>
                        <div class="meta">eCommerce, Magento</div>
                    </div>
                    
                </div>
            </div>

            <div class="item design web" data-category="1, 2">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/GoTea.jpg" class="hidden content" alt="GoTea"><img src="image/clients/GoTea-logo.jpg" class="visible content" alt="GoTea, students,tutors, schools, institute, Property listing and review site"></div>
                    <div class="content">
                        <div class="header"><a href="https://gotea.co.in/" rel="nofollow" target="_blank" title="GoTea, students,tutors, schools, institute, Property listing and review site">GoTea</a></div>
                        <div class="meta">Web Design, CorePHP</div>
                    </div>
                    
                </div>
            </div>

            <div class="item design web" data-category="1, 2">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/BanjaraBites.jpg" class="hidden content" alt="BanjaraBites"><img src="image/clients/BanjaraBites-logo.jpg" class="visible content" alt="BanjaraBites, Food Delivery site"></div>
                    <div class="content">
                        <div class="header"><a href="http://banjarabites.com/" rel="nofollow" target="_blank" title="BanjaraBites, Food Delivery site, Food Delivery in Greater Noida">Banjara Bites</a></div>
                        <div class="meta">Web Design, CorePHP</div>
                    </div>
                </div>
            </div>
            <div class="item web wordpress" data-category="2, 4">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/financialworld.jpg" class="hidden content" alt="The Financial World"><img src="image/clients/financialworld-logo.jpg" class="visible content" alt="The Financial World"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.thefinancialworld.com/" rel="nofollow" target="_blank">The Financial World</a></div>
                        <div class="meta">News Portal, Wordpress</div>
                    </div>
                </div>
            </div>
            <div class="item web wordpress" data-category="2, 4">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/apex.jpg" class="hidden content"><img src="image/clients/apex.jpg"  alt="apex"></a>
                        <img src="image/clients/apex-logo.jpg" class="visible content" alt="apex"></div>
                    <div class="content">
                        <div class="header"><a href="http://apexmedtours.com/" rel="nofollow" target="_blank">Apex Med Tours</a></div>
                        <div class="meta">Web Design, WordPress</div>
                    </div>
                    
                </div>
            </div>
            <div class="item design web" data-category="1, 2">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/IMS.jpg" class="hidden content"><img src="image/clients/IMS.jpg"  alt="IMS"></a>
                        <img src="image/clients/IMS-logo.jpg" class="visible content" alt="Giveclass"></div>
                    <div class="content">
                        <div class="header"><a href="#" target="_blank">IMS</a></div>
                        <div class="meta">Web Design, CorePHP</div>
                    </div>
                </div>
            </div>
            <div class="item e-commerce wordpress" data-category="3, 4">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/safe4women.jpg" class="hidden content" alt="safe4women"><img src="image/clients/safe4women-logo.jpg" class="visible content" alt="safe4women"></div>
                    <div class="content">
                        <div class="header"><a href="http://safe4women.org/" rel="nofollow" target="_blank">Safe4Women</a></div>
                        <div class="meta">e-Commerce, WordPress</div>
                    </div>
                </div>
            </div>

            <div class="item design web" data-category="1, 2">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/armsunify.jpg" class="hidden content" alt="armsunify"><img src="image/clients/armsunify-logo.jpg" class="visible content" alt="armsunify"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.armsunify.com/" rel="nofollow" target="_blank">Armsunify</a></div>
                        <div class="meta">Web Design, CorePHP</div>
                    </div>
                    
                </div>
            </div>
            <div class="item design web" data-category="1, 2">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/roomsoom.jpg" class="hidden content" alt="roomsoom"><img src="image/clients/room-soom-logo.jpg" class="visible content" alt="roomsoom, Property rental site"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.roomsoom.com/" rel="nofollow" target="_blank">Room Soom</a></div>
                        <div class="meta">Web Design, CorePHP</div>
                    </div>
                    
                </div>
            </div>

            <div class="item design web" data-category="1, 2">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/giveclass.jpg" class="hidden content"><img src="image/clients/giveclass.jpg"  alt="Giveclass"></a>
                        <img src="image/clients/giveclass-logo.jpg" class="visible content" alt="Giveclass"></div>
                    <div class="content">
                        <div class="header"><a href="http://giveclass.com" rel="nofollow" target="_blank">GiveClass</a></div>
                        <div class="meta">Web Design, CorePHP</div>
                    </div>
                    
                </div>
            </div>
            <div class="item web wordpress" data-category="2, 4">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/studiomv.jpg" class="hidden content"><img src="image/clients/studiomv.jpg"  alt="StudioMV"></a>
                        <img src="image/clients/studiomv-logo.jpg" class="visible content" alt="StudioMV"></div>
                    <div class="content">
                        <div class="header"><a href="http://studiomv.in/" rel="nofollow" target="_blank">StudioMV</a></div>
                        <div class="meta">Portfolio, WordPress</div>
                    </div>
                    
                </div>
            </div>
            <div class="item web wordpress" data-category="2, 4">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/wordwidevastu.jpg" class="hidden content"><img src="image/clients/wordwidevastu.jpg"  alt="wordwide vastu"></a>
                        <img src="image/clients/wordwidevastu-logo.jpg" class="visible content" alt="worldwide vastu"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.worldwidevastu.com/" rel="nofollow" target="_blank">Worldwide Vastu</a></div>
                        <div class="meta">Web Design, WordPress</div>
                    </div>
                    
                </div>
            </div>
            <div class="item e-commerce " data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/bagatelle.jpg" class="hidden content" alt="Bagatelle"><img src="image/clients/bagatelle-logo.jpg" class="visible content" alt="Bagatelle"></div>
                    <div class="content">
                        <div class="header"><a href="http://bagatelleboutique.com/" rel="nofollow" target="_blank">Bagatelle</a></div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>
            <div class="item web wordpress" data-category="2, 4">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/vibgyor.jpg" class="hidden content"><img src="image/clients/vibgyor.jpg"  alt="vibgyor energy"></a>
                        <img src="image/clients/vibgyor-logo.jpg" class="visible content" alt="vibgyor energy"></div>
                    <div class="content">
                        <div class="header"><a href="http://vibgyorenergy.com/" rel="nofollow" target="_blank">Vibgyor Energy</a></div>
                        <div class="meta">Web Design, WordPress</div>
                    </div>
                </div>
            </div>
            <div class="item web wordpress" data-category="2, 4">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="http://wowitsolutions.com/projects/deepaks/" class="hidden content"><img src="image/clients/deepaks.jpg"  alt="The Deepaks"></a>
                        <img src="image/clients/deepaks-logo.jpg" class="visible content" alt="The Deepaks, Photographer Portfolio"></div>
                    <div class="content">
                        <div class="header"><a href="http://thedeepaks/" rel="nofollow" target="_blank">The Deepaks</a></div>
                        <div class="meta">WordPress, Portfolio</div>
                    </div>
                </div>
            </div>
            <div class="item web design" data-category="1, 2">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="http://asnimpex.com" class="hidden content"><img src="image/clients/asn.jpg"  alt="ASN"></a>
                        <img src="image/clients/asn-logo.jpg" class="visible content" alt="ASN, Barcode and label printing"></div>
                    <div class="content">
                        <div class="header"><a href="http://asnimpex.com/" rel="nofollow" target="_blank">ASN Impex</a></div>
                        <div class="meta">Web Design, HTML</div>
                    </div>
                </div>
            </div>
            <div class="item e-commerce design" data-category="1, 3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/hecmo.jpg" class="hidden content" alt="Hecmo"><img src="image/clients/hecmo-logo.jpg" class="visible content" alt="Hecmo"></div>
                    <div class="content">
                        <div class="header"><a href="http://hecmo.com" rel="nofollow" target="_blank">Hecmo</a></div>
                        <div class="meta">e-Commerce, Design, Magento</div>
                    </div>
                    
                </div>
            </div>

            <div class="item e-commerce" data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/casagear.jpg" class="hidden content" alt="Casa Gear"><img src="image/clients/casagear-logo.jpg" class="visible content" alt="Casa Gear"></div>
                    <div class="content">
                        <div class="header"><a href="https://www.casagear.com/" rel="nofollow" target="_blank">Casa Gear</a></div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>

            <div class="item design web wordpress" data-category="2, 4">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/allied.jpg" class="hidden content"><img src="image/clients/allied.jpg"  alt="Allied"></a>
                        <img src="image/clients/allied-logo.jpg" class="visible content" alt="Allied"></div>
                    <div class="content">
                        <div class="header"><a href="http://alliedservices-tech.com/" rel="nofollow" target="_blank">Allied Services Tech</a></div>
                        <div class="meta">Design, WordPress</div>
                    </div>
                </div>
            </div>

            <div class="item web" data-category="2">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/deals2grab.jpg" class="hidden content"><img src="image/clients/deals2grab.jpg" alt="Deals2Grab"></a>
                        <img src="image/clients/deals2grab-logo.jpg" class="visible content" alt="Deals2Grab"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.deals2grab.in/" rel="nofollow" target="_blank">Deals2Grab</a></div>
                        <div class="meta">e-Commerce, PHP</div>
                    </div>
                </div>
            </div>
            <div class="item e-commerce" data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/benzara.jpg" class="hidden content" alt="Benzara"><img src="image/clients/benzara-logo.jpg" class="visible content" alt="Benzara"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.benzara.com/" rel="nofollow" target="_blank">Benzara</a></div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>
            <div class="item design wordpress" data-category="1, 4">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/raghubirlalanand.jpg" class="hidden content" alt="Raghubir Lal Anand"><img src="image/clients/raghubirlalanand-logo.jpg" class="visible content" alt="Raghubir Lal Anand"></div>
                    <div class="content">
                        <div class="header">Raghubir Lal Anand</div>
                        <div class="meta">Web Design, WordPress</div>
                    </div>
                </div>
            </div>
            <div class="item design wordpress" data-category="1, 4">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/corrida.jpg" class="hidden content"><img src="image/clients/corrida.jpg"  alt="corrida"></a>
                        <img src="image/clients/corrida-logo.jpg" class="visible content" alt="corrida"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.corridaavolta.com/" rel="nofollow" target="_blank">Corrida</a></div>
                        <div class="meta">Web Design, WordPress</div>
                    </div>
                </div>
            </div>
            <div class="item e-commerce design" data-category="1, 3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/imagecourt.jpg" class="hidden content" alt="Image Court"><img src="image/clients/imagecourt-logo.jpg" class="visible content" alt="Image Court"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.imagecourt.com/" rel="nofollow" target="_blank">Image Court</a></div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>
            <div class="item design web" data-category="1, 2">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image">
                        <a href="image/clients/grosindustries.jpg" class="hidden content"><img src="image/clients/grosindustries.jpg"  alt="grosindustries"></a>
                        <img src="image/clients/gros-logo.jpg" class="visible content" alt="grosindustries"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.grosindustries.com/" rel="nofollow" target="_blank">Gros Industries</a></div>
                        <div class="meta">Web Design, HTML, CSS</div>
                    </div>
                </div>
            </div>
            <div class="item design web" data-category="1, 2">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/itspark.jpg" class="hidden content" alt="IT Spark"><img src="image/clients/itspark-logo.jpg" class="visible content" alt="IT Spark"></div>
                    <div class="content">
                        <div class="header">IT Spark</div>
                        <div class="meta">Web Design,WordPress</div>
                    </div>
                </div>
            </div>
            <div class="item web wordpress" data-category="2, 4">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/mindpriests.jpg" class="hidden content" alt="Mindpriests"><img src="image/clients/mindpriests-logo.jpg" class="visible content" alt="Mindpriests"></div>
                    <div class="content">
                        <div class="header"><a href="http://mindpriests.com/" rel="nofollow" target="_blank">MindPriests</a></div>
                        <div class="meta">Event,Wordpress</div>
                    </div>
                    
                </div>
            </div>

            <div class="item e-commerce" data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/nicholasdeakins.jpg" class="hidden content" alt="Nicholas Deakins"><img src="image/clients/nicholasdeakins-logo.jpg" class="visible content" alt="Nicholas Deakins"></div>
                    <div class="content">
                        <div class="header"><a href="https://www.nicholasdeakins.com/" rel="nofollow" target="_blank">Nicholas Deakins</a></div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>
            <div class="item design web" data-category="1, 2">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image">
                        <img src="image/clients/oyetel.jpg" class="hidden content" alt="">
                        <img src="image/clients/oyetel-logo.jpg" class="visible content" alt="">
                    </div>
                    <div class="content">
                        <div class="header"><a href="http://oyetel.com/" rel="nofollow" target="_blank">OyeTel</a></div>
                        <div class="meta">Web Design, PHP</div>
                    </div>
                </div>
            </div>
            <div class="item mobile design" data-category="1, 5">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/jumping-monkey.jpg" class="hidden content" alt="Jumping Monkey Game, Mobile Game, Android Games"><img src="image/clients/jumping-monkey-1.jpg" class="visible content" alt="Jumping Monkey Game, Mobile Game, Android Games"></div>
                    <div class="content">
                        <div class="header"><a href="https://play.google.com/store/apps/details?id=com.highbrow.jumpingmonkey&amp;hl=en" rel="nofollow" target="_blank">Jumping Monkey</a></div>
                        <div class="meta">Mobile Game,</div>
                    </div>
                    
                </div>
            </div>
            <div class="item e-commerce" data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image">
                        <img src="image/clients/promdressshop.jpg" class="hidden content" alt="">
                        <img src="image/clients/promdressshop-logo.jpg" alt="" class="visible content">
                    </div>
                    <div class="content">
                        <div class="header"><a href="https://www.promdressshop.com/" rel="nofollow" target="_blank">Prom Dress Shop</a></div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>
            <div class="item web" data-category="2">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/satechi-net.jpg" class="hidden content" alt="Satechi"><img src="image/clients/satechi-net-logo.jpg" class="visible content" alt="Satechi"></div>
                    <div class="content">
                        <div class="header">Satechi</div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>
            <div class="item e-commerce" data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/fasttrack.jpg" class="hidden content" alt="FastTrack"><img src="image/clients/fasttrack-logo.jpg" class="visible content" alt="FastTrack"></div>
                    <div class="content">
                        <div class="header"><a href="http://fasttrack-india.in/" rel="nofollow" target="_blank">Fast Track</a></div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>
            <div class="item web wordpress" data-category="2, 4">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/securicocctv.jpg" class="hidden content" alt="Securico CCTV"><img src="image/clients/securicocctv-logo.jpg" class="visible content" alt="Securico CCTV"></div>
                    <div class="content">
                        <div class="header">Securico CCTV</div>
                        <div class="meta">Web, WordPress </div>
                    </div>
                </div>
            </div>
            <div class="item web design" data-category="1, 2">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/transferconnect.jpg" class="hidden content" alt="Transfer Connect"><img src="image/clients/transferconnect-logo.jpg" class="visible content" alt="Transfer Connect"></div>
                    <div class="content">
                        <div class="header">Transfer Connect</div>
                        <div class="meta">Design, HTML</div>
                    </div>
                </div>
            </div>
            <div class="item e-commerce" data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/ultradefender.jpg" class="hidden content" alt="UltraDefender"><img src="image/clients/ultradefender-logo.jpg" class="visible content" alt="UltraDefender"></div>
                    <div class="content">
                        <div class="header"><a href="http://ultradefender.com/" rel="nofollow" target="_blank">Ultra Defender</a></div>
                        <div class="meta">e-Commerce, OpenCart</div>
                    </div>
                    
                </div>
            </div>
            <div class="item e-commerce" data-category="3">
                <div class="ui fluid teal card">
                    <div class="ui slide up reveal image"><img src="image/clients/um-brands.jpg" class="hidden content" alt="UM Brands"><img src="image/clients/um-brands-logo.jpg" class="visible content" alt="UM Brands"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.um-brands.com/" rel="nofollow" target="_blank">UM-Brands</a></div>
                        <div class="meta">e-Commerce, Magento</div>
                    </div>
                </div>
            </div>
            <div class="item web" data-category="2">
                <div class="ui fluid blue card">
                    <div class="ui slide up reveal image"><img src="image/clients/whereincity.jpg" class="hidden content" alt="where in city"><img src="image/clients/whereincity-logo.jpg" class="visible content" alt="where in city"></div>
                    <div class="content">
                        <div class="header">Where in City</div>
                        <div class="meta">Web, PHP</div>
                    </div>
                </div>
            </div>
            <div class="item design web" data-category="1, 2">
                <div class="ui fluid orange card">
                    <div class="ui slide up reveal image"><img src="image/clients/zmr.jpg" class="hidden content" alt="zmr"><img src="image/clients/zmr-logo.jpg" class="visible content" alt="zmr"></div>
                    <div class="content">
                        <div class="header"><a href="http://www.zoemaritime.com/" rel="nofollow" target="_blank">Zoe Maritime</a></div>
                        <div class="meta">Design, HTML</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<script src="plugin/muuri.min.js"></script>
<script>
    $(function () {
        var grid;
        $(window).on('load',function() {
            $(".dimmer").removeClass('active');
            grid = new Muuri('.portfolio');
        })

        $("#filterMenu").on('click','.item', function(e) {
            e.preventDefault();
            var cat = $(this).attr('href');
            grid.filter('.'+cat);
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        })
        
        $("#filterMobileMenu").on('change', function() {
            grid.filter('.'+$(this).val());
        })
        
    })

</script>
<?php include('include/footer.php') ?>
