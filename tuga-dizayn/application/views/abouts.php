<div class="clearfix"></div>
<section class="page-header-container"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h3>Kurumsal</h3>    
                </div>            
            </div>
        </div>
    </div>
</section>
<section class="abouts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable tabs-left">
                    
                    <ul class="nav nav-tabs">
                        <?php foreach ($staticss as $key => $value) { ?>
                            <li <?php echo $key == 0 ? 'class="active"' : ''; ?>>
                                <a href="#tab-<?php echo $value->Id; ?>" data-toggle="tab"><?php echo $value->statics_name; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="tab-content abouts-content">
                        <?php foreach ($staticss as $key => $value) { ?>
                            <div class="tab-pane <?php echo $key == 0 ? 'active' : ''; ?>" id="tab-<?php echo $value->Id; ?>">
                                <h1><?php echo $value->statics_name; ?></h1>
                                <?php echo $value->statics_content; ?>                     
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>