<?php

if ( !function_exists( 'lsx_process_font' ) ) :
function lsx_process_font( $font ) {
  
  if ( empty( $font['font-weight'] ) )
    $font['font-weight'] = "inherit";

  if ( empty( $font['font-style'] ) )
    $font['font-style'] = "inherit";

  if ( isset( $font['font-size'] ) )
    $font['font-size'] = filter_var( $font['font-size'], FILTER_SANITIZE_NUMBER_INT );

  return $font;
}
endif;


if ( !function_exists( 'bootstrap_variables' ) ) :
/*
 * The content below is a copy of bootstrap's _variables.scsss file.
 *
 * Some options are user-configurable and stored as theme mods.
 * We try to minimize the options and simplify the user environment.
 * In order to do that, we 'll have to provide a minimum amount of options
 * and calculate the rest based on the user's selections.
 *
 */
function bootstrap_variables() {
  global $lsx_options;

  $body_bg          = '#' . str_replace( '#', '', $lsx_options['color_body_bg'] );
  $brand_primary    = '#' . str_replace( '#', '', $lsx_options['color_brand_primary'] );
  $brand_success    = '#' . str_replace( '#', '', $lsx_options['color_brand_success'] );
  $brand_warning    = '#' . str_replace( '#', '', $lsx_options['color_brand_warning'] );
  $brand_danger     = '#' . str_replace( '#', '', $lsx_options['color_brand_danger'] );
  $brand_info       = '#' . str_replace( '#', '', $lsx_options['color_brand_info'] );

  $font_base              = lsx_process_font( $lsx_options['font_base'] );
  $font_navbar            = lsx_process_font( $lsx_options['font_navbar'] );
  $font_brand             = lsx_process_font( $lsx_options['font_brand'] );
  $font_jumbotron         = lsx_process_font( $lsx_options['font_jumbotron'] );
  $font_heading           = lsx_process_font( $lsx_options['font_heading'] );  

  $font_h1 = lsx_process_font( $lsx_options['font_h1'] );
  $font_h2 = lsx_process_font( $lsx_options['font_h2'] );
  $font_h3 = lsx_process_font( $lsx_options['font_h3'] );
  $font_h4 = lsx_process_font( $lsx_options['font_h4'] );
  $font_h5 = lsx_process_font( $lsx_options['font_h5'] );
  $font_h6 = lsx_process_font( $lsx_options['font_h6'] );

  $font_h1_face   = $font_h1['font-family'];
  $font_h1_size   = ( ( filter_var( $font_h1['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h1_weight = $font_h1['font-weight'];
  $font_h1_style  = $font_h1['font-style'];

  $font_h2_face   = $font_h2['font-family'];
  $font_h2_size   = ( ( filter_var( $font_h2['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h2_weight = $font_h2['font-weight'];
  $font_h2_style  = $font_h2['font-style'];

  $font_h3_face   = $font_h3['font-family'];
  $font_h3_size   = ( ( filter_var( $font_h3['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h3_weight = $font_h3['font-weight'];
  $font_h3_style  = $font_h3['font-style'];

  $font_h4_face   = $font_h4['font-family'];
  $font_h4_size   = ( ( filter_var( $font_h4['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h4_weight = $font_h4['font-weight'];
  $font_h4_style  = $font_h4['font-style'];

  $font_h5_face   = $font_h5['font-family'];
  $font_h5_size   = ( ( filter_var( $font_h5['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h5_weight = $font_h5['font-weight'];
  $font_h5_style  = $font_h5['font-style'];

  $font_h6_face   = $font_h6['font-family'];
  $font_h6_size   = ( ( filter_var( $font_h6['font-size'], FILTER_SANITIZE_NUMBER_INT ) ) / 100 );
  $font_h6_weight = $font_h6['font-weight'];
  $font_h6_style  = $font_h6['font-style'];

  if ( $lsx_options['font_heading_custom'] != 1 ) {

    $font_h1_face   = '$font-family-base';
    $font_h1_weight = '$headings-font-weight';
    $font_h1_style  = 'inherit';

    $font_h2_face   = '$font-family-base';
    $font_h2_weight = '$headings-font-weight';
    $font_h2_style  = 'inherit';

    $font_h3_face   = '$font-family-base';
    $font_h3_weight = '$headings-font-weight';
    $font_h3_style  = 'inherit';

    $font_h4_face   = '$font-family-base';
    $font_h4_weight = '$headings-font-weight';
    $font_h4_style  = 'inherit';

    $font_h5_face   = '$font-family-base';
    $font_h5_weight = '$headings-font-weight';
    $font_h5_style  = 'inherit';

    $font_h6_face   = '$font-family-base';
    $font_h6_weight = '$headings-font-weight';
    $font_h6_style  = 'inherit';

  }

  $text_color       = '#' . str_replace( '#', '', $font_base['color'] );
  $link_hover_color = $lsx_options['link_hover_color'];
  $font_size_base   = $font_base['font-size'];
  $font_style_base  = $font_base['font-style'];
  $font_weight_base = $font_base['font-weight'];
  $sans_serif       = $font_base['font-family'];

  $border_radius    = filter_var( $lsx_options['general_border_radius'], FILTER_SANITIZE_NUMBER_INT );
  $border_radius    = ( strlen( $border_radius ) < 1 ) ? 0 : $border_radius;

  $padding_base     = intval( $lsx_options['padding_base'] );
  $navbar_bg        = '#' . str_replace( '#', '', $lsx_options['navbar_bg'] );
  $jumbotron_bg     = '#' . str_replace( '#', '', $lsx_options['jumbotron_bg'] );

  $screen_sm = filter_var( $lsx_options['screen_tablet'], FILTER_SANITIZE_NUMBER_INT );
  $screen_md = filter_var( $lsx_options['screen_desktop'], FILTER_SANITIZE_NUMBER_INT );
  $screen_lg = filter_var( $lsx_options['screen_large_desktop'], FILTER_SANITIZE_NUMBER_INT );
  $gutter    = filter_var( $lsx_options['layout_gutter'], FILTER_SANITIZE_NUMBER_INT );
  $gutter    = ( $gutter < 2 ) ? 2 : $gutter;

  $screen_xs = ( $site_style == 'static' ) ? '50px' : '480px';
  $screen_sm = ( $site_style == 'static' ) ? '50px' : $screen_sm;
  $screen_md = ( $site_style == 'static' ) ? '50px' : $screen_md;

  $navbar_height    = filter_var( $lsx_options['navbar_height'], FILTER_SANITIZE_NUMBER_INT );
  $navbar_text_color       = '#' . str_replace( '#', '', $font_navbar['color'] );

  $brand_text_color       = '#' . str_replace( '#', '', $font_brand['color'] );
  $jumbotron_text_color   = '#' . str_replace( '#', '', $font_jumbotron['color'] );

  
$variables = '
//
// Variables
// --------------------------------------------------


//== Colors
//
//## Gray and brand colors for use across Bootstrap.

$gray-darker:            lighten(#000, 13.5%) !default; // #222
$gray-dark:              lighten(#000, 20%) !default;   // #333
$gray:                   lighten(#000, 33.5%) !default; // #555
$gray-light:             lighten(#000, 60%) !default;   // #999
$gray-lighter:           lighten(#000, 93.5%) !default; // #eee

$brand-primary:         ' . $brand_primary . ' !default;
$brand-success:         ' . $brand_success . ' !default;
$brand-info:            ' . $brand_info . ' !default;
$brand-warning:         ' . $brand_warning . ' !default;
$brand-danger:          ' . $brand_danger . ' !default;


//== Scaffolding
//
// ## Settings for some of the most global styles.

//** Background color for `<body>`.
$body-bg:               #fff !default;
//** Global text color on `<body>`.
$text-color:            ' . $text_color . ';

//** Global textual link color.
$link-color:            $brand-primary !default;
//** Link hover color set via `darken()` function.
$link-hover-color:       darken($link-color, 15%) !default;


//== Typography
//
//## Font, line-height, and color for body text, headings, and more.

$font-family-sans-serif:  ' . $sans_serif . ';
$font-family-serif:       Georgia, "Times New Roman", Times, serif !default;
//** Default monospace fonts for `<code>`, `<kbd>`, and `<pre>`.
$font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace !default;
$font-family-base:        $font-family-sans-serif !default;

$font-size-base:          ' . $font_size_base . 'px;
$font-size-large:         ceil(($font-size-base * 1.25)) !default; // ~18px
$font-size-small:         ceil(($font-size-base * 0.85)) !default; // ~12px

$font-size-h1:            floor(($font-size-base * ' . $font_h1_size . ')) !default; // ~36px
$font-size-h2:            floor(($font-size-base * ' . $font_h2_size . ')) !default; // ~30px
$font-size-h3:            ceil(($font-size-base * ' . $font_h3_size . ')) !default; // ~24px
$font-size-h4:            ceil(($font-size-base * ' . $font_h4_size . ')) !default; // ~18px
$font-size-h5:            ' . $font_h5_size . ' !default;
$font-size-h6:            ceil(($font-size-base * ' . $font_h6_size . ')) !default; // ~12px

//** Unit-less `line-height` for use in components like buttons.
$line-height-base:        1.428571429 !default; // 20/14
//** Computed \"line-height\" (`font-size` * `line-height`) for use with `margin`, `padding`, etc.
$line-height-computed:    floor(($font-size-base * $line-height-base)) !default; // ~20px

//** By default, this inherits from the `<body>`.
$headings-font-family:    inherit !default;
$headings-font-weight:    500 !default;
$headings-line-height:    1.1 !default;
$headings-color:          inherit !default;


//-- Iconography
//
//## Specify custom locations of the include Glyphicons icon font. Useful for those including Bootstrap via Bower.

$icon-font-path: "bootstrap/" !default;
$icon-font-name:          "glyphicons-halflings-regular" !default;
$icon-font-svg-id:        "glyphicons_halflingsregular" !default;

//== Components
//
//## Define common padding and border radius sizes and more. Values based on 14px text and 1.428 line-height (~20px to start).

$padding-base-vertical:     6px !default;
$padding-base-horizontal:   12px !default;

$padding-large-vertical:    10px !default;
$padding-large-horizontal:  16px !default;

$padding-small-vertical:    5px !default;
$padding-small-horizontal:  10px !default;

$padding-xs-vertical:       1px !default;
$padding-xs-horizontal:     5px !default;

$line-height-large:         1.33 !default;
$line-height-small:         1.5 !default;

$border-radius-base:        4px !default;
$border-radius-large:       6px !default;
$border-radius-small:       3px !default;

//** Global color for active items (e.g., navs or dropdowns).
$component-active-color:    #fff !default;
//** Global background color for active items (e.g., navs or dropdowns).
$component-active-bg:       $brand-primary !default;

//** Width of the `border` for generating carets that indicator dropdowns.
$caret-width-base:          4px !default;
//** Carets increase slightly in size for larger components.
$caret-width-large:         5px !default;


//== Tables
//
//## Customizes the `.table` component with basic values, each used across all table variations.

//** Padding for `<th>`s and `<td>`s.
$table-cell-padding:            8px !default;
//** Padding for cells in `.table-condensed`.
$table-condensed-cell-padding:  5px !default;

//** Default background color used for all tables.
$table-bg:                      transparent !default;
//** Background color used for `.table-striped`.
$table-bg-accent:               #f9f9f9 !default;
//** Background color used for `.table-hover`.
$table-bg-hover:                #f5f5f5 !default;
$table-bg-active:               $table-bg-hover !default;

//** Border color for table and cell borders.
$table-border-color:            #ddd !default;


//== Buttons
//
//## For each of Bootstrap\'s buttons, define text, background and border color.

$btn-font-weight:                normal !default;

$btn-default-color:              #333 !default;
$btn-default-bg:                 #fff !default;
$btn-default-border:             #ccc !default;

$btn-primary-color:              #fff !default;
$btn-primary-bg:                 $brand-primary !default;
$btn-primary-border:             darken($btn-primary-bg, 5%) !default;

$btn-success-color:              #fff !default;
$btn-success-bg:                 $brand-success !default;
$btn-success-border:             darken($btn-success-bg, 5%) !default;

$btn-info-color:                 #fff !default;
$btn-info-bg:                    $brand-info !default;
$btn-info-border:                darken($btn-info-bg, 5%) !default;

$btn-warning-color:              #fff !default;
$btn-warning-bg:                 $brand-warning !default;
$btn-warning-border:             darken($btn-warning-bg, 5%) !default;

$btn-danger-color:               #fff !default;
$btn-danger-bg:                  $brand-danger !default;
$btn-danger-border:              darken($btn-danger-bg, 5%) !default;

$btn-link-disabled-color:        $gray-light !default;


//== Forms
//
//##

//** `<input>` background color
$input-bg:                       #fff !default;
//** `<input disabled>` background color
$input-bg-disabled:              $gray-lighter !default;

//** Text color for `<input>`s
$input-color:                    $gray !default;
//** `<input>` border color
$input-border:                   #ccc !default;
//** `<input>` border radius
$input-border-radius:            $border-radius-base !default;
//** Border color for inputs on focus
$input-border-focus:             #66afe9 !default;

//** Placeholder text color
$input-color-placeholder:        $gray-light !default;

//** Default `.form-control` height
$input-height-base:              ($line-height-computed + ($padding-base-vertical * 2) + 2) !default;
//** Large `.form-control` height
$input-height-large:             (ceil($font-size-large * $line-height-large) + ($padding-large-vertical * 2) + 2) !default;
//** Small `.form-control` height
$input-height-small:             (floor($font-size-small * $line-height-small) + ($padding-small-vertical * 2) + 2) !default;

$legend-color:                   $gray-dark !default;
$legend-border-color:            #e5e5e5 !default;

//** Background color for textual input addons
$input-group-addon-bg:           $gray-lighter !default;
//** Border color for textual input addons
$input-group-addon-border-color: $input-border !default;


//== Dropdowns
//
//## Dropdown menu container and contents.

//** Background for the dropdown menu.
$dropdown-bg:                    #fff !default;
//** Dropdown menu `border-color`.
$dropdown-border:                rgba(0,0,0,.15) !default;
//** Dropdown menu `border-color` **for IE8**.
$dropdown-fallback-border:       #ccc !default;
//** Divider color for between dropdown items.
$dropdown-divider-bg:            #e5e5e5 !default;

//** Dropdown link text color.
$dropdown-link-color:            $gray-dark !default;
//** Hover color for dropdown links.
$dropdown-link-hover-color:      darken($gray-dark, 5%) !default;
//** Hover background for dropdown links.
$dropdown-link-hover-bg:         #f5f5f5 !default;

//** Active dropdown menu item text color.
$dropdown-link-active-color:     $component-active-color !default;
//** Active dropdown menu item background color.
$dropdown-link-active-bg:        $component-active-bg !default;

//** Disabled dropdown menu item background color.
$dropdown-link-disabled-color:   $gray-light !default;

//** Text color for headers within dropdown menus.
$dropdown-header-color:          $gray-light !default;

// Note: Deprecated $dropdown-caret-color as of v3.1
$dropdown-caret-color:           #000 !default;


//-- Z-index master list
//
// Warning: Avoid customizing these values. They\'re used for a bird\'s eye view
// of components dependent on the z-axis and are designed to all work together.
//
// Note: These variables are not generated into the Customizer.

$zindex-navbar:            1000 !default;
$zindex-dropdown:          1000 !default;
$zindex-popover:           1010 !default;
$zindex-tooltip:           1030 !default;
$zindex-navbar-fixed:      1030 !default;
$zindex-modal-background:  1040 !default;
$zindex-modal:             1050 !default;


//== Media queries breakpoints
//
//## Define the breakpoints at which your layout will change, adapting to different screen sizes.

// Extra small screen / phone
// Note: Deprecated $screen-xs and $screen-phone as of v3.0.1
$screen-xs:                  480px !default;
$screen-xs-min:              $screen-xs !default;
$screen-phone:               $screen-xs-min !default;

// Small screen / tablet
// Note: Deprecated $screen-sm and $screen-tablet as of v3.0.1
$screen-sm:                  768px !default;
$screen-sm-min:              $screen-sm !default;
$screen-tablet:              $screen-sm-min !default;

// Medium screen / desktop
// Note: Deprecated $screen-md and $screen-desktop as of v3.0.1
$screen-md:                  992px !default;
$screen-md-min:              $screen-md !default;
$screen-desktop:             $screen-md-min !default;

// Large screen / wide desktop
// Note: Deprecated $screen-lg and $screen-lg-desktop as of v3.0.1
$screen-lg:                  1200px !default;
$screen-lg-min:              $screen-lg !default;
$screen-lg-desktop:          $screen-lg-min !default;

// So media queries don\'t overlap when required, provide a maximum
$screen-xs-max:              ($screen-sm-min - 1) !default;
$screen-sm-max:              ($screen-md-min - 1) !default;
$screen-md-max:              ($screen-lg-min - 1) !default;


//== Grid system
//
//## Define your custom responsive grid.

//** Number of columns in the grid.
$grid-columns:              12 !default;
//** Padding between columns. Gets divided in half for the left and right.
$grid-gutter-width:         30px !default;
// Navbar collapse
//** Point at which the navbar becomes uncollapsed.
$grid-float-breakpoint:     $screen-sm-min !default;
//** Point at which the navbar begins collapsing.
$grid-float-breakpoint-max: ($grid-float-breakpoint - 1) !default;


//== Navbar
//
//##

// Basics of a navbar
$navbar-height:                    50px !default;
$navbar-margin-bottom:             $line-height-computed !default;
$navbar-border-radius:             $border-radius-base !default;
$navbar-padding-horizontal:        floor(($grid-gutter-width / 2)) !default;
$navbar-padding-vertical:          (($navbar-height - $line-height-computed) / 2) !default;

$navbar-default-color:             #777 !default;
$navbar-default-bg:                #f8f8f8 !default;
$navbar-default-border:            darken($navbar-default-bg, 6.5%) !default;

// Navbar links
$navbar-default-link-color:                #777 !default;
$navbar-default-link-hover-color:          #333 !default;
$navbar-default-link-hover-bg:             transparent !default;
$navbar-default-link-active-color:         #555 !default;
$navbar-default-link-active-bg:            darken($navbar-default-bg, 6.5%) !default;
$navbar-default-link-disabled-color:       #ccc !default;
$navbar-default-link-disabled-bg:          transparent !default;

// Navbar brand label
$navbar-default-brand-color:               $navbar-default-link-color !default;
$navbar-default-brand-hover-color:         darken($navbar-default-brand-color, 10%) !default;
$navbar-default-brand-hover-bg:            transparent !default;

// Navbar toggle
$navbar-default-toggle-hover-bg:           #ddd !default;
$navbar-default-toggle-icon-bar-bg:        #888 !default;
$navbar-default-toggle-border-color:       #ddd !default;


// Inverted navbar
// Reset inverted navbar basics
$navbar-inverse-color:                      $gray-light !default;
$navbar-inverse-bg:                         #222 !default;
$navbar-inverse-border:                     darken($navbar-inverse-bg, 10%) !default;

// Inverted navbar links
$navbar-inverse-link-color:                 $gray-light !default;
$navbar-inverse-link-hover-color:           #fff !default;
$navbar-inverse-link-hover-bg:              transparent !default;
$navbar-inverse-link-active-color:          $navbar-inverse-link-hover-color !default;
$navbar-inverse-link-active-bg:             darken($navbar-inverse-bg, 10%) !default;
$navbar-inverse-link-disabled-color:        #444 !default;
$navbar-inverse-link-disabled-bg:           transparent !default;

// Inverted navbar brand label
$navbar-inverse-brand-color:                $navbar-inverse-link-color !default;
$navbar-inverse-brand-hover-color:          #fff !default;
$navbar-inverse-brand-hover-bg:             transparent !default;

// Inverted navbar toggle
$navbar-inverse-toggle-hover-bg:            #333 !default;
$navbar-inverse-toggle-icon-bar-bg:         #fff !default;
$navbar-inverse-toggle-border-color:        #333 !default;


//== Navs
//
//##

//=== Shared nav styles
$nav-link-padding:                          10px 15px !default;
$nav-link-hover-bg:                         $gray-lighter !default;

$nav-disabled-link-color:                   $gray-light !default;
$nav-disabled-link-hover-color:             $gray-light !default;

$nav-open-link-hover-color:                 #fff !default;

//== Tabs
$nav-tabs-border-color:                     #ddd !default;

$nav-tabs-link-hover-border-color:          $gray-lighter !default;

$nav-tabs-active-link-hover-bg:             $body-bg !default;
$nav-tabs-active-link-hover-color:          $gray !default;
$nav-tabs-active-link-hover-border-color:   #ddd !default;

$nav-tabs-justified-link-border-color:            #ddd !default;
$nav-tabs-justified-active-link-border-color:     $body-bg !default;

//== Pills
$nav-pills-border-radius:                   $border-radius-base !default;
$nav-pills-active-link-hover-bg:            $component-active-bg !default;
$nav-pills-active-link-hover-color:         $component-active-color !default;


//== Pagination
//
//##

$pagination-color:                     $link-color !default;
$pagination-bg:                        #fff !default;
$pagination-border:                    #ddd !default;

$pagination-hover-color:               $link-hover-color !default;
$pagination-hover-bg:                  $gray-lighter !default;
$pagination-hover-border:              #ddd !default;

$pagination-active-color:              #fff !default;
$pagination-active-bg:                 $brand-primary !default;
$pagination-active-border:             $brand-primary !default;

$pagination-disabled-color:            $gray-light !default;
$pagination-disabled-bg:               #fff !default;
$pagination-disabled-border:           #ddd !default;


//== Pager
//
//##

$pager-bg:                             $pagination-bg !default;
$pager-border:                         $pagination-border !default;
$pager-border-radius:                  15px !default;

$pager-hover-bg:                       $pagination-hover-bg !default;

$pager-active-bg:                      $pagination-active-bg !default;
$pager-active-color:                   $pagination-active-color !default;

$pager-disabled-color:                 $pagination-disabled-color !default;


//== Jumbotron
//
//##

$jumbotron-padding:              30px !default;
$jumbotron-color:                inherit !default;
$jumbotron-bg:                   $gray-lighter !default;
$jumbotron-heading-color:        inherit !default;
$jumbotron-font-size:            ceil(($font-size-base * 1.5)) !default;


//== Form states and alerts
//
//## Define colors for form feedback states and, by default, alerts.

$state-success-text:             #3c763d !default;
$state-success-bg:               #dff0d8 !default;
$state-success-border:           darken(adjust-hue($state-success-bg, -10), 5%) !default;

$state-info-text:                #31708f !default;
$state-info-bg:                  #d9edf7 !default;
$state-info-border:              darken(adjust-hue($state-info-bg, -10), 7%) !default;

$state-warning-text:             #8a6d3b !default;
$state-warning-bg:               #fcf8e3 !default;
$state-warning-border:           darken(adjust-hue($state-warning-bg, -10), 5%) !default;

$state-danger-text:              #a94442 !default;
$state-danger-bg:                #f2dede !default;
$state-danger-border:            darken(adjust-hue($state-danger-bg, -10), 5%) !default;


//== Tooltips
//
//##

//** Tooltip max width
$tooltip-max-width:           200px !default;
//** Tooltip text color
$tooltip-color:               #fff !default;
//** Tooltip background color
$tooltip-bg:                  #000 !default;
$tooltip-opacity:             .9 !default;

//** Tooltip arrow width
$tooltip-arrow-width:         5px !default;
//** Tooltip arrow color
$tooltip-arrow-color:         $tooltip-bg !default;


//== Popovers
//
//##

//** Popover body background color
$popover-bg:                          #fff !default;
//** Popover maximum width
$popover-max-width:                   276px !default;
//** Popover border color
$popover-border-color:                rgba(0,0,0,.2) !default;
//** Popover fallback border color
$popover-fallback-border-color:       #ccc !default;

//** Popover title background color
$popover-title-bg:                    darken($popover-bg, 3%) !default;

//** Popover arrow width
$popover-arrow-width:                 10px !default;
//** Popover arrow color
$popover-arrow-color:                 #fff !default;

//** Popover outer arrow width
$popover-arrow-outer-width:           ($popover-arrow-width + 1) !default;
//** Popover outer arrow color
$popover-arrow-outer-color:           rgba(0,0,0,.25) !default;
//** Popover outer arrow fallback color
$popover-arrow-outer-fallback-color:  #999 !default;


//== Labels
//
//##

//** Default label background color
$label-default-bg:            $gray-light !default;
//** Primary label background color
$label-primary-bg:            $brand-primary !default;
//** Success label background color
$label-success-bg:            $brand-success !default;
//** Info label background color
$label-info-bg:               $brand-info !default;
//** Warning label background color
$label-warning-bg:            $brand-warning !default;
//** Danger label background color
$label-danger-bg:             $brand-danger !default;

//** Default label text color
$label-color:                 #fff !default;
//** Default text color of a linked label
$label-link-hover-color:      #fff !default;


//== Modals
//
//##

//** Padding applied to the modal body
$modal-inner-padding:         20px !default;

//** Padding applied to the modal title
$modal-title-padding:         15px !default;
//** Modal title line-height
$modal-title-line-height:     $line-height-base !default;

//** Background color of modal content area
$modal-content-bg:                             #fff !default;
//** Modal content border color
$modal-content-border-color:                   rgba(0,0,0,.2) !default;
//** Modal content border color **for IE8**
$modal-content-fallback-border-color:          #999 !default;

//** Modal backdrop background color
$modal-backdrop-bg:           #000 !default;
//** Modal backdrop opacity
$modal-backdrop-opacity:      .5 !default;
//** Modal header border color
$modal-header-border-color:   #e5e5e5 !default;
//** Modal footer border color
$modal-footer-border-color:   $modal-header-border-color !default;

$modal-lg:                    900px !default;
$modal-md:                    600px !default;
$modal-sm:                    300px !default;


//== Alerts
//
//## Define alert colors, border radius, and padding.

$alert-padding:               15px !default;
$alert-border-radius:         $border-radius-base !default;
$alert-link-font-weight:      bold !default;

$alert-success-bg:            $state-success-bg !default;
$alert-success-text:          $state-success-text !default;
$alert-success-border:        $state-success-border !default;

$alert-info-bg:               $state-info-bg !default;
$alert-info-text:             $state-info-text !default;
$alert-info-border:           $state-info-border !default;

$alert-warning-bg:            $state-warning-bg !default;
$alert-warning-text:          $state-warning-text !default;
$alert-warning-border:        $state-warning-border !default;

$alert-danger-bg:             $state-danger-bg !default;
$alert-danger-text:           $state-danger-text !default;
$alert-danger-border:         $state-danger-border !default;


//== Progress bars
//
//##

//** Background color of the whole progress component
$progress-bg:                 #f5f5f5 !default;
//** Progress bar text color
$progress-bar-color:          #fff !default;

//** Default progress bar color
$progress-bar-bg:             $brand-primary !default;
//** Success progress bar color
$progress-bar-success-bg:     $brand-success !default;
//** Warning progress bar color
$progress-bar-warning-bg:     $brand-warning !default;
//** Danger progress bar color
$progress-bar-danger-bg:      $brand-danger !default;
//** Info progress bar color
$progress-bar-info-bg:        $brand-info !default;


//== List group
//
//##

//** Background color on `.list-group-item`
$list-group-bg:                 #fff !default;
//** `.list-group-item` border color
$list-group-border:             #ddd !default;
//** List group border radius
$list-group-border-radius:      $border-radius-base !default;

//** Background color of single list elements on hover
$list-group-hover-bg:           #f5f5f5 !default;
//** Text color of active list elements
$list-group-active-color:       $component-active-color !default;
//** Background color of active list elements
$list-group-active-bg:          $component-active-bg !default;
//** Border color of active list elements
$list-group-active-border:      $list-group-active-bg !default;
$list-group-active-text-color:  lighten($list-group-active-bg, 40%) !default;

$list-group-link-color:         #555 !default;
$list-group-link-heading-color: #333 !default;


//== Panels
//
//##

$panel-bg:                    #fff !default;
$panel-body-padding:          15px !default;
$panel-border-radius:         $border-radius-base !default;

//** Border color for elements within panels
$panel-inner-border:          #ddd !default;
$panel-footer-bg:             #f5f5f5 !default;

$panel-default-text:          $gray-dark !default;
$panel-default-border:        #ddd !default;
$panel-default-heading-bg:    #f5f5f5 !default;

$panel-primary-text:          #fff !default;
$panel-primary-border:        $brand-primary !default;
$panel-primary-heading-bg:    $brand-primary !default;

$panel-success-text:          $state-success-text !default;
$panel-success-border:        $state-success-border !default;
$panel-success-heading-bg:    $state-success-bg !default;

$panel-info-text:             $state-info-text !default;
$panel-info-border:           $state-info-border !default;
$panel-info-heading-bg:       $state-info-bg !default;

$panel-warning-text:          $state-warning-text !default;
$panel-warning-border:        $state-warning-border !default;
$panel-warning-heading-bg:    $state-warning-bg !default;

$panel-danger-text:           $state-danger-text !default;
$panel-danger-border:         $state-danger-border !default;
$panel-danger-heading-bg:     $state-danger-bg !default;


//== Thumbnails
//
//##

//** Padding around the thumbnail image
$thumbnail-padding:           4px !default;
//** Thumbnail background color
$thumbnail-bg:                $body-bg !default;
//** Thumbnail border color
$thumbnail-border:            #ddd !default;
//** Thumbnail border radius
$thumbnail-border-radius:     $border-radius-base !default;

//** Custom text color for thumbnail captions
$thumbnail-caption-color:     $text-color !default;
//** Padding around the thumbnail caption
$thumbnail-caption-padding:   9px !default;


//== Wells
//
//##

$well-bg:                     #f5f5f5 !default;
$well-border:                 darken($well-bg, 7%) !default;


//== Badges
//
//##

$badge-color:                 #fff !default;
//** Linked badge text color on hover
$badge-link-hover-color:      #fff !default;
$badge-bg:                    $gray-light !default;

//** Badge text color in active nav link
$badge-active-color:          $link-color !default;
//** Badge background color in active nav link
$badge-active-bg:             #fff !default;

$badge-font-weight:           bold !default;
$badge-line-height:           1 !default;
$badge-border-radius:         10px !default;


//== Breadcrumbs
//
//##

$breadcrumb-padding-vertical:   8px !default;
$breadcrumb-padding-horizontal: 15px !default;
//** Breadcrumb background color
$breadcrumb-bg:                 #f5f5f5 !default;
//** Breadcrumb text color
$breadcrumb-color:              #ccc !default;
//** Text color of current page in the breadcrumb
$breadcrumb-active-color:       $gray-light !default;
//** Textual separator for between breadcrumb elements
$breadcrumb-separator:          "/" !default;


//== Carousel
//
//##

$carousel-text-shadow:                        0 1px 2px rgba(0,0,0,.6) !default;

$carousel-control-color:                      #fff !default;
$carousel-control-width:                      15% !default;
$carousel-control-opacity:                    .5 !default;
$carousel-control-font-size:                  20px !default;

$carousel-indicator-active-bg:                #fff !default;
$carousel-indicator-border-color:             #fff !default;

$carousel-caption-color:                      #fff !default;


//== Close
//
//##

$close-font-weight:           bold !default;
$close-color:                 #000 !default;
$close-text-shadow:           0 1px 0 #fff !default;


//== Code
//
//##

$code-color:                  #c7254e !default;
$code-bg:                     #f9f2f4 !default;

$kbd-color:                   #fff !default;
$kbd-bg:                      #333 !default;

$pre-bg:                      #f5f5f5 !default;
$pre-color:                   $gray-dark !default;
$pre-border-color:            #ccc !default;
$pre-scrollable-max-height:   340px !default;


//== Type
//
//##

//** Text muted color
$text-muted:                  $gray-light !default;
//** Abbreviations and acronyms border color
$abbr-border-color:           $gray-light !default;
//** Headings small color
$headings-small-color:        $gray-light !default;
//** Blockquote small color
$blockquote-small-color:      $gray-light !default;
//** Blockquote border color
$blockquote-border-color:     $gray-lighter !default;
//** Page header border color
$page-header-border-color:    $gray-lighter !default;


//== Miscellaneous
//
//##

//** Horizontal line color.
$hr-border:                   $gray-lighter !default;

//** Horizontal offset for forms and lists.
$component-offset-horizontal: 180px !default;


//== Container sizes
//
//## Define the maximum width of `.container` for different screen sizes.

// Small screen / tablet
$container-tablet:             ((720px + $grid-gutter-width)) !default;
//** For `$screen-sm-min` and up.
$container-sm:                 $container-tablet !default;

// Medium screen / desktop
$container-desktop:            ((940px + $grid-gutter-width)) !default;
//** For `$screen-md-min` and up.
$container-md:                 $container-desktop !default;

// Large screen / wide desktop
$container-large-desktop:      ((1140px + $grid-gutter-width)) !default;
//** For `$screen-lg-min` and up.
$container-lg:                 $container-large-desktop !default;

// H1
$heading-h1-face:         ' . $font_h1_face . ';
$heading-h1-weight:       ' . $font_h1_weight . ';
$heading-h1-style:        ' . $font_h1_style . ';

// H2
$heading-h2-face:         ' . $font_h2_face . ';
$heading-h2-weight:       ' . $font_h2_weight . ';
$heading-h2-style:        ' . $font_h2_style . ';

// H3
$heading-h3-face:         ' . $font_h3_face . ';
$heading-h3-weight:       ' . $font_h3_weight . ';
$heading-h3-style:        ' . $font_h3_style . ';

// H4
$heading-h4-face:         ' . $font_h4_face . ';
$heading-h4-weight:       ' . $font_h4_weight . ';
$heading-h4-style:        ' . $font_h4_style . ';

// H5
$heading-h5-face:         ' . $font_h5_face . ';
$heading-h5-weight:       ' . $font_h5_weight . ';
$heading-h5-style:        ' . $font_h5_style . ';

// H6
$heading-h6-face:         ' . $font_h6_face . ';
$heading-h6-weight:       ' . $font_h6_weight . ';
$heading-h6-style:        ' . $font_h6_style . ';
';

  return $variables;
}
endif;