<div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="" data-original-title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
    <div id="theme-switcher-wrapper" style="overflow:auto;">
        <div class="slimScrollDiv" >
		<div class="scroll-switcher" >
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt" style="display: none; " <?php if ( $box_layout == 'boxed-layout') {echo 'checked';}?>>
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt" style="display: none;"  <?php if ( $fixed_header == 'fixed-header') {echo 'checked';}?>>
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt" style="display: none;" <?php if ( $fixed_sidebar == 'fixed-sidebar') {echo 'checked';}?>>
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt" style="display: none;" <?php if ( $closed_sidebar == 'closed-sidebar') {echo 'checked';}?>>
                </li>
            </ul>
          <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="" href="javascript:void(0);" data-original-title="Pattern 3">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="" href="javascript:void(0);" data-original-title="Pattern 4">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="" href="javascript:void(0);" data-original-title="Pattern 5">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="" href="javascript:void(0);" data-original-title="Pattern 6">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="" href="javascript:void(0);" data-original-title="Pattern 7">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="" href="javascript:void(0);" data-original-title="Pattern 8">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="" href="javascript:void(0);" data-original-title="Pattern 9">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="" href="javascript:void(0);" data-original-title="Pattern 10">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="" href="javascript:void(0);" data-original-title="Black">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="" href="javascript:void(0);" data-original-title="Gray">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="" href="javascript:void(0);" data-original-title="Image 1">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="" href="javascript:void(0);" data-original-title="Image 2">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="" href="javascript:void(0);" data-original-title="Image 3">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="" href="javascript:void(0);" data-original-title="Image 4">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="" href="javascript:void(0);" data-original-title="Image 5">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="" href="javascript:void(0);" data-original-title="Image 6">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary set-adminheader-solid-style" data-header-bg="bg-primary font-inverse" title="" href="javascript:void(0);" data-original-title="Primary">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green set-adminheader-solid-style" data-header-bg="bg-green font-inverse" title="" href="javascript:void(0);" data-original-title="Green">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red set-adminheader-solid-style" data-header-bg="bg-red font-inverse" title="" href="javascript:void(0);" data-original-title="Red">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue set-adminheader-solid-style" data-header-bg="bg-blue font-inverse" title="" href="javascript:void(0);" data-original-title="Blue">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning set-adminheader-solid-style" data-header-bg="bg-warning font-inverse" title="" href="javascript:void(0);" data-original-title="Warning">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple set-adminheader-solid-style" data-header-bg="bg-purple font-inverse" title="" href="javascript:void(0);" data-original-title="Purple">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black set-adminheader-solid-style" data-header-bg="bg-black font-inverse" title="" href="javascript:void(0);" data-original-title="Black">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1 set-adminheader-gradient-style" data-header-bg="bg-gradient-1 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 1">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2 set-adminheader-gradient-style" data-header-bg="bg-gradient-2 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 2">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3 set-adminheader-gradient-style" data-header-bg="bg-gradient-3 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 3">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4 set-adminheader-gradient-style" data-header-bg="bg-gradient-4 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 4">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 5">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6 set-adminheader-gradient-style" data-header-bg="bg-gradient-6 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 6">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7 set-adminheader-gradient-style" data-header-bg="bg-gradient-7 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 7">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8 set-adminheader-gradient-style" data-header-bg="bg-gradient-8 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 8">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary set-sidebar-solid-style" data-header-bg="bg-primary font-inverse" title="" href="javascript:void(0);" data-original-title="Primary">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green set-sidebar-solid-style" data-header-bg="bg-green font-inverse" title="" href="javascript:void(0);" data-original-title="Green">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red set-sidebar-solid-style" data-header-bg="bg-red font-inverse" title="" href="javascript:void(0);" data-original-title="Red">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue set-sidebar-solid-style" data-header-bg="bg-blue font-inverse" title="" href="javascript:void(0);" data-original-title="Blue">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning set-sidebar-solid-style" data-header-bg="bg-warning font-inverse" title="" href="javascript:void(0);" data-original-title="Warning">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple set-sidebar-solid-style" data-header-bg="bg-purple font-inverse" title="" href="javascript:void(0);" data-original-title="Purple">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black set-sidebar-solid-style" data-header-bg="bg-black font-inverse" title="" href="javascript:void(0);" data-original-title="Black">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1 set-sidebar-gradient-style" data-header-bg="bg-gradient-1 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 1">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2 set-sidebar-gradient-style" data-header-bg="bg-gradient-2 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 2">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3 set-sidebar-gradient-style" data-header-bg="bg-gradient-3 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 3">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4 set-sidebar-gradient-style" data-header-bg="bg-gradient-4 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 4">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5 set-sidebar-gradient-style" data-header-bg="bg-gradient-5 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 5">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6 set-sidebar-gradient-style" data-header-bg="bg-gradient-6 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 6">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7 set-sidebar-gradient-style" data-header-bg="bg-gradient-7 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 7">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8 set-sidebar-gradient-style" data-header-bg="bg-gradient-8 font-inverse" title="" href="javascript:void(0);" data-original-title="Gradient 8">Gradient 8</a>
            </div>
        </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.298039); width: 10px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 524px;"></div><div class="slimScrollRail" style="width: 10px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() { 

       $('.set-sidebar-solid-style').on('click', function(){            
            var classes_solid = $(this).attr('data-header-bg');            
            var setbit = 1;
           
            setbit = "bg-gradient-"+setbit; 
            $.ajax({url: "<?php echo BASE_ADMIN_URL ;?>/include/theme_setting.php?sidebar_style_solid="+classes_solid,
                 success: function(result){
                    }
            });

        });  

        $('.set-sidebar-gradient-style').on('click', function(){            
            var classes_gradient = $(this).attr('data-header-bg');            
            var setbit = 1;
           
            setbit = "bg-gradient-"+setbit; 
            $.ajax({url: "<?php echo BASE_ADMIN_URL ;?>/include/theme_setting.php?sidebar_style_gradients="+classes_gradient,
                 success: function(result){
                    }
            });

        });

        $('.set-adminheader-solid-style').on('click', function(){            
            var h_classes_solid = $(this).attr('data-header-bg');            
            var setbit = 1;
           
            setbit = "bg-gradient-"+setbit; 
            $.ajax({url: "<?php echo BASE_ADMIN_URL ;?>/include/theme_setting.php?header_style_solid="+h_classes_solid,
                 success: function(result){
                    }
            });

        });

        $('.set-adminheader-gradient-style').on('click', function(){            
            var h_classes_gradient = $(this).attr('data-header-bg');            
            var setbit = 1;
           
            setbit = "bg-gradient-"+setbit; 
            $.ajax({url: "<?php echo BASE_ADMIN_URL ;?>/include/theme_setting.php?header_style_gradients="+h_classes_gradient,
                 success: function(result){
                    }
            });

        });
       
        $('.switch-toggle').on('click', function(){            
            if($(this).hasClass('switch-on')){

                var box_layout_class = 'YES';

            }else{

                var box_layout_class = 'NO';
            }
            var inputID = $(this).attr('id').replace('#', '');
            if(inputID == 'boxed-layout'  ){

                var filedName = 'box_layout';

            }else if(inputID == 'fixed-sidebar'    ){

                var filedName = 'fixed_sidebar';

            }
            else if(inputID ==  'fixed-header' ){

                var filedName = 'fixed_header';

            }else if(inputID ==  'closed-sidebar' ){

                var filedName = 'closed_sidebar';

            }
            $.ajax({url: "<?php echo BASE_ADMIN_URL ;?>/include/theme_setting.php?"+filedName+"="+box_layout_class,
                 success: function(result){
                    
                    }
            });

        });
    });

</script>