<?php
$students = array(
    'CDA2021-01' =>  ["nom" => "Julien Grossi", "url" => "https://grossi.needemand.com/"],
    'CDA2021-02' =>  ["nom" => "Jean Bernard Briois", "url" => "https://briois.needemand.com/"],
    'CDA2021-03' =>  ["nom" => "Patrick Arnaud", "url" => "https://arnaud.needemand.com/"],
    'CDA2021-04' =>  ["nom" => "Laurent Cochonneau", "url" => "https://cochonneau.needemand.com/"],
    'CDA2021-05' =>  ["nom" => "Thibault Mourichon", "url" => "https://mourichon.needemand.com/"],
    'CDA2021-06' =>  ["nom" => "Raul Hernandez", "url" => "https://hernandez.needemand.com/"],
    'CDA2021-07' =>  ["nom" => "Stephan Celestin", "url" => "https://razafiasimanana.needemand.com/"],
    'CDA2021-08' =>  ["nom" => "Pierre-Olivier Baudino", "url" => "https://pierre-olivierb.github.io"],
    'CDA2021-09' =>  ["nom" => "Yen Nhi Ngo", "url" => "https://hotongminh.needemand.com/"],
    'CDA2021-10' =>  ["nom" => "Sylvie Linxe", "url" => "https://linxe.needemand.com/"],
    'CDA2021-11' =>  ["nom" => "Young Hee Kim", "url" => "https://kim.needemand.com/"],
);
?>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Coming Soon</span>
                        <span class="section-heading-lower">VOS RÉALISATIONS</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            <?php 
                            sort($students);
                            foreach ($students as $key => $value) : ?>
                                <li class="list-unstyled-item list-hours-item d-flex" style="justify-content: space-between;">
                                <?= $value['nom'] ?>
                                    <a class="ml-auto" target="_blank" href=" <?= $value['url'] ?> "> Portfolio
                                    </a>
                                </li>
                            <?php endforeach ?>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Promo 2021-2022</strong>
                            <br />
                            Concepteurs & développeurs d'applications
                        </em>
                    </p>
                    <p class="mb-0">
                        <small><em>Needemand</em></small>
                        <br />
                        contact@needemand.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>