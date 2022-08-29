<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Empório da Praça </title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Styles -->
        <style>
            .page-preview .seamless-header-container{
                position:fixed;
                top:0;
                left:0
            }
            .seamless-header-container{
                background:#fff;
                width:100%;
                line-height:1.65;
                box-shadow:0px 8px 10px rgba(0,0,0,.08);
                position:relative;
                z-index:1000;
            }
            .seamless-header-container .seamless-header{
                display:flex;
                padding:10px 18px;
                background:#fff linear-gradient(0deg, rgba(0, 0, 0, 0.05), transparent);
                background:#fff;
                text-align: right;
                width:100%;
            }
            .seamless-header>a{
                color: blue;
            }

            .primary-tile{
                position:absolute;
                left:0;
                top:0;
                width:100%;
                height:30%;
                background:#fff radial-gradient(circle, rgba(255, 255, 255, 0.15) 20%, rgba(255, 255, 255, 0.05) 75%)
            }
            .primary-tile .svg-primary-tile{
                width:70%;
                left:50%;
                top:50%;
                transform:translate(-50%, -50%);
            }

            .second-tile{
                position:absolute;
                left:50%;
                top:0;
                width:50%;
                height:50%;
                background:radial-gradient(circle, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0.05) 75%);
                background-size:cover;
                background-position:center
            }
            .svg-second-tile{
                width:40%;
                left:50%;
                top:50%;
                transform:translate(-50%, -50%);
                height:auto;
            }
            .second-tile{
                position:absolute;
                left:0;
                top:30%;
                width:50%;
                height:40%;
            }
            .third-tile{
                position:absolute;
                left:50%;
                top:50%;
                width:50%;
                height:50%;
                background-size:cover;
                background-position:center
            }
            .third-tile{
                position:absolute;
                left:0;
                top:0;
                width:100%;
                height:100%;
                background-color:rgba(0,0,0,.2)
            }
            .image-clone{
                position:absolute;
                left:0;
                top:0;
                width:100%;
                height:100%;
                background-size:cover;
                background-position:center
            }
            .third-tile{
                position:absolute;
                left:50%;
                top:30%;
                width:50%;
                height:40%
            }
            .envision-section.preview svg{
                position:absolute;
                z-index:2;
                top:46%;
                left:50%;
                width:50%;
                height:auto;
                max-height:100%
            }

            /*==*/
            button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}
            button{overflow:visible}
            button,select{text-transform:none}
            button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}
            input{line-height:normal}
            input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}
            input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}
            input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}
            input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}
            fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}
            legend{padding:0;border:0}
            textarea{overflow:auto}
            optgroup{font-weight:bold}
            table{border-spacing:0;border-collapse:collapse}
            td,th{padding:0}
            .glyphicon{position:relative;top:1px;display:inline-block;font-family:"Glyphicons Halflings";font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
            .glyphicon-ok:before{content:"✏ ✉"}
            .glyphicon-menu-down:before{content:"+"}
            .glyphicon-minus:before{content:"−"}
            .glyphicon-cloud:before{content:"☁"}
            .glyphicon-envelope:before{content:"✉"}
            *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
            *:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
            input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}
            a{color:#7165ff;text-decoration:none}
            a:hover,a:focus{color:#7165ff;text-decoration:underline}
            a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}
            figure{margin:0}
            img{vertical-align:middle}
            .img-responsive,.thumbnail>img,.thumbnail a>img,.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;max-width:100%;height:auto}
            .img-rounded{border-radius:6px}
            .img-thumbnail{display:inline-block;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}
            .img-circle{border-radius:50%}
            hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}
            .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}
            .sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}
            h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}
            h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:normal;line-height:1;color:#777}
            h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}
            h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small{font-size:65%}
            h4,.h4,h5,.h5,h6,.h6{margin-top:10px;margin-bottom:10px}
            h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small{font-size:75%}
            h1,.h1{font-size:36px}
            h2,.h2{font-size:30px}
            h3,.h3{font-size:24px}
            h4,.h4{font-size:18px}
            h5,.h5{font-size:14px}
            h6,.h6{font-size:12px}
            p{margin:0 0 10px}
            .lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}
            small,.small{font-size:85%}
            mark,.mark{padding:.2em;background-color:#fcf8e3}
            .text-left{text-align:left}
            .text-right{text-align:right}
            .text-center{text-align:center}
            .text-justify{text-align:justify}
            .text-nowrap{white-space:nowrap}
            .text-lowercase{text-transform:lowercase}
            .text-uppercase{text-transform:uppercase}
            .text-capitalize{text-transform:capitalize}
            .text-muted{color:#777}
            .text-primary{color:#7165ff}
            a.text-primary:hover{color:#286090}
            .text-success{color:#3c763d}
            a.text-success:hover{color:#2b542c}
            .text-info{color:#31708f}
            a.text-info:hover{color:#245269}
            .text-warning{color:#8a6d3b}
            a.text-warning:hover{color:#66512c}
            .text-danger{color:#a94442}
            a.text-danger:hover{color:#843534}
            .bg-primary{color:#fff;background-color:#7165ff}
            a.bg-primary:hover{background-color:#286090}
            .bg-success{background-color:#dff0d8}
            a.bg-success:hover{background-color:#c1e2b3}
            .bg-info{background-color:#d9edf7}
            a.bg-info:hover{background-color:#afd9ee}
            .bg-warning{background-color:#fcf8e3}
            a.bg-warning:hover{background-color:#f7ecb5}
            .bg-danger{background-color:#f2dede}
            a.bg-danger:hover{background-color:#e4b9b9}
            .page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}
            ul,ol{margin-top:0;margin-bottom:10px}
            ul ul,ol ul,ul ol,ol ol{margin-bottom:0}
            .list-unstyled{padding-left:0;list-style:none}
            .list-inline{padding-left:0;margin-left:-5px;list-style:none}
            .list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}
            dl{margin-top:0;margin-bottom:20px}
            dt,dd{line-height:1.42857143}
            dt{font-weight:bold}
            dd{margin-left:0}
            abbr[title],abbr[data-original-title]{cursor:help;border-bottom:1px dotted #777}
            .initialism{font-size:90%;text-transform:uppercase}
            blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}
            blockquote p:last-child,blockquote ul:last-child,blockquote ol:last-child{margin-bottom:0}
            blockquote footer,blockquote small,blockquote .small{display:block;font-size:80%;line-height:1.42857143;color:#777}
            blockquote footer:before,blockquote small:before,blockquote .small:before{content:"— "}
            .blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}
            .blockquote-reverse footer:before,blockquote.pull-right footer:before,.blockquote-reverse small:before,blockquote.pull-right small:before,.blockquote-reverse .small:before,blockquote.pull-right .small:before{content:""}
            .blockquote-reverse footer:after,blockquote.pull-right footer:after,.blockquote-reverse small:after,blockquote.pull-right small:after,.blockquote-reverse .small:after,blockquote.pull-right .small:after{content:" —"}
            address{margin-bottom:20px;font-style:normal;line-height:1.42857143}
            code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}
            code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}
            kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}
            kbd kbd{padding:0;font-size:100%;font-weight:bold;-webkit-box-shadow:none;box-shadow:none}
            pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}
            pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}
            fieldset{min-width:0;padding:0;margin:0;border:0}
            legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}
            label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:bold}
            input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
            input[type=radio],input[type=checkbox]{margin:4px 0 0;margin-top:1px \9 ;line-height:normal}
            input[type=file]{display:block}
            input[type=range]{display:block;width:100%}
            select[multiple],select[size]{height:auto}
            input[type=file]:focus,input[type=radio]:focus,input[type=checkbox]:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}
            output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}
            textarea.form-control{height:auto}
            input[type=search]{-webkit-appearance:none}
            .radio label,.checkbox label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:normal;cursor:pointer}
            .radio input[type=radio],.radio-inline input[type=radio],.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox]{position:absolute;margin-top:4px \9 ;margin-left:-20px}
            .radio+.radio,.checkbox+.checkbox{margin-top:-5px}
            .radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}
            input[type=radio][disabled],input[type=checkbox][disabled],input[type=radio].disabled,input[type=checkbox].disabled,fieldset[disabled] input[type=radio],fieldset[disabled] input[type=checkbox]{cursor:not-allowed}
            .radio.disabled label,.checkbox.disabled label,fieldset[disabled] .radio label,fieldset[disabled] .checkbox label{cursor:not-allowed}
            select.input-sm{height:30px;line-height:30px}
            textarea.input-sm,select[multiple].input-sm{height:auto}
            .form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
            select.form-group-sm .form-control{height:30px;line-height:30px}
            textarea.form-group-sm .form-control,select[multiple].form-group-sm .form-control{height:auto}
            .form-group-sm .form-control-static{height:30px;padding:5px 10px;font-size:12px;line-height:1.5}
            select.input-lg{height:46px;line-height:46px}
            textarea.input-lg,select[multiple].input-lg{height:auto}
            .form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}
            select.form-group-lg .form-control{height:46px;line-height:46px}
            textarea.form-group-lg .form-control,select[multiple].form-group-lg .form-control{height:auto}
            .form-group-lg .form-control-static{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333}
            .has-feedback .form-control{padding-right:42.5px}
            .input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}
            .input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}
            .btn-default .badge{color:#fff;background-color:#333}
            .btn-primary .badge{color:#7165ff;background-color:#fff}
            .btn-success .badge{color:#5cb85c;background-color:#fff}
            .btn-info .badge{color:#5bc0de;background-color:#fff}
            .btn-warning .badge{color:#f0ad4e;background-color:#fff}
            .btn-danger .badge{color:#d9534f;background-color:#fff}
            .btn-block+.btn-block{margin-top:5px}
            input[type=submit].btn-block,input[type=reset].btn-block,input[type=button].btn-block{width:100%}
            tr.collapse.in{display:table-row}
            tbody.collapse.in{display:table-row-group}
            .dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}
            .dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:normal;line-height:1.42857143;color:#333;white-space:nowrap}
            .dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{color:#262626;text-decoration:none;background-color:#f5f5f5}
            .dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{color:#fff;text-decoration:none;background-color:#7165ff;outline:0}
            .dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{color:#777}
            .dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false)}
            .open>.dropdown-menu{display:block}
            .open>a{outline:0}
            .pull-right>.dropdown-menu{right:0;left:auto}
            .dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px solid}
            .dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}
            .btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}
            .btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}
            .btn .caret{margin-left:0}
            .btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}
            .dropup .btn-lg .caret{border-width:0 5px 5px}
            [data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=radio],[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox]{position:absolute;clip:rect(0, 0, 0, 0);pointer-events:none}
            .nav>li{position:relative;display:block}
            .nav>li>a{position:relative;display:block;padding:10px 15px}
            .nav>li>a:hover,.nav>li>a:focus{text-decoration:none;background-color:#eee}
            .nav>li.disabled>a{color:#777}
            .nav>li.disabled>a:hover,.nav>li.disabled>a:focus{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}
            .nav .open>a,.nav .open>a:hover,.nav .open>a:focus{background-color:#eee;border-color:#7165ff}
            .nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}
            .nav>li>a>img{max-width:none}
            .nav-tabs{border-bottom:1px solid #ddd}
            .nav-tabs>li{float:left;margin-bottom:-1px}
            .nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}
            .nav-tabs>li>a:hover{border-color:#eee #eee #ddd}
            .nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}
            .nav-tabs.nav-justified>li{float:none}
            .nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}
            .nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}
            .nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}
            .nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border:1px solid #ddd}
            .nav-pills>li{float:left}
            .nav-pills>li>a{border-radius:4px}
            .nav-pills>li+li{margin-left:2px}
            .nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{color:#fff;background-color:#7165ff}
            .nav-stacked>li{float:none}
            .nav-stacked>li+li{margin-top:2px;margin-left:0}
            .nav-justified>li{float:none}
            .nav-justified>li>a{margin-bottom:5px;text-align:center}
            .nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}
            .nav-tabs-justified>li>a{margin-right:0;border-radius:4px}
            .nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border:1px solid #ddd}
            .tab-content>.tab-pane{display:none;visibility:hidden}
            .tab-content>.active{display:block;visibility:visible}
            .nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}
            .breadcrumb>li{display:inline-block}
            .breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/ "}
            .breadcrumb>.active{color:#777}
            a.label:hover,a.label:focus{color:#fff;text-decoration:none;cursor:pointer}
            .btn .label{position:relative;top:-1px}
            .btn .badge{position:relative;top:-1px}
            .btn-xs .badge{top:0;padding:1px 5px}
            a.badge:hover,a.badge:focus{color:#fff;text-decoration:none;cursor:pointer}
            .list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#7165ff;background-color:#fff}
            .list-group-item>.badge{float:right}
            .list-group-item>.badge+.badge{margin-right:5px}
            .nav-pills>li>a>.badge{margin-left:3px}
            .jumbotron h1,.jumbotron .h1{color:inherit}
            .jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}
            .jumbotron>hr{border-top-color:#d5d5d5}
            .container .jumbotron,.container-fluid .jumbotron{border-radius:6px}
            .jumbotron .container{max-width:100%}
            .thumbnail>img,.thumbnail a>img{margin-right:auto;margin-left:auto}
            a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active{border-color:#7165ff}
            .thumbnail .caption{padding:9px;color:#333}
            .alert h4{margin-top:0;color:inherit}
            .alert .alert-link{font-weight:bold}
            .alert>p,.alert>ul{margin-bottom:0}
            .alert>p+p{margin-top:5px}
            .alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}
            .alert-success hr{border-top-color:#c9e2b3}
            .alert-success .alert-link{color:#2b542c}
            .alert-info hr{border-top-color:#a6e1ec}
            .alert-info .alert-link{color:#245269}
            .alert-warning hr{border-top-color:#f7e1b5}
            .alert-warning .alert-link{color:#66512c}
            .alert-danger hr{border-top-color:#e4b9c0}
            .alert-danger .alert-link{color:#843534}
            .progress-striped .progress-bar,.progress-bar-striped{background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);-webkit-background-size:40px 40px;background-size:40px 40px}
            .progress.active .progress-bar,.progress-bar.active{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}
            .progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent)}
            .progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent)}
            .progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent)}
            .progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent)}
            a.list-group-item{color:#555}
            a.list-group-item .list-group-item-heading{color:#333}
            a.list-group-item:hover,a.list-group-item:focus{color:#555;text-decoration:none;background-color:#f5f5f5}
            .list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading{color:inherit}
            .list-group-item.disabled .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text{color:#777}
            .list-group-item.active .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>.small{color:inherit}
            .list-group-item.active .list-group-item-text,.list-group-item.active:hover .list-group-item-text,.list-group-item.active:focus .list-group-item-text{color:#c7ddef}
            a.list-group-item-success{color:#3c763d}
            a.list-group-item-success .list-group-item-heading{color:inherit}
            a.list-group-item-success:hover,a.list-group-item-success:focus{color:#3c763d;background-color:#d0e9c6}
            a.list-group-item-success.active,a.list-group-item-success.active:hover,a.list-group-item-success.active:focus{color:#fff;background-color:#3c763d;border-color:#3c763d}
            .list-group-item-info{color:#31708f;background-color:#d9edf7}
            a.list-group-item-info{color:#31708f}
            a.list-group-item-info .list-group-item-heading{color:inherit}
            a.list-group-item-info:hover,a.list-group-item-info:focus{color:#31708f;background-color:#c4e3f3}
            a.list-group-item-info.active,a.list-group-item-info.active:hover,a.list-group-item-info.active:focus{color:#fff;background-color:#31708f;border-color:#31708f}
            .list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}
            a.list-group-item-warning{color:#8a6d3b}
            a.list-group-item-warning .list-group-item-heading{color:inherit}
            a.list-group-item-warning:hover,a.list-group-item-warning:focus{color:#8a6d3b;background-color:#faf2cc}
            a.list-group-item-warning.active,a.list-group-item-warning.active:hover,a.list-group-item-warning.active:focus{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}
            .list-group-item-danger{color:#a94442;background-color:#f2dede}
            a.list-group-item-danger{color:#a94442}
            a.list-group-item-danger .list-group-item-heading{color:inherit}
            a.list-group-item-danger:hover,a.list-group-item-danger:focus{color:#a94442;background-color:#ebcccc}
            a.list-group-item-danger.active,a.list-group-item-danger.active:hover,a.list-group-item-danger.active:focus{color:#fff;background-color:#a94442;border-color:#a94442}
            .panel-heading>.dropdown .dropdown-toggle{color:inherit}
            .panel-title>a,.panel-title>small,.panel-title>.small,.panel-title>small>a,.panel-title>.small>a{color:inherit}
            .panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}
            .panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}
            .panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}
            .panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}
            .panel-heading+.list-group .list-group-item:first-child{border-top-width:0}
            .list-group+.panel-footer{border-top-width:0}
            .panel>.table,.panel>.table-responsive>.table,.panel>.panel-collapse>.table{margin-bottom:0}
            .panel>.table caption,.panel>.table-responsive>.table caption,.panel>.panel-collapse>.table caption{padding-right:15px;padding-left:15px}
            .panel>.table:first-child,.panel>.table-responsive:first-child>.table:first-child{border-top-left-radius:3px;border-top-right-radius:3px}
            .panel>.table:first-child>thead:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}
            .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child{border-top-left-radius:3px}
            .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child{border-top-right-radius:3px}
            .panel>.table:last-child,.panel>.table-responsive:last-child>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}
            .panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}
            .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}
            .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}
            .panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}
            .panel>.table>tbody:first-child>tr:first-child th,.panel>.table>tbody:first-child>tr:first-child td{border-top:0}
            .panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}
            .panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}
            .panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}
            .panel>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th{border-bottom:0}
            .panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}
            .panel>.table-responsive{margin-bottom:0;border:0}
            .panel-group .panel{margin-bottom:0;border-radius:4px}
            .panel-group .panel+.panel{margin-top:5px}
            .panel-group .panel-heading{border-bottom:0}
            .panel-group .panel-heading+.panel-collapse>.panel-body,.panel-group .panel-heading+.panel-collapse>.list-group{border-top:1px solid #ddd}
            .panel-group .panel-footer{border-top:0}
            .panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}
            .panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}
            .panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}
            .panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}
            .panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}
            .panel-primary>.panel-heading{color:#fff;background-color:#7165ff;border-color:#7165ff}
            .panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#7165ff}
            .panel-primary>.panel-heading .badge{color:#7165ff;background-color:#fff}
            .panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#7165ff}
            .panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}
            .panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}
            .panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}
            .panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}
            .panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}
            .panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}
            .panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}
            .panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}
            .panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}
            .panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}
            .panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}
            .panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}
            .panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}
            .panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}
            .panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}
            .panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}
            button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:transparent;border:0}
            .modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0, -25%);-ms-transform:translate(0, -25%);-o-transform:translate(0, -25%);transform:translate(0, -25%)}
            .modal.in .modal-dialog{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0)}
            .modal-open .modal{overflow-x:hidden;overflow-y:auto}
            .modal-header .close{margin-top:-2px}
            .modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}
            .modal-footer .btn-group .btn+.btn{margin-left:-1px}
            .modal-footer .btn-block+.btn-block{margin-left:0}
            .tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}
            .tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}
            .tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}
            .tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}
            .tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}
            .tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}
            .tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}
            .tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}
            .carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}
            .carousel-inner>.item>img,.carousel-inner>.item>a>img{line-height:1}
            .carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}
            .carousel-inner>.active{left:0}
            .carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}
            .carousel-inner>.next{left:100%}
            .carousel-inner>.prev{left:-100%}
            .carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}
            .carousel-inner>.active.left{left:-100%}
            .carousel-inner>.active.right{left:100%}
            .carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right{position:absolute;top:50%;z-index:5;display:inline-block}
            .carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left{left:50%;margin-left:-10px}
            .carousel-control .icon-next,.carousel-control .glyphicon-chevron-right{right:50%;margin-right:-10px}
            .carousel-control .icon-prev,.carousel-control .icon-next{width:20px;height:20px;margin-top:-10px;font-family:serif;line-height:1}
            .carousel-control .icon-prev:before{content:"‹"}
            .carousel-control .icon-next:before{content:"›"}
            .carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}
            .carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000 \9 ;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}
            .carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}
            .carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}
            .carousel-caption .btn{text-shadow:none}
            .clearfix:before,.clearfix:after,.dl-horizontal dd:before,.dl-horizontal dd:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after,.btn-toolbar:before,.btn-toolbar:after,.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after,.pager:before,.pager:after,.panel-body:before,.panel-body:after,.modal-footer:before,.modal-footer:after{display:table;content:" "}
            .clearfix:after,.dl-horizontal dd:after,.container:after,.container-fluid:after,.row:after,.form-horizontal .form-group:after,.btn-toolbar:after,.btn-group-vertical>.btn-group:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after,.pager:after,.panel-body:after,.modal-footer:after{clear:both}
            .center-block{display:block;margin-right:auto;margin-left:auto}
            .pull-right{float:right !important}
            .pull-left{float:left !important}
            .hide{display:none !important}
            .show{display:block !important}
            .invisible{visibility:hidden}
            .hidden{display:none !important;visibility:hidden !important}
            .affix{position:fixed}
            .noUi-target,.noUi-target *{-webkit-touch-callout:none;-webkit-user-select:none;-ms-touch-action:none;-ms-user-select:none;-moz-user-select:none;-moz-box-sizing:border-box;box-sizing:border-box}
            .noUi-target{position:relative}
            .noUi-base{width:100%;height:100%;position:relative}
            .noUi-origin{position:absolute;right:0;top:0;left:0;bottom:0}
            .noUi-handle{position:relative;z-index:1}
            .noUi-stacking .noUi-handle{z-index:10}
            .noUi-state-tap .noUi-origin{-webkit-transition:left .3s,top .3s;transition:left .3s,top .3s}
            .noUi-state-drag *{cursor:inherit !important}
            .noUi-base{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}
            .noUi-horizontal{height:18px}
            .noUi-horizontal .noUi-handle{width:34px;height:28px;left:-17px;top:-6px}
            .noUi-vertical{width:18px}
            .noUi-vertical .noUi-handle{width:28px;height:34px;left:-6px;top:-17px}
            .noUi-background{background:#fafafa;box-shadow:inset 0 1px 1px #f0f0f0}
            .noUi-connect{background:#3fb8af;box-shadow:inset 0 0 3px rgba(51,51,51,.45);-webkit-transition:background 450ms;transition:background 450ms}
            .noUi-origin{border-radius:2px}
            .noUi-target{border-radius:4px;border:1px solid #d3d3d3;box-shadow:inset 0 1px 1px #f0f0f0,0 3px 6px -5px #bbb}
            .noUi-target.noUi-connect{box-shadow:inset 0 0 3px rgba(51,51,51,.45),0 3px 6px -5px #bbb}
            .noUi-dragable{cursor:w-resize}
            .noUi-vertical .noUi-dragable{cursor:n-resize}
            .noUi-handle{border:1px solid #d9d9d9;border-radius:3px;background:#fff;cursor:default;box-shadow:inset 0 0 1px #fff,inset 0 1px 7px #ebebeb,0 3px 6px -3px #bbb}
            .noUi-active{box-shadow:inset 0 0 1px #fff,inset 0 1px 7px #ddd,0 3px 6px -3px #bbb}
            .noUi-handle:after,.noUi-handle:before{content:"";display:block;position:absolute;height:14px;width:1px;background:#e8e7e6;left:14px;top:6px}
            .noUi-handle:after{left:17px}
            .noUi-vertical .noUi-handle:after,.noUi-vertical .noUi-handle:before{width:14px;height:1px;left:6px;top:14px}
            .noUi-vertical .noUi-handle:after{top:17px}
            [disabled] .noUi-connect,[disabled].noUi-connect{background:#b8b8b8}
            [disabled] .noUi-handle{cursor:not-allowed}
            .jQWCP-wWidget{position:absolute;width:250px;height:180px;background:#eee;box-shadow:1px 1px 4px rgba(0,0,0,.5);border-radius:4px;border:solid 1px #aaa;padding:10px;z-index:1001;touch-action:none}
            .jQWCP-wWidget.jQWCP-block{position:relative;border-color:#aaa;box-shadow:inset 1px 1px 1px #ccc}
            .jQWCP-wWheel{background-repeat:no-repeat;background-position:center;background-size:contain;position:relative;float:left;width:180px;height:180px;-webkit-border-radius:90px;-moz-border-radius:50%;border-radius:50%;border:solid 1px #aaa;margin:-1px;margin-right:10px;transition:border .15s;cursor:crosshair}
            .jQWCP-wWheel:hover{border-color:#666}
            .jQWCP-wWheelOverlay{position:absolute;top:0;left:0;width:100%;height:100%;background:#000;opacity:0;-webkit-border-radius:90px;-moz-border-radius:50%;border-radius:50%}
            .jQWCP-wWheelCursor{width:8px;height:8px;position:absolute;top:50%;left:50%;margin:-6px -6px;cursor:crosshair;border:solid 2px #fff;box-shadow:1px 1px 2px #000;border-radius:50%}
            .jQWCP-slider-wrapper,.jQWCP-wPreview{position:relative;width:20px;height:180px;float:left;margin-right:10px}
            .jQWCP-wWheel:last-child,.jQWCP-slider-wrapper:last-child,.jQWCP-wPreview:last-child{margin-right:0}
            .jQWCP-slider,.jQWCP-wPreviewBox{position:absolute;width:100%;height:100%;left:0;top:0;box-sizing:border-box;border:solid 1px #aaa;margin:-1px;-moz-border-radius:4px;border-radius:4px;transition:border .15s}
            .jQWCP-slider{cursor:crosshair}
            .jQWCP-slider-wrapper:hover .jQWCP-slider{border-color:#666}
            .jQWCP-scursor{position:absolute;left:0;top:0;right:0;height:6px;margin:-5px -1px -5px -3px;cursor:crosshair;border:solid 2px #fff;box-shadow:1px 1px 2px #000;border-radius:4px}
            .jQWCP-wAlphaSlider,.jQWCP-wPreviewBox{background:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAQMAAAAlPW0iAAAABlBMVEVAQEB/f39eaJUuAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QYRBDgK9dKdMgAAABl0RVh0Q29tbWVudABDcmVhdGVkIHdpdGggR0lNUFeBDhcAAAARSURBVAjXY/jPwIAVYRf9DwB+vw/x6vMT1wAAAABJRU5ErkJggg==") center center}
            .jQWCP-overlay{position:fixed;top:0;left:0;bottom:0;right:0;z-index:1000}
            .jQWCP-mobile.jQWCP-wWidget{position:fixed;bottom:0;left:0 !important;top:auto !important;width:100%;height:75%;max-height:240px;box-sizing:border-box;border-radius:0}
            h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{color:#0b1347;font-weight:600;line-height:1.4;font-family:"Poppins",sans-serif}
            h2{font-size:32px}
            h3{font-size:26px}
            h4{font-size:16px}
            .flex-row{display:flex;flex-direction:row;flex-wrap:nowrap;width:100%}
            .flex-column{display:flex;flex-direction:column;flex-basis:100%;flex:1}
            .switch-modes{list-style:none;padding-left:0;display:inline-block;margin:0;background:#f1f1f1;border-radius:8px}
            .switch-modes .mode{cursor:pointer;padding:4px 14px;font-size:14px;display:inline-block;border-radius:6px;margin:3px}
            .switch-modes .mode.active{background:#fff;box-shadow:0px 1px 1px rgba(0,0,0,.2)}
            .switch-modes.nowrap{display:flex;flex-wrap:nowrap;overflow-x:auto;-webkit-overflow-scrolling:touch}
            .switch-modes.nowrap .mode{white-space:nowrap}
            .switch-modes.tabs{border-radius:0;background:#f9f9f9;margin-bottom:12px;padding-left:20px;padding-right:20px}
            .switch-modes.tabs .mode{padding:8px 20px 10px 20px;margin-left:0;margin-right:0;margin-bottom:0;margin-top:8px;border-radius:5px 5px 0 0;box-shadow:none}
            .preview-outer-container,.horizontal-logo-outer-wrapper{position:relative;min-height:100px}
            .preview-outer-container .slider-prev,.preview-outer-container .slider-next,.horizontal-logo-outer-wrapper .slider-prev,.horizontal-logo-outer-wrapper .slider-next{position:absolute;z-index:155;top:50%;transform:translate(0, -50%);font-size:28px;background:#fff;border-radius:100%;border:0 none;padding:31px 25px;line-height:1}
            .preview-outer-container .slider-prev:hover,.preview-outer-container .slider-prev:focus,.preview-outer-container .slider-prev:active,.preview-outer-container .slider-next:hover,.preview-outer-container .slider-next:focus,.preview-outer-container .slider-next:active,.horizontal-logo-outer-wrapper .slider-prev:hover,.horizontal-logo-outer-wrapper .slider-prev:focus,.horizontal-logo-outer-wrapper .slider-prev:active,.horizontal-logo-outer-wrapper .slider-next:hover,.horizontal-logo-outer-wrapper .slider-next:focus,.horizontal-logo-outer-wrapper .slider-next:active{border:0 none;outline:0 none}
            .preview-outer-container .slider-prev:hover,.preview-outer-container .slider-next:hover,.horizontal-logo-outer-wrapper .slider-prev:hover,.horizontal-logo-outer-wrapper .slider-next:hover{background:#fff}
            .preview-outer-container .slider-prev .glyphicon,.preview-outer-container .slider-next .glyphicon,.horizontal-logo-outer-wrapper .slider-prev .glyphicon,.horizontal-logo-outer-wrapper .slider-next .glyphicon{font-size:24px}
            .preview-outer-container .slider-prev.loading-in-progress,.preview-outer-container .slider-next.loading-in-progress,.horizontal-logo-outer-wrapper .slider-prev.loading-in-progress,.horizontal-logo-outer-wrapper .slider-next.loading-in-progress{cursor:default}
            .preview-outer-container .slider-prev.loading-in-progress .glyphicon,.preview-outer-container .slider-next.loading-in-progress .glyphicon,.horizontal-logo-outer-wrapper .slider-prev.loading-in-progress .glyphicon,.horizontal-logo-outer-wrapper .slider-next.loading-in-progress .glyphicon{visibility:hidden}
            .preview-outer-container .slider-prev.loading-in-progress .loading-circle,.preview-outer-container .slider-next.loading-in-progress .loading-circle,.horizontal-logo-outer-wrapper .slider-prev.loading-in-progress .loading-circle,.horizontal-logo-outer-wrapper .slider-next.loading-in-progress .loading-circle{position:absolute;left:-2px;top:18px;width:55px;height:55px}
            .preview-outer-container .slider-prev.loading-in-progress .loading-circle:after,.preview-outer-container .slider-next.loading-in-progress .loading-circle:after,.horizontal-logo-outer-wrapper .slider-prev.loading-in-progress .loading-circle:after,.horizontal-logo-outer-wrapper .slider-next.loading-in-progress .loading-circle:after{content:" ";display:block;width:24px;height:24px;margin:14px;border-radius:50%;border:4px solid #ccc;border-color:#ccc transparent #ccc transparent;animation:loading-circle 1.2s linear infinite}
            .preview-outer-container .slider-prev,.horizontal-logo-outer-wrapper .slider-prev{left:-33px;box-shadow:2px 2px 3px rgba(0,0,0,.3)}
            .preview-outer-container .slider-prev .glyphicon,.horizontal-logo-outer-wrapper .slider-prev .glyphicon{left:11px}
            .preview-outer-container .slider-prev.loading-in-progress .loading-circle,.horizontal-logo-outer-wrapper .slider-prev.loading-in-progress .loading-circle{left:auto;right:-2px}
            .preview-outer-container .slider-next,.horizontal-logo-outer-wrapper .slider-next{right:-33px;box-shadow:-2px 2px 3px rgba(0,0,0,.3)}
            .preview-outer-container .slider-next .glyphicon,.horizontal-logo-outer-wrapper .slider-next .glyphicon{left:-11px}
            .page-generate .preview-outer-container .slider-prev,.page-generate .preview-outer-container .slider-next{margin-top:-8px}
            .horizontal-logo-outer-wrapper{position:relative;overflow:hidden}
            .variation-buttons{padding-top:10px}
            .variation-buttons .btn-generate-variations,.variation-buttons .btn-remove-variations{font-size:18px;width:calc(50% - 5px)}
            .variation-buttons .btn-generate-variations{margin-left:5px}
            .variation-buttons .btn-remove-variations{margin-right:5px}
            .universal-logos-grid{display:grid;grid-template-columns:repeat(3, 1fr);grid-gap:22px}
            .universal-logos-grid .logo{position:relative}
            .universal-logos-grid .logo .btn-edit-industry-logo{opacity:0;position:absolute;bottom:22px;left:50%;transition:opacity .5s;transform:translate(-50%, 0);padding:8px 20px 10px 18px}
            .universal-logos-grid .logo .btn-edit-industry-logo .glyphicon{top:2px;font-size:14px}
            .universal-logos-grid .logo .btn-edit-industry-logo .inner-wrap{font-size:16px;padding-left:10px}
            .universal-logos-grid .logo .btn-edit-industry-logo-alt{background:none;position:absolute;top:11px;left:15px;padding:8px 12px;border:0 none}
            .universal-logos-grid .logo:hover .items .item .svg-container{transform:scale(0.92) !important}
            .universal-logos-grid .logo:hover .btn-edit-industry-logo{opacity:1}
            .universal-logos-grid .logo .item-container{position:relative}
            .universal-logos-grid .logo .items .item{border:1px solid #efefef;border-radius:8px;padding:0 30px;background:#fff;display:none}
            .universal-logos-grid .logo .items .item[data-random-template=true]{display:block}
            .universal-logos-grid .logo .items .item .svg-container{transition:transform .3s;transform-origin:top center;transform:scale(1)}
            .universal-logos-grid .logo .items .item img.wm{display:none}
            .horizontal-logo-wrapper{min-height:200px;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;display:flex;flex-wrap:nowrap;overflow-x:scroll;width:100%;position:relative;-webkit-overflow-scrolling:touch;cursor:grab}
            .horizontal-logo-wrapper .original-version-headline{display:none}
            .horizontal-logo-wrapper .item{position:relative;padding:0;margin-bottom:20px;background:#fff;border:1px solid #eee;border-radius:5px;transition:all .3s;overflow:hidden;float:none;flex:0 0 auto;margin-bottom:0;margin-right:5px;width:340px}
            .horizontal-logo-wrapper .item .logo-preview{overflow:hidden}
            .horizontal-logo-wrapper .item .logo-preview .mutations-container .mutation{display:none}
            .horizontal-logo-wrapper .item .logo-preview .mutations-container .mutation.active{display:block}
            .horizontal-logo-wrapper .item .wm{position:absolute;top:0}
            .horizontal-logo-wrapper .item svg,.horizontal-logo-wrapper .item img{max-width:100% !important;height:auto !important;opacity:1;transform:scale(1);transition:all .3s}
            .horizontal-logo-wrapper .original-version-headline{margin-top:40px}
            .sub-section-variations .ajax-progress-bar{width:100%}
            .sub-section-variations.ajax-finished .ajax-progress-bar{display:none}
            .sub-section-variations.ajax-finished .variation-buttons{display:block}
            .sub-section-variations .variation-buttons{display:none}
            .sub-section-variations .font-categories-row{padding:8px 15px;background:#f9f9f9;margin-bottom:10px}
            .sub-section-variations .font-categories-row .box{background:none;border:1px solid transparent;padding:6px 10px !important;margin-right:12px;font-size:14px;text-transform:capitalize}
            .sub-section-variations .font-categories-row .box.selected{border:1px solid #eee;background:#fff}
            .sub-section-variations .font-categories-row .box .checkmark{display:none}
            .sub-section-variations .color-spectrum-row{padding:10px 15px;background:#f9f9f9;margin-bottom:10px}
            .sub-section-variations .color-spectrum-row .box{background:none;border:1px solid transparent}
            .sub-section-variations .color-spectrum-row .box.selected{border:1px solid #eee;background:#fff}
            .container-full-width{padding:0 100px;max-width:1650px;margin:0 auto}
            .tooltip .tooltip-inner{font-size:14px}
            #page .bootstrap-tagsinput{width:100%;margin-top:8px;margin-bottom:8px;box-shadow:none;border-color:#aaa;font-weight:bold;color:#000;padding:10px 15px;height:auto;font-size:16px;background:#fff;line-height:2;transition:all .25s;transform:scale(1);position:relative;z-index:10}
            #page .bootstrap-tagsinput.animated{transform:scale(0.9);background:#f5f5f5}
            #page .bootstrap-tagsinput input{margin-bottom:0;width:auto;min-width:180px}
            #page .bootstrap-tagsinput .tag{position:relative;top:-2px;padding:4px 3px 5px 8px}
            #page .bootstrap-tagsinput.bootstrap-tagsinput-max input{display:none}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-hint{color:#bbb}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-input{color:#000}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:180px;padding:5px 0;margin:2px 0 0;list-style:none;font-size:14px;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.18);box-shadow:0 6px 12px rgba(0,0,0,.18);background-clip:padding-box;cursor:pointer}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-menu .tt-suggestion{padding:3px 8px;white-space:nowrap}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-menu .tt-suggestion+.add-freeinput{border-top:1px solid #000;margin-top:5px}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-menu .tt-suggestion:hover,#page .bootstrap-tagsinput .twitter-typeahead .tt-menu .tt-suggestion.tt-cursor{background:#f1f1f1}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-menu .add-freeinput{padding:8px 10px;white-space:nowrap;font-weight:normal;font-style:italic;color:#aaa}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-menu .add-freeinput .glyphicon{font-size:12px;top:0}
            #page .bootstrap-tagsinput .twitter-typeahead .tt-menu .add-freeinput:hover,#page .bootstrap-tagsinput .twitter-typeahead .tt-menu .add-freeinput.tt-cursor{background:#f1f1f1}
            .header-flex-row{align-items:center;display:flex;justify-content:space-between;width:100%;position:relative}
            .header-flex-row .dropdown-toggle{display:none}
            .header-flex-row.open .parent-nav-container{display:block;position:absolute;top:100%;left:auto;right:0;z-index:1000;float:left;width:auto;min-width:160px;padding:10px 0 20px 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.18);box-shadow:0 6px 12px rgba(0,0,0,.18)}
            .header-flex-row.open .parent-nav-container li{padding:5px}
            .header-flex-row.open .parent-nav-container li.industry-link{border-right:0;margin-right:0;padding-right:0}
            .header-flex-row.open .parent-nav-container li.active>a{color:#000;font-weight:bold}
            .header-flex-row.open .parent-nav-container .main-nav{display:block;padding:5px 0 10px 0}
            .header-flex-row.open .parent-nav-container .main-nav li{width:100%}
            .header-flex-row.open .parent-nav-container .meta-nav-container{display:block}
            .header-flex-row.open .parent-nav-container .meta-nav-container li{width:100%}
            .header-flex-row.open .parent-nav-container .meta-nav-container li.set-language{border-bottom:1px solid #e1def7;border-top:1px solid #e1def7;margin-bottom:16px;padding-top:5px;padding-bottom:4px;padding-left:10px;background:#f9f9f9 linear-gradient(180deg, #F3F2F9 16.58%, rgba(243, 242, 249, 0.2) 50.07%)}
            .header-flex-row.open .parent-nav-container .meta-nav-container li.set-language .glyphicon-globe,.header-flex-row.open .parent-nav-container .meta-nav-container li.set-language a[data-toggle=dropdown]{display:none}
            .header-flex-row.open .parent-nav-container .meta-nav-container li.set-language a{color:#7165ff}
            .header-flex-row.open .parent-nav-container .meta-nav-container li.set-language .dropdown-menu{display:block;background:none;position:relative;box-shadow:none;border:0 none;margin:0;width:100%}
            .header-flex-row.open .parent-nav-container .meta-nav-container li.set-language .dropdown-menu .item{display:inline-block}
            .header-flex-row.open .parent-nav-container .meta-nav-container li.set-language .dropdown-menu .item a{padding:2px 13px}
            .header-flex-row.open .parent-nav-container .meta-nav-container li.my-account{margin:0 10px 25px 10px;width:auto}
            .header-flex-row.open .parent-nav-container .meta-nav-container li.my-account a .inner-wrap{display:inline-block}
            .header-flex-row.open .parent-nav-container a{font-size:16px !important;padding:3px 20px}
            .header-container{padding:28px 0;background:#fff;box-shadow:0px 10px 10px rgba(180,132,88,.25);position:relative}
            .header-container .parent-nav-container{display:flex;width:100%}

            .header-container .parent-nav-container .main-nav{display:flex;margin:0 auto}
            .header-container .dropdown-toggle{background:none !important;color:#000;border:0 none !important;font-size:21px;position:relative;margin-right:-10px;z-index:10}
            .header-container .meta-nav-container{align-items:center;display:flex;margin-bottom:0}
            .header-container .nav-pills>li{margin-left:0;padding:0 12px}
            .header-container .nav-pills>li .glyphicon{color:#000}
            .header-container .nav-pills>li>a{padding:5px 12px;color:#7d7e8a;font-size:14px}
            .header-container .nav-pills>li>a:hover,.header-container .nav-pills>li>a:focus,.header-container .nav-pills>li>a:active{color:#7165ff;background:none}
            .header-container .nav-pills>li.active>a{color:#fff}
            .header-container .nav-pills>li.set-language{background:#f2f6f9;border-radius:5px}
            .header-container .nav-pills>li.set-language .glyphicon-globe{display:none}
            .header-container .nav-pills>li.set-language .glyphicon{position:relative;top:2px}
            .header-container .nav-pills>li.set-language a{display:inline-block;padding-left:8px;padding-right:8px}
            .header-container .nav-pills>li.set-language a:last-child{padding-right:4px}
            .header-container .nav-pills>li.set-language a.active{font-weight:bold}
            .header-container .nav-pills>li.set-language a .glyphicon-chevron-down{padding-left:5px}
            .header-container .nav-pills>li.set-language .dropdown-menu a{display:block;padding:3px 20px;color:#333}
            .header-container .nav-pills>li.set-language .dropdown-menu a:hover{color:#262626;text-decoration:none;background-color:#f5f5f5}
            .header-container .nav-pills>li.my-account{background:#7165ff;color:#fff;border-radius:5px;margin-right:15px;margin-left:15px;padding:0 10px 0 8px}
            .header-container .nav-pills>li.my-account a{color:#fff !important}
            .header-container .nav-pills>li.my-account a .glyphicon{color:#fff}
            .header-container .nav-pills>li.industry-link{border-right:1px solid #efefef;padding-right:10px;margin-right:10px}
            .header-container .nav li.active>a{background:none;color:#7165ff}
            .header-logo-link{display:block;position:relative;margin-right:20px;z-index:10}
            .header-logo{width:300px !important;max-width:100% !important;height:auto !important}
            .editor-config-column{width:100%;height:auto;display:none}
            .editor-config-column .input-parameters{margin-bottom:5px}
            .editor-config-column .input-parameters:after{content:"";display:table;clear:both}
            .editor-config-column .input-parameters .form-control{padding:14px 15px;font-size:16px;border-color:#ddd;box-shadow:none;margin-right:15px;display:inline-block;font-weight:bold;height:auto;margin-bottom:3px;width:100%}
            .editor-config-column .input-parameters .form-control:last-child{margin-bottom:0}
            .editor-config-column .input-parameters .btn-submit{margin-top:15px;width:100%}
            .editor-config-column .input-parameters .btn-submit .glyphicon{font-size:14px;margin-right:8px;top:2px}
            .editor-config-column .config-column{padding:0px 20px 10px 20px;position:relative}
            .editor-config-column .config-column .btn-generate-more[disabled=disabled],.editor-config-column .config-column .btn-reset-to-original[disabled=disabled]{background:#cbcbcb;border-color:#aaa}
            .editor-config-column .config-column .config-section{width:100%;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .editor-config-column .config-column .config-section:not(.active){display:none !important}
            .editor-config-column .config-column .config-section.active{display:block}
            .editor-config-column .config-column .config-section .sub-section{display:none}
            .editor-config-column .config-column .config-section .sub-section.active{display:block}
            .editor-config-column .config-column .config-section .switch-modes.tabs{margin-bottom:10px;background:#eee;margin-left:-20px;width:calc(100% + 40px)}
            .editor-config-column .config-column .config-section .switch-modes.tabs .mode{margin-top:9px;padding:6px 18px 8px 18px}
            .editor-config-column .config-column .config-section .switch-modes.tabs .mode.active{background:#f9f9f9}
            .editor-config-column .config-column .config-section .options-headline{display:none;font-size:14px;font-weight:normal;margin-top:0;padding-bottom:0;margin-bottom:8px;color:#75787b;letter-spacing:.04em}
            .editor-config-column .config-column .config-section .options-headline:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section .options-headline .text-wrap{float:left}
            .editor-config-column .config-column .config-section .options-headline .extended-settings{float:right}
            .editor-config-column .config-column .config-section .options-headline .extended-settings .glyphicon{margin-right:0;cursor:pointer;position:relative;top:0;color:#333}
            .editor-config-column .config-column .config-section .options-headline .glyphicon{margin-right:12px;font-size:17px}
            .editor-config-column .config-column .config-section .options-row{margin-bottom:12px}
            .editor-config-column .config-column .config-section .options-row:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section .options-row:last-child{border-bottom:0 none}
            .editor-config-column .config-column .config-section .options-row .option-radio{cursor:pointer;background:#fff;border-radius:50%;border:1px solid #c7c6c5;display:inline-block;float:left;height:15px;width:15px;top:1px;line-height:1;margin:1px;padding:2px;position:relative}
            .editor-config-column .config-column .config-section .options-row .option-radio.selected{box-shadow:inset 0 0 0 3px #fff;background:#7165ff;border-color:#7165ff}
            .editor-config-column .config-column .config-section .options-row .option-radio.selected+.on-off-label{font-weight:bold}
            .editor-config-column .config-column .config-section .options-row .variation-options.nested{margin-top:7px}
            .editor-config-column .config-column .config-section .options-row .variation-options:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section .options-row .variation-options .option,.editor-config-column .config-column .config-section .options-row .variation-options .preview-all,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings{line-height:1;margin-top:3px;float:left;width:46px;height:34px;padding:8px 5px;position:relative;text-align:center;border:1px solid #eee;background:#fff;margin-right:8px;margin-bottom:8px;border-radius:4px;display:inline-block}
            .editor-config-column .config-column .config-section .options-row .variation-options .option .variation-option-radio,.editor-config-column .config-column .config-section .options-row .variation-options .preview-all .variation-option-radio,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings .variation-option-radio{cursor:pointer;background:#fff;border-radius:50%;border:1px solid #c7c6c5;display:inline-block;float:left;height:14px;width:14px;line-height:1;margin:1px;padding:2px;position:relative;top:1px}
            .editor-config-column .config-column .config-section .options-row .variation-options .option .variation-option-radio.selected,.editor-config-column .config-column .config-section .options-row .variation-options .preview-all .variation-option-radio.selected,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings .variation-option-radio.selected{box-shadow:inset 0 0 0 3px #fff;background:#7165ff;border-color:#7165ff}
            .editor-config-column .config-column .config-section .options-row .variation-options .option .variation-option-label,.editor-config-column .config-column .config-section .options-row .variation-options .option .glyphicon,.editor-config-column .config-column .config-section .options-row .variation-options .preview-all .variation-option-label,.editor-config-column .config-column .config-section .options-row .variation-options .preview-all .glyphicon,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings .variation-option-label,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings .glyphicon{cursor:pointer;font-size:16px;line-height:1;display:inline-block}
            .editor-config-column .config-column .config-section .options-row .variation-options .option.selected,.editor-config-column .config-column .config-section .options-row .variation-options .preview-all.selected,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings.selected{border-color:#ccc;background-color:#f5f5f5}
            .editor-config-column .config-column .config-section .options-row .variation-options .option.selected .variation-option-label,.editor-config-column .config-column .config-section .options-row .variation-options .preview-all.selected .variation-option-label,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings.selected .variation-option-label{cursor:default}
            .editor-config-column .config-column .config-section .options-row .variation-options .option:not(.selected),.editor-config-column .config-column .config-section .options-row .variation-options .preview-all:not(.selected),.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings:not(.selected){cursor:pointer}
            .editor-config-column .config-column .config-section .options-row .variation-options .option:not(.selected):hover,.editor-config-column .config-column .config-section .options-row .variation-options .preview-all:not(.selected):hover,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings:not(.selected):hover{background-color:#fff;border-color:#ddd}
            .editor-config-column .config-column .config-section .options-row .variation-options .extended-settings .glyphicon-cog{top:0;font-size:18px}
            .editor-config-column .config-column .config-section .options-row .variation-options .preview-all,.editor-config-column .config-column .config-section .options-row .variation-options .extended-settings{border-color:#ccc}
            .editor-config-column .config-column .config-section .options-row .variation-options #icon-size-slider{clear:both;float:left;max-width:400px;margin:15px 0 12px 15px;width:calc(100% - 30px);height:16px}
            .editor-config-column .config-column .config-section .options-row .variation-options #icon-size-slider .noUi-base{background-color:#428bca}
            .editor-config-column .config-column .config-section .options-row .variation-options #icon-size-slider .noUi-origin{background:#fff}
            .editor-config-column .config-column .config-section .options-row .variation-options #icon-size-slider .noUi-handle{height:26px}
            .editor-config-column .config-column .config-section .sub-section:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section .sub-section-style .options-group{margin-top:11px}
            .editor-config-column .config-column .config-section .sub-section-style #icon-gap-section{display:flex;align-items:center;margin-top:5px;padding-top:10px;border-top:1px solid #eee}
            .editor-config-column .config-column .config-section .sub-section-style #icon-gap-section .slider-legend{font-size:25px;color:#ccc;margin-right:10px}
            .editor-config-column .config-column .config-section .sub-section-style #icon-gap-slider{clear:both;float:left;max-width:400px;margin:15px 0 12px 15px;width:calc(100% - 30px);height:16px;max-width:200px;float:none}
            .editor-config-column .config-column .config-section .sub-section-style #icon-gap-slider .noUi-base{background-color:#428bca}
            .editor-config-column .config-column .config-section .sub-section-style #icon-gap-slider .noUi-origin{background:#fff}
            .editor-config-column .config-column .config-section .sub-section-style #icon-gap-slider .noUi-handle{height:26px}
            .editor-config-column .config-column .config-section .sub-section-smart-secondary #secondary-gap-section{display:flex;align-items:center;margin-top:5px;padding-top:10px;border-top:1px solid #eee}
            .editor-config-column .config-column .config-section .sub-section-smart-secondary #secondary-gap-section .slider-legend{font-size:25px;color:#ccc;margin-right:10px}
            .editor-config-column .config-column .config-section .sub-section-smart-secondary #secondary-gap-slider{clear:both;float:left;max-width:400px;margin:15px 0 12px 15px;width:calc(100% - 30px);height:16px;max-width:200px;float:none}
            .editor-config-column .config-column .config-section .sub-section-smart-secondary #secondary-gap-slider .noUi-base{background-color:#428bca}
            .editor-config-column .config-column .config-section .sub-section-smart-secondary #secondary-gap-slider .noUi-origin{background:#fff}
            .editor-config-column .config-column .config-section .sub-section-smart-secondary #secondary-gap-slider .noUi-handle{height:26px}
            .editor-config-column .config-column .config-section .sub-category-row{float:left;width:50%}
            .editor-config-column .config-column .config-section .sub-category-row:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section .options-group:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section .sub-headline{font-size:15px;margin-bottom:10px;margin-top:0;letter-spacing:.04em}
            .editor-config-column .config-column .config-section.section-change-colors .change-buttons:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section.section-change-colors .swatches{display:flex;flex-wrap:nowrap;overflow-x:auto;padding:6px 20px 6px 0}
            .editor-config-column .config-column .config-section.section-change-colors .swatches .swatch,.editor-config-column .config-column .config-section.section-change-colors .swatches .eraser,.editor-config-column .config-column .config-section.section-change-colors .swatches .btn-pick-color{margin-bottom:0;float:none;flex:0 0 auto}
            .editor-config-column .config-column .config-section.section-change-colors .change-buttons .btn{float:left;border:0 none;width:48%;padding:6px 10px;margin-right:2%;margin-bottom:2%;background:#000}
            .editor-config-column .config-column .config-section.section-change-colors .change-buttons .btn.single-color-logo{width:100%;margin-right:0}
            .editor-config-column .config-column .config-section.section-change-colors .change-buttons .btn.gradient-color-logo{margin-right:0;text-align:center;line-height:1}
            .editor-config-column .config-column .config-section.section-change-colors .change-buttons .btn.gradient-color-logo .color{border-radius:100%;display:inline-block;width:45px;height:45px}
            .editor-config-column .config-column .config-section.section-change-colors .change-buttons .btn.gradient-color-logo .glyphicon{display:none}
            .editor-config-column .config-column .config-section.section-change-colors .change-buttons .btn .inner-wrap{display:none}
            .deprecated-custom-color-ui .editor-config-column .config-column .config-section.section-change-colors .custom-color-section{display:none}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .default-color-section{display:none}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .explanation-container{display:none}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container{display:block}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .select-color-sub-section{margin-top:12px}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .select-color-sub-section .options-container:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .options-headline{margin-top:0;margin-bottom:12px;text-transform:uppercase;font-size:14px;margin-bottom:12px;margin-top:0;color:#757575;letter-spacing:0;font-weight:bold;border-bottom:0 none}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .switch-modes{margin-bottom:6px}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .custom-color-nav-tabs{margin-bottom:8px}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .custom-color-nav-tabs li a{padding:7px 14px 8px 14px;margin-bottom:-1px !important;color:#555;font-size:14px}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .custom-color-tabs-sections{max-width:100%}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .custom-color-tabs-sections .custom-color-tab-section[data-tab-section=background-color]{display:none}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .background .btn-change-contrast-background .inner-wrap{display:none}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .background .btn-change-contrast-background.light-mode{border-color:#ccc !important}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .background .btn-change-contrast-background.light-mode .glyphicon{color:#000}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .select-color .swatches:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .select-color .swatches .swatch,.editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .select-color .eraser{float:left;display:block;width:71px;height:33px;margin-left:12px;cursor:pointer;border:3px solid #fff;background:#000;outline:1px solid #ddd}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .select-color .swatches .swatch.active,.editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .select-color .eraser.active{outline:2px solid red;cursor:default}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .select-color .eraser{background:#fff;text-align:center;outline:1px solid #ccc}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .select-color .eraser .glyphicon{display:inline-block;margin-top:4px;color:#333;font-size:18px}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .select-color .choose-other{padding:0 14px}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .btn-pick-color{float:left;margin-left:12px;padding:5px 15px 5px 15px;border:3px solid #fff;border-left:3px solid transparent;border-right:3px solid transparent;border-radius:0;box-shadow:none;background:#fff !important;outline-offset:0px !important;outline:0}
            .editor-config-column .config-column .config-section.section-change-colors.custom-color-edit-mode .custom-color-section .edit-custom-color-container .edit-ui-container .btn-pick-color .glyphicon{top:0}
            .editor-config-column .config-column .config-section.section-history .ajax-progress-bar{width:100%}
            .editor-config-column .config-column .config-section.section-history.ajax-finished .ajax-progress-bar{display:none}
            .editor-config-column .config-column .config-section.section-change-text{padding-top:8px}
            .editor-config-column .config-column .config-section.section-change-text .form-control{margin-bottom:7px}
            .editor-config-column .config-column .config-section.section-change-text .form-control[disabled=disabled]{color:#888;background:#f5f5f5}
            .editor-config-column .config-column .config-section.section-change-text .btn-change-text{margin-top:10px}
            .editor-config-column .config-column .config-section.section-font-settings{min-height:240px}
            .editor-config-column .config-column .config-section.section-font-settings .btn-submit{display:none}
            .editor-config-column .config-column .config-section.section-font-settings img:not(.wm){display:block;margin-bottom:0;max-width:230px !important;height:auto;padding-top:3px}
            .editor-config-column .config-column .config-section.section-font-settings .options-headline{display:block}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle{position:relative;cursor:pointer;padding:0 0 4px 0}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle .font-data{margin-bottom:5px;color:#bbb;display:none}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle .font-data span{font-size:11px;letter-spacing:.06em;color:#bbb}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle .font-data .tags,.editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle .font-data .separator{display:none}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle:hover img,.editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle:hover svg,.editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle:hover .glyphicon{opacity:.7}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle .glyphicon-chevron-down,.editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle .glyphicon-pencil{position:absolute;right:15px;top:30%;font-size:16px;margin-top:0;z-index:100}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-toggle .font{padding:6px 13px;border:1px solid #ccc;border-radius:4px;background:#fff;cursor:pointer}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown.open .dropdown-toggle .glyphicon-chevron-down{transform:rotate(180deg);margin-top:-3px}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-menu{width:100%;padding:0;margin-top:0}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-menu .switch-modes{border-radius:0;padding:3px 10px}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-menu .switch-modes .mode{padding:1px 12px}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-menu .sub-section{display:none;height:220px;overflow-y:scroll}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-menu .sub-section.active{display:block}
            .editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-menu .selected-font .glyphicon-chevron-down,.editor-config-column .config-column .config-section.section-font-settings .font-row .dropdown .dropdown-menu .selected-font .glyphicon-pencil{display:none}
            .editor-config-column .config-column .config-section.section-font-settings .font-row.secondary .sub-headline{font-weight:normal}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-font-style{margin-bottom:0;margin-top:5px;margin-bottom:10px;display:flex;align-items:center}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-font-style .options-headline{margin:0;padding-right:10px;position:relative;top:-3px}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-font-style .options-group .options-row{margin:0}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-font-style .options-group .options-row .variation-options .option{width:40px}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-font-style .options-group .options-row .variation-options .preview-all{width:40px}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-font-style .options-group .options-row .variation-options .extended-settings{width:40px;margin-right:0}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-primary-letter-spacing{display:none;align-items:center}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-primary-letter-spacing .options-headline{margin:0;padding-right:10px}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-primary-letter-spacing #primary-letter-spacing-slider{max-width:300px;margin:8px 0 5px 15px;width:100%;height:16px}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-primary-letter-spacing #primary-letter-spacing-slider .noUi-base{background-color:#428bca}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-primary-letter-spacing #primary-letter-spacing-slider .noUi-origin{background:#fff}
            .editor-config-column .config-column .config-section.section-font-settings .sub-section-primary-letter-spacing #primary-letter-spacing-slider .noUi-handle{height:26px}
            .editor-config-column .config-column .config-section.section-font-settings .sub-headline{display:none;text-transform:uppercase;font-size:15px;margin-bottom:12px;margin-top:0;color:#75787b;padding-left:8px}
            .editor-config-column .config-column .config-section.section-color-settings .color-row{margin-bottom:10px}
            .editor-config-column .config-column .config-section.section-color-settings .color-row:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section.section-layout-options .btn-submit{display:none}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-style .variation-options .option .variation-option-label,.editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-text-style .variation-options .option .variation-option-label{font-size:14px;padding:9px 5px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option-radio,.editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .on-off-label,.editor-config-column .config-column .config-section.section-layout-options .sub-section-smart-secondary .options-row[data-option-value=standard] .option-radio,.editor-config-column .config-column .config-section.section-layout-options .sub-section-smart-secondary .options-row[data-option-value=standard] .on-off-label,.editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-layout .options-row[data-option-value=standard] .option-radio,.editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-layout .options-row[data-option-value=standard] .on-off-label,.editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row[data-option-value=standard] .option-radio,.editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row[data-option-value=standard] .on-off-label{display:none}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .variation-options,.editor-config-column .config-column .config-section.section-layout-options .sub-section-smart-secondary .options-row[data-option-value=standard] .variation-options,.editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-layout .options-row[data-option-value=standard] .variation-options,.editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row[data-option-value=standard] .variation-options{margin-top:0}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .variation-options .preview-all:nth-child(2),.editor-config-column .config-column .config-section.section-layout-options .sub-section-smart-secondary .options-row[data-option-value=standard] .variation-options .preview-all:nth-child(2),.editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-layout .options-row[data-option-value=standard] .variation-options .preview-all:nth-child(2),.editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row[data-option-value=standard] .variation-options .preview-all:nth-child(2){display:none}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option{width:52px;height:41px;padding:15px 15px;margin-bottom:6px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .variation-option-label{width:100%;height:auto}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .variation-option-label .text{background:#333;color:#333;font-weight:bold;text-transform:uppercase;font-weight:bold;font-size:12px;font-weight:bold;display:block;width:100%;text-align:center;text-indent:-999em;height:5px;border-radius:1px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=one-line]{padding:14px 12px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=one-line] .variation-option-label{width:100%}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=one-line] .variation-option-label .text1{width:100%}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=one-line] .variation-option-label .text2{display:none}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=stacked-fakeSlogan] .variation-option-label .text1{height:5px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=stacked-fakeSlogan] .variation-option-label .text2{font-weight:normal;font-size:9px;margin-top:3px;height:3px;overflow:hidden;background:#aaa;color:#aaa}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=stacked-primaryDouble]{padding-top:13px;padding-bottom:13px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=stacked-primaryDouble] .variation-option-label .text2{margin-top:3px;width:16px;margin-left:2px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=stacked-primaryDoubleEqualWidth]{padding-top:11px;padding-bottom:11px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .option[data-variation-identifier=stacked-primaryDoubleEqualWidth] .variation-option-label .text2{height:10px;margin-top:3px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .preview-all,.editor-config-column .config-column .config-section.section-layout-options .sub-section-text-layout .options-row[data-option-value=standard] .extended-settings{width:52px;height:41px;padding:12px 15px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-layout .options-row .option{margin-bottom:5px;padding:9px 12px;width:52px;height:41px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-layout .options-row .option .variation-option-label{display:block}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-layout .options-row .variation-options .preview-all,.editor-config-column .config-column .config-section.section-layout-options .sub-section-secondary-layout .options-row .variation-options .extended-settings{padding:12px 15px;width:52px;height:41px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row .option{margin-bottom:5px;padding:10px 16px;width:51px;height:42px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row .option[data-variation-identifier=bar-badge]{padding:10px 13px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row .option .variation-option-label{display:block}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row .variation-options .preview-all,.editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row .variation-options .extended-settings{padding:12px 15px;width:51px;height:42px}
            .editor-config-column .config-column .config-section.section-layout-options .sub-section-style .options-row .variation-options .preview-all:nth-child(2){display:none}
            .editor-config-column .config-column .config-section.section-add-icon .btn-submit{display:none}
            .editor-config-column .config-column .config-section.section-add-icon .btn-submit{margin-top:5px}
            .editor-config-column .config-column .config-section.section-add-icon h3{margin-top:5px;margin-bottom:13px}
            .editor-config-column .config-column .config-section.section-add-icon.no-effects .btn-effect-modal{visibility:hidden}
            .editor-config-column .config-column .config-section.section-add-icon .selected-icon-section .current-icon-column{float:left;width:50%;max-width:220px;margin-right:10px}
            .editor-config-column .config-column .config-section.section-add-icon .selected-icon-section .browse-icons-form{float:left;padding:22px}
            .editor-config-column .config-column .config-section.section-add-icon .selected-icon-section .browse-icons-form .btn{font-size:13px}
            .editor-config-column .config-column .config-section.section-add-icon .selected-icon-section .btn{width:100%;margin-bottom:8px;padding:7px 18px 7px 14px;text-align:left;display:block}
            .editor-config-column .config-column .config-section.section-add-icon .selected-icon-section .btn .glyphicon{padding-right:7px}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot{margin-right:12px;position:relative;text-align:center;margin-bottom:20px}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot.empty{height:89px;border:1px dashed #ddd}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot.empty .btn-effect-modal{display:none}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot .icon{padding:14px 12px;background:#fff;border:1px solid #ddd;border-radius:4px}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot .btn-effect-modal{display:block;width:100%;cursor:pointer;border-radius:0 0 5px 5px;z-index:10;padding:6px 0;border-top:1px solid #333;font-size:14px;background:#333;border-color:#333;color:#fff}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot .btn-effect-modal .glyphicon{top:2px;padding-right:4px}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot .btn-effect-modal:hover{background:#eee;border-color:#ddd;color:#333}
            .editor-config-column .config-column .config-section.section-add-icon .current-icon-slot img,.editor-config-column .config-column .config-section.section-add-icon .current-icon-slot svg{max-width:55px !important;max-height:52px;margin:0 auto}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons{margin-top:0px}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot{float:left;width:59px;height:57px;position:relative;text-align:center;border:1px solid #ddd;margin-right:9px;margin-bottom:8px;border-radius:4px}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot .icon{padding:9px}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot .remove-icon{display:block;width:100%;height:12px;background:#eee;cursor:pointer;border-radius:0 0 5px 5px;z-index:10;padding:3px 0;position:absolute;bottom:0;left:0;border-top:1px solid #ddd;font-size:11px;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot .remove-icon .glyphicon{top:0;left:0}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot .remove-icon:hover{background:#333;border-color:#333;color:#fff}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot img,.editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot svg{max-width:45px !important;max-height:36px;margin:0 auto}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot:not(.empty){cursor:pointer}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot.empty{border:1px dashed #ddd;height:59px}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons .icon-slot.empty .remove-icon{display:none}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection{display:inline-block;float:left}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection:after{content:"";display:table;clear:both}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection.slots-full .icon-slot{background:#ffd8c2;border-color:#ffd8c2}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection.slots-full .icon-slot .btn-remove-icon-from-slot{background:#e8c5b1;border-color:#e8c5b1}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot{float:left;width:42px;height:42px;position:relative;text-align:center;background:#fff;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s;border:1px solid #aaa;margin-right:26px;border-radius:4px 0 0 4px}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot:last-child{margin-right:20px}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .icon{padding:8px;height:42px}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .glyphicon-search{display:none}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .btn-remove-icon-from-slot{position:absolute;z-index:10;display:inline-block;top:100%;top:-1px;left:calc(100% + 1px);background:#f9f9f9;border:1px solid #ccc;border-left:0 none;padding:15px 4px;font-size:11px;border-radius:0 4px 4px 0;cursor:pointer;height:calc(100% + 2px);background:#f1f1f1;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .btn-remove-icon-from-slot:hover{background:#222;border-color:#222;color:#fff}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .btn-remove-icon-from-slot:hover .glyphicon{color:#fff}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .checkmark{display:none}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .remove-icon{display:block;width:100%;height:12px;background:#eee;cursor:pointer;border-radius:0 0 5px 5px;z-index:10;padding:3px 0;position:absolute;bottom:0;left:0;border-top:1px solid #ddd;font-size:11px;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .remove-icon .glyphicon{top:0;left:0}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot .remove-icon:hover{background:#333;border-color:#333;color:#fff}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot img,.editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot svg{max-width:100% !important;max-height:28px;margin:0 auto}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot:not(.empty) .icon{cursor:pointer}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot.empty{border:1px dashed #aaa;margin-right:10px;border-radius:4px;cursor:pointer}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot.empty .glyphicon-search{display:inline-block;position:absolute;opacity:.15;font-size:26px;left:50%;top:50%;transform:translate(-50%, -50%)}
            .editor-config-column .config-column .config-section.section-add-icon .locked-icons.icon-selection .icon-slot.empty .remove-icon{display:none}
            .editor-config-column .config-column .config-section.section-add-icon .sub-category-row.icon-style{padding-left:15px}
            .editor-config-column .config-column .config-section .on-off-label{padding:0 0 0 6px;cursor:pointer;letter-spacing:.03em;font-size:14px}
            .editor-config-column .config-column .config-section .on-off-switch{float:left;margin-right:0;margin-left:0;width:34px;height:20px}
            .editor-config-column .config-column .config-section .on-off-switch .on-off-slider:before{height:14px;width:14px;left:5px;bottom:3px}
            .editor-config-column .config-column .config-section .on-off-switch .on-off-slider.round{border-radius:20px}
            .editor-config-column .config-column .config-section .on-off-switch .on-off-slider.on:before{left:-10px}
            .page-editor[data-active-section=preview]{background:#fff}
            .page-editor[data-active-container=jbenson] .editor-config-column .config-column .config-section .sub-section.sub-section-smart-secondary,.page-editor[data-active-container=jbenson] .editor-config-column .config-column .config-section .sub-section.sub-section-style,.page-editor[data-active-container=jbenson-portrait] .editor-config-column .config-column .config-section .sub-section.sub-section-smart-secondary,.page-editor[data-active-container=jbenson-portrait] .editor-config-column .config-column .config-section .sub-section.sub-section-style,.page-editor[data-active-container=bar-badge] .editor-config-column .config-column .config-section .sub-section.sub-section-smart-secondary,.page-editor[data-active-container=bar-badge] .editor-config-column .config-column .config-section .sub-section.sub-section-style{display:none}
            .page-editor[data-active-container=shield] .editor-config-column .config-column .config-section .sub-section.sub-section-style .options-row[data-option-value=icon-in-text]{display:none}
            .page-editor[data-active-container=shield] .editor-config-column .config-column .config-section .sub-section.sub-section-smart-secondary{display:none}
            .page-editor-post-purchase .editor-config-column .config-section.section-add-icon .selected-icon-section,.page-editor-post-purchase .editor-config-column .config-section.section-add-icon .sub-section-previous-icons{display:none}
            .page-editor-post-purchase .editor-config-column .config-section.section-font-settings .dropdown{display:none}
            .page-editor-post-purchase .editor-config-column .config-section.section-font-settings .sub-section-primary-letter-spacing{display:flex}
            .page-envision-background .envision-background,.page-envision-background .envision-background-progress{display:none}
            .page-envision-background.envision-background-mode .generate-form-container .preview-tabs .bottom-gradient{height:200px;width:100%;position:fixed;z-index:10;bottom:0;left:0;background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, black 90%);opacity:1}
            .page-envision-background.envision-background-mode .envision-background{bottom:0;height:auto;width:auto;position:fixed;right:0;left:0;top:0;display:block !important}
            .page-envision-background.envision-background-mode .envision-background .darkening-layer{position:absolute;left:0;top:0;z-index:10;width:100%;height:100%;background-color:rgba(0,0,0,.5)}
            .page-envision-background.envision-background-mode .envision-background .images{position:absolute;left:0;top:0;width:100%;height:100%}
            .page-envision-background.envision-background-mode .envision-background .images .image{position:absolute;left:0;top:0;opacity:0;transition:opacity 4s;width:100%;height:100%;background-size:cover;background-position:center;background-repeat:no-repeat;background-color:rgba(0,0,0,.2);display:flex;justify-content:center;align-items:center;width:100%;height:100vh;overflow:hidden}
            .page-envision-background.envision-background-mode .envision-background .images .image.active{opacity:1}
            .page-envision-background.envision-background-mode .envision-background .images video{position:absolute;top:0;left:0;display:block;width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
            .page-envision-background.envision-background-mode .envision-background-progress{display:block;position:fixed;z-index:100;top:72%;left:50%;transform:translate(-50%, 0);width:auto;white-space:nowrap;z-index:999}
            .page-envision-background.envision-background-mode .envision-background-progress .progress-item{background-color:rgba(255,255,255,.4);box-shadow:2px 2px 3px rgba(0,0,0,.3);font-weight:bold;margin-right:12px;margin-bottom:12px;width:22px;height:22px;border-radius:4px;text-align:center;text-decoration:none;border-radius:100%;display:inline-block;cursor:pointer}
            .page-envision-background.envision-background-mode .envision-background-progress .progress-item.active{background:#fff;cursor:auto}
            .page-envision-background.envision-background-mode .envision-background-progress .progress-item:first-child:last-child{display:none}
            .page-envision-background.envision-background-mode.grid-layout .envision-background-progress{top:50%;left:auto;right:15px;transform:translate(0, -50%);width:25px}
            .page-envision-background.envision-background-mode.grid-layout .envision-background-progress .progress-item{margin-right:0;display:block}
            .page-envision-background.envision-background-mode.show-config-column .logo-maker-nav-bar{background:rgba(0,0,0,.9)}
            .page-envision-background.envision-background-mode.show-config-column .logo-maker-nav-bar .action-buttons{background:rgba(255,255,255,.15)}
            .page-envision-background.envision-background-mode.show-config-column .logo-maker-nav-bar .action-buttons .btn{font-size:14px;background:#000;border-color:transparent;color:#fff}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar{background:none;border-top:1px solid transparent}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .fade-out-gradient{display:none}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section{color:#fff}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section .step-headline{color:#fff}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section .btn-close-config{color:#fff}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .recommended-colors .box{border-color:transparent !important;background:none !important}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .custom-colors .box{border-color:transparent !important;background:rgba(255,255,255,.08) !important}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .custom-colors .box.selected{background:rgba(255,255,255,.9) !important;color:#000}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .recommended-fonts .box{border-color:transparent !important;background:none !important}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .custom-fonts .box{border-color:transparent !important;background:rgba(255,255,255,.15) !important}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .custom-fonts .box .icon img{filter:invert(1)}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .custom-fonts .box.selected .icon img{filter:none}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .logo-type{border-color:transparent;background:rgba(255,255,255,.5)}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li.active .logo-type{background:rgba(255,255,255,.9)}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot.selected{background:#7165ff;border-color:#7165ff}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot.selected path{fill:#fff}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .btn-remove-icon-from-slot{background:#fff;color:#000}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .action-buttons{background:none;border-bottom-color:transparent}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .tour-buttons{padding:18px 20px;background:none}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .sidebar-inner .local-nav .nav-tabs li{border:0 none !important}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .sidebar-inner .local-nav .nav-tabs li a{color:#fff}
            .page-envision-background.envision-background-mode .logo-maker-nav-bar .sidebar-inner .local-nav .nav-tabs li.active{background:rgba(255,255,255,.05)}
            .page-envision-background.envision-background-mode #page .header-container{background:rgba(0,0,0,.2);margin-bottom:0}
            .page-envision-background.envision-background-mode #page .header-container .header-logo{width:220px !important}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar{border-bottom:1px solid rgba(0,0,0,.35)}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .virtual-designer .notification-link{color:#fff}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .virtual-designer .notification-link .glyphicon-comment{opacity:.7}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .virtual-designer .switch-designer-button{color:#fff}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble{background:rgba(0,0,0,.4)}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble:after{border-right-color:rgba(0,0,0,.4)}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble .collapse-designer-link{color:#fff;font-size:18px}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble .collapse-designer-link .glyphicon{text-shadow:2px 3px 3px rgba(0,0,0,.6)}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble .messages-wrapper .message{color:#fff}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble .messages-wrapper .message .skip-walkthrough{color:#fff}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble .messages-wrapper .message .follow-recommendation-link{color:#fff}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble .messages-wrapper .message-browser .message-number{border-color:#fff}
            .page-envision-background.envision-background-mode #page .header-container .virtual-designer-bar .speech-bubble .messages-wrapper .message-browser .message-number.active{background:#fff}
            .page-envision-background.envision-background-mode #page .header-container .dropdown-toggle{color:#fff}
            .page-envision-background.envision-background-mode #page .preview-container-tabs.affix{box-shadow:none;background:rgba(0,0,0,.3)}
            .page-envision-background.envision-background-mode #page .preview-container-tabs.affix .top-link{text-shadow:2px 3px 3px rgba(0,0,0,.7)}
            .page-envision-background.envision-background-mode #page .preview-container-tabs .nav-tabs li a{color:#fff;text-shadow:2px 2px 3px rgba(0,0,0,.6)}
            .page-envision-background.envision-background-mode .overall-input-score{color:#fff;text-shadow:2px 3px 3px rgba(0,0,0,.7)}
            .page-envision-background.envision-background-mode .preview-container .item{text-align:center}
            .page-envision-background.envision-background-mode .preview-container .item .logo-preview{border-color:transparent}
            .page-envision-background.envision-background-mode .preview-container .item .logo-preview .favorite-sign{display:none}
            .page-envision-background.envision-background-mode .preview-container .item .logo-preview .svg-container{background:radial-gradient(circle, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0) 75%);filter:drop-shadow(3px 2px 4px rgba(0, 0, 0, 0.6))}
            .page-envision-background.envision-background-mode .preview-container .item .logo-preview .svg-container path{fill:#fff !important}
            .page-envision-background.envision-background-mode .preview-container .item .logo-preview .mutation{background:none !important;border-color:transparent !important}
            .page-envision-background.envision-background-mode .preview-container .item .logo-options{border-radius:8px;padding:9px 0 10px 0;width:auto;background-color:rgba(0,0,0,.1);border:0 none;position:relative;top:-25px;display:inline-block}
            .page-envision-background.envision-background-mode .preview-container .item .logo-options .btn{color:#fff !important;padding:8px}
            .page-generate.page-envision-background.envision-background-mode .envision-background-progress{display:none}
            .envision-brand{overflow:hidden;width:100%;position:relative;margin-top:52px}
            .envision-brand .slider-wrapper{position:relative}
            .envision-brand .watermark-fade-nav{position:absolute;z-index:100;bottom:100px;white-space:nowrap;left:50%;transform:translate(-50%, 0)}
            .envision-brand .watermark-fade-nav a{background-color:rgba(255,255,255,.4);box-shadow:2px 2px 3px rgba(0,0,0,.3);font-weight:bold;display:inline-block;margin-right:12px;width:22px;height:22px;border-radius:4px;text-align:center;text-decoration:none;border-radius:100%}
            .envision-brand .watermark-fade-nav a:last-child{margin-right:0}
            .envision-brand .watermark-fade-nav a span.inner{display:none}
            .envision-brand .watermark-fade-nav a.active{background:#fff}
            .envision-brand .watermark-fade-nav a:first-child:last-child{display:none}
            .envision-brand .envision-brand-tabs{display:flex;padding-top:10px}
            .envision-brand .envision-brand-tabs .switch-modes{margin:0 auto}
            .envision-brand .envision-brand-header:after{content:"";display:table;clear:both}
            .envision-brand .envision-brand-header .slider-nav{text-align:center;line-height:1;display:flex}
            .envision-brand .btn-envision-close{display:none}
            .envision-brand .slider-nav{white-space:nowrap}
            .envision-brand .slider-nav a{background-color:rgba(0,0,0,.05);color:#000;font-weight:bold;margin-left:3px;margin-right:3px;height:5px;text-align:center;text-decoration:none;flex:1}
            .envision-brand .slider-nav a .inner{visibility:hidden}
            .envision-brand .slider-nav a.active{background:#7165ff}
            .envision-brand .sujet-containers .items{margin-bottom:50px}
            .envision-brand .sujet-containers .items .item-row{padding-bottom:140px !important}
            .envision-brand .sujet-containers .items .item-row.branding-mockups{padding:8px;padding-bottom:0 !important}
            .envision-brand .sujet-containers .items .item-row.branding-mockups .item{padding:8px}
            .envision-brand .sujet-containers .items .item-row.typography{margin:8px 16px;border-radius:12px;padding-bottom:130px !important;padding-top:30px !important}
            .envision-brand .sujet-containers .items .item-row.typography .item{padding:10px 80px}
            .envision-brand .sujet-containers .items .item-row.typography .font-row{max-width:1200px;margin:0 auto 40px auto;text-align:center}
            .envision-brand .sujet-containers .items .item-row.typography .font-row .font-preview{padding:110px 0 90px 0}
            .envision-brand .sujet-containers .items .item-row.typography .font-row .font-preview svg{position:static;width:100% !important;height:auto !important;max-width:900px}
            .envision-brand .sujet-containers .items .item-row.typography .font-row .font-description{max-width:750px;margin:0 auto}
            .envision-brand .sujet-containers .items .item-row.typography .font-row .font-description p{font-size:16px;line-height:1.8;color:#7d7e8a}
            .envision-brand .sujet-containers .items .item-row.typography .font-row.secondary .font-preview svg{max-width:600px}
            .envision-brand .sujet-containers .items .item-row.brand-colors{background:#000;border-radius:12px;margin:16px 16px 8px 16px;padding-top:120px;padding-bottom:120px !important;overflow:hidden}
            .envision-brand .sujet-containers .items .item-row.brand-colors .item{display:flex;justify-content:center}
            .envision-brand .sujet-containers .items .item-row.brand-colors .palette{transition:transform .75s;transform:translate(0, 150%)}
            .envision-brand .sujet-containers .items .item-row.brand-colors .palette .color{display:flex;align-items:center;gap:40px}
            .envision-brand .sujet-containers .items .item-row.brand-colors .palette .color:first-child .swatch{border-color:rgba(255,255,255,.8)}
            .envision-brand .sujet-containers .items .item-row.brand-colors .palette .swatch{width:340px;height:65px;background:#fff;border:1px solid transparent}
            .envision-brand .sujet-containers .items .item-row.brand-colors .palette .hex{color:#fff;font-size:18px;text-transform:lowercase}
            .envision-brand .sujet-containers .items .item-row.icon{padding-bottom:200px !important;padding-top:20px;border-bottom:2px dashed #ddd;border-top:2px dashed #ddd;background:linear-gradient(90deg, #f9f9f9 15px, transparent 1%) center,linear-gradient(#f9f9f9 15px, transparent 1%) center,#eee;background-size:20px 20px}
            .envision-brand .sujet-containers .items .item-row.icon .item-icon{margin-top:50px;padding-left:80px !important;padding-right:80px !important}
            .envision-brand .sujet-containers .items .item-row.icon .icon-container{max-width:600px;margin:0 auto;text-align:center}
            .envision-brand .sujet-containers .items .item-row.icon .icon-container .svg-wrapper{position:relative;z-index:10;background:#fcfcfc;padding:45px}
            .envision-brand .sujet-containers .items .item-row.icon .icon-container .svg-wrapper:before,.envision-brand .sujet-containers .items .item-row.icon .icon-container .svg-wrapper:after{position:absolute;content:"";border:dashed #ccc;z-index:-1}
            .envision-brand .sujet-containers .items .item-row.icon .icon-container .svg-wrapper:before{top:-50px;bottom:-50px;left:0;right:0;border-width:0 2px}
            .envision-brand .sujet-containers .items .item-row.icon .icon-container .svg-wrapper:after{left:-50px;right:-50px;top:0;bottom:0;border-width:2px 0}
            .envision-brand .sujet-containers .items .item-row.icon .icon-container svg{position:relative;left:0;top:0;width:auto !important;max-height:500px !important}
            .envision-brand .sujet-containers .items .item-row.icon .icon-container svg *{fill:#aaa !important;fill-opacity:1}
            .envision-brand .sujet-containers .items .item-row.dream-big{margin:16px;padding-bottom:60px !important}
            .envision-brand .sujet-containers .items .item-row.envision-images{padding-bottom:0 !important;margin:16px}
            .envision-brand .sujet-containers .items .item-row.envision-images>.section-header{padding-bottom:60px}
            .envision-brand .sujet-containers .items .item-row.envision-images.animated-slogan .item-image-fade #slide-live-your-dream{filter:grayscale(100%)}
            .envision-brand .sujet-containers .items .item-row.envision-images.animated-slogan .item-image-fade #slide-7{filter:grayscale(0%)}
            .envision-brand .sujet-containers .items .item-row.envision-images.animated-slogan .item-image-fade #slide-7 .svg-image-fade{opacity:1}
            .envision-brand .sujet-containers .items .item-row.package{background:#f3f2f9;padding-bottom:0 !important}
            .envision-brand .sujet-containers .items .item-row.package .package-list{list-style:none;padding:0 20px;margin:0 auto 50px auto;max-width:1200px;text-align:center}
            .envision-brand .sujet-containers .items .item-row.package .package-list li{display:inline-block;margin:10px 20px;max-width:1200px;color:#7d7e8a;font-size:17px}
            .envision-brand .sujet-containers .items .item-row.package .package-list li .glyphicon{margin-right:12px;color:#000;font-size:15px}
            .envision-brand .sujet-containers .items .item-row.animation{background:#f3f2f9;padding-bottom:16px !important}
            .envision-brand .sujet-containers .items .item-row.animation .item-animation{padding:8px 50px}
            .envision-brand .sujet-containers .items .item-row.animation .item-animation .sujet-container{max-width:100%}
            .envision-brand .sujet-containers .items .item-row.animation img{border-radius:12px}
            .envision-brand .sujet-containers .items .item{position:relative}
            .envision-brand .sujet-containers .items .item .sujet-container{border-radius:12px;transition:all .8s}
            .envision-brand .sujet-containers .items .item .sujet-container.observe-slide{opacity:.15;transform:scale(0.9)}
            .envision-brand .sujet-containers .items .item .sujet-container.in-view{opacity:1;transform:scale(1)}
            .envision-brand .sujet-containers .items .item.limited-width{padding:10px 50px;margin-bottom:0}
            .envision-brand .sujet-containers .items .item.limited-width .section-header{padding-left:15px;padding-right:15px}
            .envision-brand .sujet-containers .items .item.limited-width .sujet-container{max-width:1180px;margin:0 auto}
            .envision-brand .sujet-containers .items .item.item-tiles{padding:18px 16px 8px 16px}
            .envision-brand .sujet-containers .items .item.item-goodie-table{padding:8px 16px 0 16px}
            .envision-brand .sujet-containers .items .item.item-goodie-table .sujet-container{border-radius:12px}
            .envision-brand .sujet-containers .items .item.item-billboard .sujet-container{border-radius:12px}
            .envision-brand .sujet-containers .items .item.item-image-fade .sujet-container{transition:all 1s;opacity:1 !important}
            .envision-brand .sujet-containers .items .item.item-image-fade #slide-live-your-dream{filter:grayscale(0%)}
            .envision-brand .sujet-containers .items .item.item-image-fade #slide-7{filter:grayscale(100%)}
            .envision-brand .sujet-containers .items .item.item-image-fade .section-header{position:absolute;top:50%;transition:all .8s;transform:translate(-50%, -50%);opacity:1;left:50%;color:#fff;z-index:10;background:radial-gradient(rgba(0, 0, 0, 0.3) 0%, transparent 55%);padding:40px;width:100%;max-width:750px}
            .envision-brand .sujet-containers .items .item.item-image-fade .section-header .section-title{color:#fff;font-size:75px;line-height:1.2;padding:0;text-shadow:2px 2px 4px rgba(0,0,0,.4);-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .envision-brand .sujet-containers .items .item.item-image-fade.logo-fade{margin-top:16px}
            .envision-brand .sujet-containers .items .item.item-package .sujet-container{border-radius:12px}
            .envision-brand .sujet-containers .items .item.item-drawing{background:#fff;padding-bottom:70px}
            .envision-brand .sujet-containers .items .item.item-drawing .section-header{max-width:680px}
            .envision-brand .sujet-containers .items .item.item-drawing .section-footer span.title{font-weight:600;display:block;margin-bottom:15px}
            .envision-brand .sujet-containers .items .section-header,.envision-brand .sujet-containers .items .section-footer{max-width:880px;margin:0 auto;text-align:center}
            .envision-brand .sujet-containers .items .section-header{padding:40px 45px}
            .envision-brand .sujet-containers .items .section-footer{padding:60px 25px}
            .envision-brand .sujet-containers .items .section-footer p{line-height:1.8;font-size:16px;color:#7d7e8a}
            .envision-brand .sujet-containers .items .section-title{font-size:30px;margin-bottom:15px}
            .envision-brand .sujet-containers .items .section-intro{line-height:1.8;font-size:17px;color:#7d7e8a}
            .envision-brand .sujet-containers .items .color-section-container{padding-bottom:50px}
            .envision-brand .sujet-containers .items .color-section-container .section-header{margin-top:30px;margin-bottom:30px}
            .envision-brand .sujet-containers .items .color-section-container .item-rows.in-view .palette{transform:translate(0, 0)}
            .envision-brand .sujet-containers .items .color-section-container.grid-layout .item-rows{display:grid;grid-template-columns:repeat(2, 1fr);padding:0 8px}
            .envision-brand .sujet-containers .items .color-section-container.grid-layout .item-rows .item-row{margin:8px}
            .envision-brand .sujet-containers .items .color-section-container.grid-layout .item-rows .item-row.full-width{grid-column:1/-1}
            .envision-brand .sujet-containers .items .color-section-container.grid-layout.three-columns .item-rows{grid-template-columns:repeat(3, 1fr)}
            .envision-brand .sujet-containers .items .sujet-container{width:100%;height:100vh;margin-right:0;border-radius:0;background:#fff;transform-origin:center center;transform:scale(1);position:relative;overflow:hidden}
            .envision-brand .sujet-containers .items .sujet-container.compat-object-fit{background-size:cover;background-position:center center}
            .envision-brand .sujet-containers .items .sujet-container.compat-object-fit img:not(.static-image){opacity:0 !important}
            .envision-brand .sujet-containers .items .sujet-container.compat-object-fit#slide-0{background-position:42%}
            .envision-brand .sujet-containers .items .sujet-container.compat-object-fit#slide-4{background-position:42%}
            .envision-brand .sujet-containers .items .sujet-container.compat-object-fit#slide-6{background-position:60%}
            .envision-brand .sujet-containers .items .sujet-container.compat-object-fit#slide-11{background-position:60%}
            .envision-brand .sujet-containers .items .sujet-container.compat-object-fit#slide-15{background-position:90%}
            .envision-brand .sujet-containers .items .sujet-container.compat-object-fit#slide-overview{background-position:22%}
            .envision-brand .sujet-containers .items .sujet-container[data-ratio=portrait] img{object-fit:cover;height:100% !important}
            .envision-brand .sujet-containers .items .sujet-container img,.envision-brand .sujet-containers .items .sujet-container video{position:absolute;top:0;left:0;width:100%;height:auto !important}
            .envision-brand .sujet-containers .items .sujet-container img.overlay,.envision-brand .sujet-containers .items .sujet-container video.overlay{z-index:10}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview{background:#f5f5f5}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .tablet-header{position:absolute;top:16.99%;left:18.94%;width:13.88%;height:6.7%;background:#000;border-radius:8px 9px 0 0}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .tablet-avatar{position:absolute;top:21.4%;left:19.9%;width:3.3%;height:4.7%;background:#fff;border:1px solid #eee;border-radius:100%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .notepad-background{position:absolute;top:52.35%;left:15.28%;width:8.5%;height:18%;background:#000}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .pencil-background{position:absolute;top:31.32%;left:15.765%;width:.51%;height:17%;background:#000;border-radius:3px;transform:rotate(-0.5deg);opacity:.8}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-neck-overlay{position:absolute;top:30.3%;left:41.9%;width:13%;opacity:.8}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .business-card-front,.envision-brand .sujet-containers .items .sujet-container#slide-overview .business-card-back{position:absolute;width:7.65%;height:7.65%;border-radius:5px}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .business-card-front{background:#000;top:16.9%;left:37.41%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .business-card-back{background:#fff;top:17.12%;left:46.8%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .business-card-back img{border-radius:5px;padding-left:2px;width:auto !important;height:95% !important}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-bag{width:17%;left:66%;top:40%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .twitter-avatar-container{transform:translate(-50%, -53%);width:3%;height:4%;left:21.5%;top:23.8%;position:absolute}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .twitter-avatar-container.standalone{height:3.25%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .twitter-avatar-container svg{position:static;width:100% !important;height:100% !important;max-width:100% !important;max-height:100% !important}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-watermark{opacity:.65;width:auto;left:23.45%;top:38%;height:8%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-watermark *{fill:#fff}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-shirt{width:15%;left:41%;top:42.5%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-tablet-header{width:auto;left:23.55%;top:17.7%;height:6%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-notepad{width:7%;left:16.2%;top:55.8%}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-keychain{width:auto;height:5%;left:82.05%;top:20.8%;transform:rotate(90deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-keychain *{fill:#000 !important}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-smartphone{width:auto;height:10%;left:26.8%;top:56.6%;transform:rotate(-90deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-overview .svg-business-card{width:5%;left:38.7%;top:17.5%}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .color-overlay{width:100%;height:100%;position:absolute}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .bc-mockup-bg-right-bottom{position:absolute;background:#333;width:24%;height:22.7%;top:23.9%;left:48.4%;border-radius:2px;transform:perspective(1600px) rotateX(2deg) rotate3d(1.5, 0, -2.7, 43deg) rotateY(10.5deg) skew(0.5deg, 8deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .bc-mockup-bg-left-bottom{position:absolute;background:#333;width:17.8%;height:37.35%;top:37.35%;left:33.1%;border-radius:3px;transform:perspective(1600px) rotateX(4deg) rotate3d(1.6, 0, -3.85, 36deg) rotateY(8deg) skew(1.2deg, 4.5deg);-webkit-clip-path:polygon(0% 0%, 100% 0%, 100% 65%, 0% 42%);clip-path:polygon(0% 0%, 100% 0%, 100% 64%, 0% 41%)}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-right-top-wrapper{position:absolute;width:13.5%;height:30.5%;left:44.7%;top:-5%;transform:perspective(1600px) rotateX(6deg) rotate3d(1.9, 0, -2.8, 42deg) rotateY(7.5deg) skew(2.5deg, 8deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-right-top-wrapper .background-layer{position:absolute;width:100%;height:100%;opacity:.07}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-right-bottom{width:17%;left:52%;top:24%;transform:perspective(1600px) translateZ(100px) rotateX(2deg) rotate3d(1.5, 0, -2.9, 43deg) rotateY(10.5deg) skew(0.5deg, 8deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-left-top{width:17%;left:24%;top:16.2%;transform:perspective(1600px) translateZ(100px) rotateX(-10deg) rotate3d(1.8, 0, -2.7, 43deg) rotateY(10.5deg) skew(0.5deg, 10deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-left-bottom{width:13.5%;left:31.5%;top:39.6%;transform:perspective(1600px) translateZ(100px) rotateX(-10deg) rotate3d(2, 0, -3, 43deg) rotateY(10.5deg) skew(0.5deg, 9deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-left-bottom *{fill:#fff}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-right-top{width:90%;left:50%;top:50%;transform:translateZ(100px) translate(-50%, -50%) rotate(-90deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-right-top.standalone{transform:translateZ(100px) translate(-50%, -50%);width:52%}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug img{position:absolute;left:0;top:0;width:100%;height:100%}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug .mockup-background-layer{position:absolute;left:0;top:0;width:100%;height:100%;z-index:20;mix-blend-mode:multiply}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug img.layer1{z-index:10}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug img.business-card{z-index:50}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug img.card-white{z-index:50}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug img.layer2{z-index:60;mix-blend-mode:overlay;opacity:.8}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug img.layer3{z-index:70;mix-blend-mode:screen;opacity:.44}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug .svg-business-card-wrapper{position:absolute;width:23%;height:23%;left:47.2%;top:19%;transform:rotate(-30.5deg);z-index:100}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug .svg-business-card-wrapper-light{position:absolute;width:22.9%;height:22.8%;left:58.9%;top:31.7%;z-index:110;background:#ddd;transform:perspective(1600px) rotate(-43.8deg) rotateX(-6deg) rotateY(10deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug .svg-mug{z-index:100;width:18%;height:auto;left:31.7%;top:39%}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug .svg-mug-business-card{transform:translate(-50%, -50%);width:50%;left:50%;top:50%;height:auto}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug .svg-mug-business-card.standalone{width:30%}
            .envision-brand .sujet-containers .items .sujet-container#slide-coffee-mug .svg-mug-business-card-light{width:70%;left:50%;top:47%;transform:translate(-50%, -50%)}
            .envision-brand .sujet-containers .items .sujet-container#slide-tiles{transition:none}
            .envision-brand .sujet-containers .items .sujet-container#slide-tiles .primary-tile{position:absolute;left:0;top:0;width:50%;height:100%;background:#fff radial-gradient(circle, rgba(255, 255, 255, 0.15) 20%, rgba(255, 255, 255, 0.05) 75%)}
            .envision-brand .sujet-containers .items .sujet-container#slide-tiles .primary-tile .svg-primary-tile{width:70%;left:50%;top:50%;transform:translate(-50%, -50%)}
            .envision-brand .sujet-containers .items .sujet-container#slide-tiles .scroll-indicator{position:absolute;width:100%;bottom:20px;left:0;z-index:9999;text-align:center;line-height:1}
            .envision-brand .sujet-containers .items .sujet-container#slide-tiles .scroll-indicator .glyphicon{filter:drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));cursor:pointer;color:#f9f9f9;font-size:80px;-webkit-animation:PulsateScrollIndicator 2s ease-in-out infinite;animation:PulsateScrollIndicator 2s ease-in-out infinite}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .svg-image-fade{filter:drop-shadow(3px 2px 4px rgba(0, 0, 0, 0.6));background:radial-gradient(rgba(0, 0, 0, 0.15) 0%, transparent 60%);top:50%;left:50%;height:80%;width:auto;transition:all 1.2s;transition-timing-function:ease-in;opacity:0;transform:translate(-50%, -50%)}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .fade-item{opacity:0;transition:opacity 2s;margin:8px 16px;border-radius:12px}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .fade-item img{border-radius:12px}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .fade-item.active{opacity:1}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .fade-item .darkening-layer{display:none;width:100%;height:100%;position:absolute;left:0;top:0;background:rgba(0,0,0,.4);z-index:10}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .fade-item video{top:0;left:0;display:block;width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .fade-item #watermark-beach{object-position:0 60%}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .fade-item #watermark-open-road{object-position:0 85%}
            .envision-brand .sujet-containers .items .sujet-container#slide-7 .fade-item #watermark-el-capitan{object-position:0 70%}
            .envision-brand .sujet-containers .items .sujet-container#slide-4 .billboard-background-layer{position:absolute;top:0;left:0;width:100%;height:100%;background:#000;-webkit-clip-path:polygon(29.2% 31.8%, 60.5% 9.7%, 60.9% 64.4%, 29.6% 79.2%);clip-path:polygon(29.2% 31.8%, 60.5% 9.7%, 60.9% 64.4%, 29.6% 79.2%)}
            .envision-brand .sujet-containers .items .sujet-container#slide-4 .svg-billboard{transform:perspective(1400px) rotateY(-35deg) skew(0deg, -18deg) rotateX(0deg);width:42%;left:23%;top:18%}
            .envision-brand .sujet-containers .items .sujet-container#slide-signboard img{object-fit:contain}
            .envision-brand .sujet-containers .items .sujet-container#slide-signboard .svg-signboard{width:55%;left:32%;top:12%;transform:perspective(1600px) rotateY(-17deg) rotate(-5deg) rotateX(14deg)}
            .envision-brand .sujet-containers .items .sujet-container#slide-3{overflow:hidden}
            .envision-brand .sujet-containers .items .sujet-container#slide-3 img{object-position:0 65%;-webkit-animation:PulsateScale 14s linear infinite;animation:PulsateScale 14s linear infinite}
            .envision-brand .sujet-containers .items .sujet-container#slide-3 .color-div{position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.5)}
            .envision-brand .sujet-containers .items .sujet-container#slide-11 .svg-bc-photo{transform:perspective(350px) rotate3d(0.6, -0.45, 0.33, 50deg) rotateY(22deg) rotateX(5deg) skew(-15deg, -4deg) rotate(-13deg);filter:drop-shadow(black 2px 2px 2px) opacity(0.85);width:20%;left:52%;top:37%}
            .envision-brand .sujet-containers .items .sujet-container#slide-10 .svg-shirt-photo{opacity:.8;left:34%;top:19%;width:35%}
            .envision-brand .sujet-containers .items .sujet-container#slide-13 .svg-drawing{transform:perspective(700px) rotateX(15deg) rotate(-21deg) skew(0deg, 0deg);-webkit-mask-image:url("/static/img/pencil_texture.png");-webkit-mask-size:100%;top:19%;left:24%}
            .envision-brand .sujet-containers .items .sujet-container#slide-1 img.overlay{opacity:.9}
            .envision-brand .sujet-containers .items .sujet-container#slide-1 .svg-vivus{width:38%;left:31%;top:30%;transform:perspective(1100px) rotate3d(1.5, 0, -6, 55deg) rotateY(24deg) skew(0deg, 9deg);filter:drop-shadow(2px -1px 1px #aaa)}
            .envision-brand .sujet-containers .items .sujet-container#slide-1 #svg-vivus-back{opacity:.12}
            .envision-brand .sujet-containers .items .sujet-container#slide-1 #svg-vivus-back *{fill:#fff}
            .envision-brand .sujet-containers .items .sujet-container#slide-1 #svg-vivus-front{opacity:.7}
            .envision-brand .sujet-containers .items .sujet-container#slide-1 #svg-vivus-front *{stroke:currentColor;stroke-width:1.5px;fill-opacity:0;-webkit-transition:fill-opacity 2s;-moz-transition:fill-opacity 2s;transition:fill-opacity 2s}
            .envision-brand .sujet-containers .items .sujet-container#slide-1 #svg-vivus-front.finished{fill-opacity:1}
            .envision-brand .sujet-containers .items .sujet-container#slide-6 img.overlay{opacity:.5}
            .envision-brand .sujet-containers .items .sujet-container.color-mutation .radial-gradient{width:100%;height:100%;background:radial-gradient(circle, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0) 75%)}
            .envision-brand .overlay.overview-collage,.envision-brand .overlay.smartphone-collage{display:none;position:absolute;z-index:10;top:0;left:0;width:100%;height:auto !important}
            .envision-brand .overlay.overview-collage.active,.envision-brand .overlay.smartphone-collage.active{display:block}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container img,.envision-brand.portrait-mode .sujet-containers .items .sujet-container video{object-fit:cover;height:100% !important}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-0 img{object-position:42%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-4 img{object-position:42%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-4 .billboard-background-layer{-webkit-clip-path:polygon(13.1% 31.7%, 83.7% 9.7%, 85% 64.5%, 13.9% 79.2%);clip-path:polygon(13.1% 31.7%, 83.7% 9.7%, 85% 64.5%, 13.9% 79.2%)}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-4 .svg-billboard{width:90%;left:2%;top:19%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-1 .svg-vivus{width:65%;left:17%;top:30%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-6 img{object-position:60%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-11 img{object-position:60%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-15 img{object-position:90%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview img{object-position:22%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .tablet-header{left:15.1%;width:31.2%;top:16.974%;border-radius:4px 4px 0 0}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .tablet-avatar{top:20.7%;left:18%;width:6.8%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .notepad-background{left:7.5%;width:18.4%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .pencil-background{top:31.3%;left:8.03%;width:1%;height:17%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-neck-overlay{left:66.68%;width:29.5%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .business-card-front{left:56.6%;width:17.3%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .business-card-back{top:16.9%;left:78%;width:17%;height:7.2%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-bag{display:none}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .twitter-avatar-container{width:4%;left:21.4%;top:23.2%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-watermark{left:25.3%;top:38.1%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-shirt{width:36%;left:63.5%;top:42.5%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-tablet-header{width:12%;left:24.7%;top:17%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-notepad{width:16%;left:9.1%;top:56.4%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-keychain{display:none}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-smartphone{height:9%;left:34.5%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-overview .svg-business-card{width:13%;left:58.7%;top:17%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-bc-mockup .bc-mockup-bg-left-bottom{width:40.1%;height:37.35%;top:37.2%;left:12.1%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-bc-mockup .bc-mockup-bg-right-bottom{width:53%;height:21.8%;top:24.2%;left:47%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-right-top-wrapper{width:30.6%;height:29.4%;left:38%;top:-4.5%;transform:perspective(1600px) rotateX(-1deg) rotate3d(1.9, 0, -2.8, 42.8deg) rotateY(8.5deg) skew(3.5deg, 9deg)}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-right-bottom{width:33%;left:56%;top:25.2%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-left-top{width:31%;left:-2%;top:17.5%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-bc-mockup .svg-bc-left-bottom{width:23.5%;left:11.5%;top:41.6%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-coffee-mug .svg-business-card-wrapper{width:49%;height:21%;left:44.2%;top:19.5%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-coffee-mug .svg-business-card-wrapper-light{width:53.8%;height:22.9%;left:69.5%;top:31.2%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-coffee-mug .svg-mug{z-index:100;width:35%;left:11%;top:41%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-tiles .primary-tile{position:absolute;left:0;top:0;width:100%;height:30%;background:#fff radial-gradient(circle, rgba(255, 255, 255, 0.15) 20%, rgba(255, 255, 255, 0.05) 75%)}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-11 .svg-bc-photo{width:42%;left:43%;top:38.5%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-10 .svg-shirt-photo{left:5.4%;top:16%;width:90%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-13 .svg-drawing{top:25%;left:7%;width:90%}
            .envision-brand.portrait-mode .sujet-containers .items .sujet-container#slide-7 .svg-image-fade{width:90%;height:auto}
            .envision-brand.portrait-mode .overlay.overview-collage{height:100% !important;object-fit:cover;object-position:22%}
            .envision-brand.portrait-mode .overlay.smartphone-collage{height:100% !important;object-fit:cover}
            .envision-brand svg{-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s}
            .envision-brand svg *{-webkit-transition:fill .5s;-moz-transition:fill .5s;transition:fill .5s}
            .envision-brand svg .neon-helper-path{-webkit-transition:none;-moz-transition:none;transition:none}
            .envision-brand .slider-wrapper.is-animated svg .neon-helper-path{display:none}
            .checkmark-modal .modal-dialog{margin-top:100px}
            .checkmark-modal .modal-header{padding:20px 35px}
            .checkmark-modal .modal-body{padding:25px 0}
            .checkmark-modal .modal-content{background:#f5f5f5}
            .checkmark-modal .modal-footer .btn-close{width:100%;border-color:#eee}
            .checkmark-modal .modal-footer .btn-close .glyphicon{font-size:11px;margin-right:5px;top:0}
            .checkmark-modal .section:after{content:"";display:table;clear:both}
            .checkmark-modal .section .sub-section-hl{font-size:16px;margin-bottom:18px;margin-top:0}
            .checkmark-modal .section.intro-guide{padding:0 40px}
            .checkmark-modal .section.intro-guide .recommended-info{font-weight:bold;margin-right:5px;font-size:18px}
            .checkmark-modal .section.intro-guide .apply-recommendation{margin-left:5px;font-size:18px}
            .checkmark-modal .section.disclaimer{padding:0 40px}
            .checkmark-modal .section.checkmark-section{padding-left:39px}
            .checkmark-modal .section.checkmark-section .sub-section-hl{display:none}
            .box-row:after{content:"";display:table;clear:both}
            .box-row .box{float:left;width:140px;margin-right:20px;margin-bottom:18px;cursor:pointer;border-radius:10px;background:#f5f5f5;padding:10px 25px 12px 25px;position:relative}
            .box-row .box .box-preview{width:72px;height:70px;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%}
            .box-row .box .box-preview .icon{display:block;width:95px;max-width:100% !important;text-align:center;margin:0 auto;padding:19px 0}
            .box-row .box .box-preview .icon img{max-width:100% !important;max-height:35px !important;height:auto !important}
            .box-row .box .btn-toggle-color-spectrum{-webkit-border-radius:0 0 4px 4px;-moz-border-radius:0 0 4px 4px;border-radius:0 0 4px 4px;border:0 none;border-top:1px solid #efefef;width:100%;position:absolute;bottom:0;left:0}
            .box-row .box .btn-toggle-color-spectrum .glyphicon{font-size:10px;top:0}
            .box-row .box .btn-toggle-color-spectrum .glyphicon.glyphicon-remove{display:none}
            .box-row .box .btn-toggle-color-spectrum .glyphicon.glyphicon-plus{display:inline-block}
            .box-row .box .btn-toggle-color-spectrum .inner-wrap{padding-left:4px}
            .box-row .box .btn-toggle-color-spectrum .inner-wrap.enable{display:inline-block}
            .box-row .box .btn-toggle-color-spectrum .inner-wrap.disable{display:none}
            .box-row .box:not(.selected) .btn-toggle-color-spectrum{background:#aaa}
            .box-row .box.selected{background:#fff;box-shadow:3px 3px 7px rgba(0,0,0,.07),-2px -2px 5px rgba(0,0,0,.05)}
            .box-row .box.selected .box-preview{background:#f9f9f9}
            .box-row .box.selected .checkmark{display:block;cursor:pointer}
            .box-row .box[data-color-spectrum-identifier=black] .spectrum-preview{background:linear-gradient(to left, black, rgba(0, 0, 0, 0.7))}
            .box-row .box[data-color-spectrum-identifier=grey] .spectrum-preview{background:linear-gradient(to left, #5b5b5b, rgba(91, 91, 91, 0.7))}
            .box-row .box[data-color-spectrum-identifier=blue] .spectrum-preview{background:linear-gradient(to left, #2d75bc, rgba(45, 117, 188, 0.7))}
            .box-row .box[data-color-spectrum-identifier=green] .spectrum-preview{background:linear-gradient(to left, #0fa34b, rgba(15, 163, 75, 0.7))}
            .box-row .box[data-color-spectrum-identifier=red] .spectrum-preview{background:linear-gradient(to left, #ef3340, rgba(239, 51, 64, 0.7))}
            .box-row .box[data-color-spectrum-identifier=orange] .spectrum-preview{background:linear-gradient(to left, #faa01c, rgba(250, 160, 28, 0.7))}
            .box-row .box[data-color-spectrum-identifier=yellow] .spectrum-preview{background:linear-gradient(to left, #f5d506, rgba(245, 213, 6, 0.7))}
            .box-row .box[data-color-spectrum-identifier=brown] .spectrum-preview{background:linear-gradient(to left, #724b41, rgba(114, 75, 65, 0.7))}
            .box-row .box[data-color-spectrum-identifier=pink] .spectrum-preview{background:linear-gradient(to left, #c52a90, rgba(197, 42, 144, 0.7))}
            .box-row .box[data-color-spectrum-identifier=purple] .spectrum-preview{background:linear-gradient(to left, #6b419d, rgba(107, 65, 157, 0.7))}
            .box-row .box[data-color-spectrum-identifier=gold] .spectrum-preview{background:linear-gradient(to left, #ac884c, rgba(172, 136, 76, 0.7))}
            .box-row .box[data-color-spectrum-identifier=silver] .spectrum-preview{background:linear-gradient(to left, #b6b6b6, rgba(182, 182, 182, 0.7))}
            .box-row .box .box-title{width:100%;margin-top:15px;margin-bottom:0px;text-align:center;font-size:14px}
            .box-row .box .checkmark{display:none;position:absolute;top:-5px;right:-8px;border-radius:100%;background:#079307;padding:2px 6px;font-size:12px}
            .box-row .box .checkmark .glyphicon{color:#fff}
            .box-row.tiny-view .box{width:48px;margin-right:15px;margin-bottom:18px;padding:11px}
            .box-row.tiny-view .box .box-preview{width:22px;height:20px}
            .box-row.tiny-view .box .checkmark{padding:2px 5px;font-size:9px}
            .box-row.tiny-view .box .box-title{display:none}
            .box-row.flex{display:flex;flex-wrap:nowrap;overflow-x:auto;width:100%}
            .box-row.flex .box{flex:0 0 auto;margin-bottom:0}
            .box-row.elastic .box{width:auto}
            .generate-form-container{-webkit-transition:all .2s;-moz-transition:all .2s;transition:all .2s;margin-top:0}
            .generate-form-container .container,.generate-form-container .container-full-width{position:relative}
            .generate-form-container .fixed-app-header{position:relative;z-index:999}
            .generate-form-container .preview-tabs-container{max-width:100%;width:100%;padding-left:0;padding-right:0}
            .generate-form-container .preview-tabs{width:100%}
            .generate-form-container .preview-tabs:after{content:"";display:table;clear:both}
            .generate-form-container .preview-tabs .preview-tab{float:left;width:100%;margin-left:0}
            .generate-form-container .preview-tabs .preview-tab .add-more-bottom-wrap{padding:0 20px 100px 20px}
            .generate-form-container .preview-tabs .bottom-gradient{opacity:0;transition:opacity 1s}
            .generate-form-container.affix{position:fixed;top:0;z-index:150;width:100%;border-bottom:1px solid #ccc}
            .generate-form-container.affix+.content{margin-top:88px}
            .generate-form-container.affix-top{-moz-transition:none;-webkit-transition:none;transition:none}
            .generate-form-container .form-control{box-shadow:none;border-color:#aaa;font-weight:bold;color:#000;padding:14px 21px;height:auto;font-size:16px;background:#fff}
            .generate-form-container .fanciness-label{padding-top:14px;line-height:1;display:block}
            .generate-form-container #fanciness-slider{margin-top:12px;box-shadow:none;background-color:#fff}
            .generate-form-container .noUi-base{background-color:#428bca}
            .generate-form-container .noUi-origin{background-color:#fff}
            .generate-form-container .btn-to-top{position:relative;display:inline-block;padding-top:7px;float:right;margin-right:12px;-webkit-transition:-webkit-transform .3s;-moz-transition:-moz-transform .3s;transition:transform .3s}
            .generate-form-container .btn-to-top:hover{-webkit-transform:scale(1.4);-moz-transform:scale(1.4);transform:scale(1.4)}
            .generate-form-container .btn-to-top .glyphicon{font-size:20px;color:#333}
            .generate-form-container .btn-to-top .inner-wrap{width:17px;font-size:10px;text-indent:-1px;line-height:17px;height:17px;background:#aaa;color:#fff;text-align:center;position:absolute;left:15px;top:-3px;border-radius:100%;-webkit-transition:all 1s;-moz-transition:all 1s;transition:all 1s}
            .generate-form-container .btn-to-top .inner-wrap.active{background:red}
            .generate-form-container .btn-to-top .inner-wrap.animated{-webkit-transform:scale(1.8);-moz-transform:scale(1.8);transform:scale(1.8)}
            .generate-form-container #specificPatternIdHiddenField{position:absolute;top:0;width:40px;right:10px;z-index:9999}
            .virtual-designers{margin-top:20px}
            .virtual-designers:after{content:"";display:table;clear:both}
            .virtual-designers .designer{float:left;max-width:165px;margin-bottom:20px}
            .virtual-designers .designer .avatar{padding:0 20px;display:block;transition:all .3s;border-bottom:1px solid #ccc}
            .virtual-designers .designer .avatar img{max-width:100% !important;height:auto !important;transition:all .5s}
            .virtual-designers .designer .info{text-align:center;padding-top:10px}
            .virtual-designers .designer .designer-name{margin:0 0 3px 0;font-weight:bold;font-size:17px}
            .virtual-designers .designer .designer-name .glyphicon{display:none;top:3px;margin-left:8px}
            label{font-weight:normal}
            p{margin:0 0 20px}
            .logo-link{outline:0 none !important;text-decoration:none !important}
            .logo-options{text-align:center;padding:4px 5px 3px 5px;background:#fff;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;width:330px;width:100%;background:#fff;margin-top:1px;border:1px solid #eee;z-index:30}
            .logo-options .btn-editor .glyphicon.secondary{display:none}
            .logo-options .btn{outline:0 none;border-color:#eee;background:#f9f9f9;padding:8px;line-height:1;border:0 none;background:none;margin:0 15px;color:#333}
            .logo-options .btn .glyphicon{font-size:15px}
            .logo-options .btn .glyphicon.glyphicon-cloud-download{top:0}
            .logo-options .btn:hover{border-color:#aaa}
            .mutation-nav{display:none;display:inline-block;position:absolute;top:14px;left:20px;z-index:20}
            .mutation-nav:after{content:"";display:table;clear:both}
            .mutation-nav .btn-close-mutation-mode{display:none}
            .btn-generate-more[disabled=disabled],.btn-generate-variations[disabled=disabled],.btn-reset-to-original[disabled=disabled],.btn-generate-with-captcha[disabled=disabled]{padding-left:30px !important;padding-right:30px !important}
            .btn-generate-more[disabled=disabled] .spinner,.btn-generate-variations[disabled=disabled] .spinner,.btn-reset-to-original[disabled=disabled] .spinner,.btn-generate-with-captcha[disabled=disabled] .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .btn-generate-more[disabled=disabled] .spinner>div,.btn-generate-more[disabled=disabled] .spinner>span,.btn-generate-variations[disabled=disabled] .spinner>div,.btn-generate-variations[disabled=disabled] .spinner>span,.btn-reset-to-original[disabled=disabled] .spinner>div,.btn-reset-to-original[disabled=disabled] .spinner>span,.btn-generate-with-captcha[disabled=disabled] .spinner>div,.btn-generate-with-captcha[disabled=disabled] .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .btn-generate-more[disabled=disabled] .spinner .bounce1,.btn-generate-variations[disabled=disabled] .spinner .bounce1,.btn-reset-to-original[disabled=disabled] .spinner .bounce1,.btn-generate-with-captcha[disabled=disabled] .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .btn-generate-more[disabled=disabled] .spinner .bounce2,.btn-generate-variations[disabled=disabled] .spinner .bounce2,.btn-reset-to-original[disabled=disabled] .spinner .bounce2,.btn-generate-with-captcha[disabled=disabled] .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .btn-generate-more[disabled=disabled] .spinner,.btn-generate-variations[disabled=disabled] .spinner,.btn-reset-to-original[disabled=disabled] .spinner,.btn-generate-with-captcha[disabled=disabled] .spinner{position:relative;bottom:auto}
            .btn-generate-more[disabled=disabled] .spinner>div,.btn-generate-more[disabled=disabled] .spinner>span,.btn-generate-variations[disabled=disabled] .spinner>div,.btn-generate-variations[disabled=disabled] .spinner>span,.btn-reset-to-original[disabled=disabled] .spinner>div,.btn-reset-to-original[disabled=disabled] .spinner>span,.btn-generate-with-captcha[disabled=disabled] .spinner>div,.btn-generate-with-captcha[disabled=disabled] .spinner>span{width:14px;height:14px;background-color:#fff}
            .btn-generate-more[disabled=disabled] .inner-wrap,.btn-generate-more[disabled=disabled] .glyphicon,.btn-generate-variations[disabled=disabled] .inner-wrap,.btn-generate-variations[disabled=disabled] .glyphicon,.btn-reset-to-original[disabled=disabled] .inner-wrap,.btn-reset-to-original[disabled=disabled] .glyphicon,.btn-generate-with-captcha[disabled=disabled] .inner-wrap,.btn-generate-with-captcha[disabled=disabled] .glyphicon{display:none}
            .btn-load-more[disabled=disabled]{padding-left:30px !important;padding-right:30px !important}
            .btn-load-more[disabled=disabled] .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .btn-load-more[disabled=disabled] .spinner>div,.btn-load-more[disabled=disabled] .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .btn-load-more[disabled=disabled] .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .btn-load-more[disabled=disabled] .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .btn-load-more[disabled=disabled] .spinner{position:relative;bottom:auto}
            .btn-load-more[disabled=disabled] .spinner>div,.btn-load-more[disabled=disabled] .spinner>span{width:14px;height:14px;background-color:#aaa}
            .btn-load-more[disabled=disabled] .inner-wrap,.btn-load-more[disabled=disabled] .glyphicon{display:none}
            .btn-generate-more[disabled=disabled] .spinner>div,.btn-generate-more[disabled=disabled] .spinner>span{background-color:#ddd}
            .preview-container{width:100%;min-height:150px;position:relative;margin-top:0px;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;display:flex;flex-wrap:nowrap;overflow-x:scroll;-webkit-overflow-scrolling:touch;cursor:grab}
            .preview-container:after{content:"";display:table;clear:both}
            .preview-container img{pointer-events:none}
            .preview-container img.wm{display:none}
            .preview-container .logo-zoom{outline:0 none;display:block;cursor:default;position:relative;z-index:10}
            .preview-container .item{float:none;flex:0 0 auto;position:relative;z-index:1;width:378px;padding:4px 11px 14px 11px}
            .preview-container .item .logo-preview .mutation.active .bg-layer{position:absolute;left:0;top:0;width:100%;height:100%;opacity:0;background:rgba(255,255,255,.04) radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0) 75%);transition:opacity .6s}
            .preview-container .item .logo-preview .mutation.active .svg-container{transform:scale(1);transition:all .6s}
            .preview-container .item.hovered-item .logo-option-button{opacity:1 !important}
            .preview-container .item.hovered-item .logo-preview .mutation.active .bg-layer{opacity:1}
            .preview-container .item.hovered-item .logo-preview .mutation.active .svg-container{transform:scale(1.12)}
            .preview-container .item.inversed-white img.light{display:none}
            .preview-container .item.inversed-white img.dark{margin-top:-27px}
            .preview-container .item.inversed-white .bg-layer{background:#000}
            .preview-container .item.inversed-white .logo-options .btn{color:#fff !important}
            .preview-container .item.inversed-white .logo-options .btn.btn-editor .glyphicon{color:#fff !important}
            .preview-container .item.inversed-white.item.favorite .vote-count{color:#fff;border-color:#fff;opacity:.3}
            .preview-container .item.inversed-white.inversed-black-white .bg-layer.black{opacity:1;z-index:1}
            .preview-container .item.black-gold .bg-layer{background:#000}
            .preview-container .item.black-gold .bg-layer.black{opacity:1;z-index:1}
            .preview-container .item.item-more{text-align:center;background:#f7f7f7;border:1px solid #eee;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px}
            .preview-container .item.item-more .btn-generate-more{margin-top:50px;padding:32px 45px}
            .preview-container .item.item-more .btn-generate-more[disabled=disabled]{padding-left:75px !important;padding-right:75px !important}
            .preview-container .item .logo-preview{-webkit-transition:all 1.2s;-moz-transition:all 1.2s;transition:all 1.2s;opacity:1;transform-origin:bottom center}
            .preview-container .item .logo-options{display:none}
            .preview-container .item.animate{-webkit-transform:scale(1.2);-moz-transform:scale(1.2);transform:scale(1.2)}
            .preview-container .item.animate-scale-down .logo-preview{opacity:0;-webkit-transform:scale(0);-moz-transform:scale(0);transform:scale(0)}
            .preview-container .item.favorite .logo-option-button.unfavorite{cursor:default;left:0;top:0;background:#333;border-radius:12px 0 55px;opacity:1 !important;padding:14px 28px 23px 17px;transform:scale(1) !important}
            .preview-container .item.favorite .logo-option-button.unfavorite .glyphicon{color:#fff}
            .preview-container .item.favorite .btn-remove{display:none}
            .preview-container .item.favorite .logo-preview{border-color:transparent}
            .preview-container .item.favorite.inversed-white .logo-preview:before{color:#fff}
            .preview-container .item.color-change .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .preview-container .item.color-change .spinner>div,.preview-container .item.color-change .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .preview-container .item.color-change .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .preview-container .item.color-change .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .preview-container .item.color-change .logo-zoom img{opacity:.4}
            .preview-container .item .logo-preview{width:100%;overflow:hidden;position:relative}
            .preview-container .item .logo-preview:after{content:"";display:table;clear:both}
            .preview-container .item .logo-preview.hide-color-nav .mutations-container{width:100%}
            .preview-container .item .logo-preview.hide-color-nav .mutations-container .mutation{padding:12px 45px 12px 45px;border-radius:15px;transform:scale(1);transition:all .35s}
            .preview-container .item .logo-preview.hide-color-nav .mutations-nav-column{right:-43px}
            .preview-container .item .logo-preview .mutations-container{float:left;width:330px;position:relative;z-index:20;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s}
            .preview-container .item .logo-preview .mutations-container .mutation{padding:12px 21px 12px 21px;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s;background:#fff;display:none}
            .preview-container .item .logo-preview .mutations-container .mutation.template-black-and-highlight-hex1 .svg-container,.preview-container .item .logo-preview .mutations-container .mutation.template-black-and-highlight-hex2 .svg-container{background:radial-gradient(circle, rgba(255, 255, 255, 0.06) 0%, rgba(255, 255, 255, 0) 75%)}
            .preview-container .item .logo-preview .mutations-container .mutation.template-contrast .svg-container{background:radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 75%)}
            .preview-container .item .logo-preview .mutations-container .mutation .wm{position:absolute;top:-20px;left:0;padding:0 20px}
            .preview-container .item .logo-preview .mutations-container .mutation.active{display:block}
            .preview-container .item .logo-preview .mutations-container .mutation.default,.preview-container .item .logo-preview .mutations-container .mutation.template-gray{border:1px solid #eee}
            .preview-container .item img,.preview-container .item svg{max-width:100% !important;height:auto !important}
            .preview-container .item.animated svg{transition:all 1s;transform:scale(0.7);opacity:0}
            .preview-container .item.animated svg.done{opacity:1;transform:scale(1)}
            .preview-container .item.animated .logo-options .btn{transition:all 1.25s;opacity:0}
            .preview-container .item.animated .logo-options .btn.done{opacity:1}
            .preview-container .item .btn-remove{position:absolute;padding:4px 9px;z-index:20;top:0;right:0}
            .preview-container.grid-layout{display:grid;grid-gap:25px;grid-template-columns:repeat(2, 1fr);overflow-x:auto;cursor:default;padding:5px 15px 15px 15px}
            .preview-container.grid-layout .item{width:auto !important;padding:0 !important}
            .preview-container.grid-layout .item .logo-preview{height:auto !important;cursor:pointer}
            .page-generate .preview-outer-container .slider-prev,.page-generate .preview-outer-container .slider-next{display:none}
            .page-generate:not(.grid-layout) .preview-outer-container .slider-prev,.page-generate:not(.grid-layout) .preview-outer-container .slider-next{display:inline-block}
            .preview-overlay{display:none;position:relative;width:100%}
            .hero-section{padding-top:80px;padding-bottom:160px;background:#ffeeaf;background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%)}
            .page-home{background:#f9f9f9}
            .page-home .header-outer-wrapper{background:#fff}
            .page-home .header-outer-wrapper .header-inner-wrapper{background:#ffeeaf;background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%)}
            .page-home .cta-buttons{margin-top:35px;padding:10px 12px;border-radius:10px;background:#fff;box-shadow:0px 10px 10px rgba(0,0,0,.06);display:flex;align-items:center;max-width:620px}
            .page-home .cta-buttons:after{content:"";display:table;clear:both}
            .page-home .cta-buttons .form-control{float:none;display:inline-block;font-size:18px;height:62px;padding:13px 20px;border:0 none;border-radius:0;box-shadow:none}
            .page-home .cta-buttons .form-control[disabled=disabled]{background:rgba(0,0,0,.04);color:#000;font-style:italic}
            .page-home .cta-buttons .btn-primary{position:relative;float:none;margin-top:0;font-size:18px;margin-bottom:0;display:inline-block;padding:18px 40px;-webkit-border-radius:5px;border-radius:5px;top:-1px}
            .page-home .cta-buttons .btn-primary .glyphicon{display:none;font-size:22px}
            .page-home .cta-buttons .btn-primary[disabled=disabled]{padding-left:22px !important;padding-right:22px !important;min-height:65px;max-width:90px}
            .page-home .cta-buttons .btn-primary[disabled=disabled] .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .page-home .cta-buttons .btn-primary[disabled=disabled] .spinner>div,.page-home .cta-buttons .btn-primary[disabled=disabled] .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .page-home .cta-buttons .btn-primary[disabled=disabled] .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .page-home .cta-buttons .btn-primary[disabled=disabled] .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .page-home .cta-buttons .btn-primary[disabled=disabled] .spinner{position:relative;bottom:auto}
            .page-home .cta-buttons .btn-primary[disabled=disabled] .spinner>div,.page-home .cta-buttons .btn-primary[disabled=disabled] .spinner>span{width:14px;height:14px;background-color:#fff}
            .page-home .cta-buttons .btn-primary[disabled=disabled] .inner-wrap,.page-home .cta-buttons .btn-primary[disabled=disabled] .glyphicon{display:none}
            .page-home .hero-section-wrapper .hero-section-inner{background-repeat:no-repeat;background-image:radial-gradient(circle, rgba(255, 255, 255, 0.25) 2%, rgba(255, 255, 255, 0) 20%);background-size:130% 140%}
            .page-home .hero-section-wrapper .hero-section{background:none;background:radial-gradient(circle, rgba(255, 255, 255, 0.25) 3%, rgba(255, 255, 255, 0) 40%);background-size:60% 100%;background-repeat:no-repeat;padding-top:115px;padding-bottom:115px}
            .page-home .section-home{text-align:center;padding:80px 0 80px 0}
            .page-home .wave-deco.key-points{background:#fff;display:none}
            .page-home .section-headline{font-size:38px;margin-bottom:25px}
            .page-home .section-headline .chain{font-weight:400;padding:0 5px;font-size:36px;position:relative;top:-1px}
            .page-home .intro-text{font-size:18px;margin:0 auto}
            .page-home .section-video{padding:50px 0;background:#5523ed;overflow:hidden}
            .page-home .section-video .outer-wrap{padding:80px 60px;background:#7165ff radial-gradient(circle, rgba(255, 255, 255, 0.25) 3%, rgba(255, 255, 255, 0) 40%);background:#7165ff;border-radius:12px;box-shadow:3px 3px 7px rgba(0,0,0,.06)}
            .page-home .section-video.observe-intersection .section-headline{transform:translate(100%, 0)}
            .page-home .section-video.observe-intersection .sub-headline{transform:translate(-1500px, 0)}
            .page-home .section-video.observe-intersection .video-outer-container{transform:translate(1500px, 0)}
            .page-home .section-video.in-view .section-headline,.page-home .section-video.in-view .sub-headline,.page-home .section-video.in-view .video-outer-container{transform:translate(0, 0)}
            .page-home .section-video .section-headline{color:#fff;transition:transform .75s;margin-top:0}
            .page-home .section-video .sub-headline{font-weight:400;max-width:830px;margin:0 auto;line-height:1.6;color:#fff;transition:transform .75s;font-size:24px}
            .page-home .section-video .video-outer-container{max-width:850px;margin:50px auto 0 auto;transition:transform 1.25s}
            .page-home .section-video .video-container{position:relative;width:100%;padding-bottom:56.25%;height:0}
            .page-home .section-video .video-container iframe{position:absolute;top:0;left:0;width:100%;height:100%;border-radius:6px;box-shadow:-8px -8px 14px rgba(0,0,0,.06),8px 8px 14px rgba(0,0,0,.06)}
            .page-home .section-video .btn-create-own-logo{display:block;margin-top:25px;width:100%;font-size:24px;transition:color .4s;background:#5523ed;border:0 none;color:#fff;padding:25px}
            .page-home .section-how-it-works{background:#fff;padding-bottom:0;padding-top:70px}
            .page-home .section-how-it-works .section-headline{margin-bottom:0}
            .page-home .section-showcase{background:#f3f2f9;padding-bottom:25px;padding-top:70px;position:relative}
            .page-home .section-showcase .container-full-width{max-width:100%}
            .page-home .section-showcase .section-headline{text-align:center}
            .page-home .section-showcase .section-headline select{margin:0 10px}
            .page-home .section-showcase .section-headline .btn-dropdown-industry{color:#000;padding:2px 12px 2px 14px;margin:-8px 8px 0 8px;font-size:32px;font-weight:bold}
            .page-home .section-showcase .section-headline .btn-dropdown-industry .active-value{padding-right:8px}
            .page-home .section-showcase .section-headline .btn-dropdown-industry .caret{margin-top:-4px;border-top:5px solid;border-right:5px solid transparent;border-left:5px solid transparent}
            .page-home .section-showcase .intro-text{max-width:880px}
            .page-home .section-showcase .cta-row{padding:40px 15px 0 15px}
            .page-home .section-showcase .cta-row .btn{padding:20px 55px;font-size:18px;margin-bottom:8px}
            .page-home .section-showcase .cta-row .btn.btn-get-started{margin-left:12px}
            .page-home .section-showcase .cta-row .btn.btn-how{margin-right:12px}
            .page-home .section-showcase .universal-logos-grid{margin:60px 0;padding-bottom:20px;gap:26px;width:100% !important;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .page-home .section-showcase .universal-logos-grid .logo .ribbon{position:absolute;top:17px;right:18px}
            .page-home .section-showcase .universal-logos-grid .logo .ribbon .industry-link{text-decoration:none;display:inline-block}
            .page-home .section-showcase .universal-logos-grid .logo .ribbon .industry-link span{display:inline-block;padding:4px 12px;background-color:#f9f9f9;color:#ddd;text-transform:uppercase;text-align:center;border-radius:14px;font-size:12px;text-decoration:none}
            .page-home .section-showcase .universal-logos-grid .logo .items .item{border:0 none;border-radius:15px;padding:15px 30px;padding:25px 30px 15px 30px}
            .page-home .section-showcase .universal-logos-grid .logo .items .item .svg-container{transform:scale(1)}
            .page-home .section-showcase .arrow-down{position:absolute;left:50%;top:0;margin-left:-40px;width:0;height:0;border-left:40px solid transparent;border-right:40px solid transparent;border-top:50px solid #fff}
            .page-home .section-top-industries{background:#fff;display:none}
            .page-home .section-trending-industries{background:#fff}
            .page-home .section-trending-industries #morphed-svg{display:block;height:70%;max-height:470px;margin:auto;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);filter:drop-shadow(3px 2px 4px rgba(0, 0, 0, 0.6));cursor:pointer}
            .page-home .section-trending-industries .envision-trending-industries{position:relative;overflow:hidden}
            .page-home .section-trending-industries .container-full-width{max-width:100%;padding:0}
            .page-home .section-trending-industries .section-headline{margin-bottom:0;padding-bottom:30px;padding-left:10px;padding-right:10px}
            .page-home .section-trending-industries .section-headline .glyphicon{padding-right:15px;top:2px;font-size:26px;color:#ce0058}
            .page-home .section-trending-industries .trending-terms{list-style:none;margin-bottom:30px;margin-left:0;padding-left:20px;padding-right:20px}
            .page-home .section-trending-industries .trending-terms li{display:inline-block;margin-right:10px}
            .page-home .section-trending-industries .trending-terms li .term{list-style:none;display:inline-block;margin-top:8px;padding:4px 0px;font-size:18px;letter-spacing:.04em;cursor:pointer;color:#ccc;text-decoration:none;margin:0 8px}
            .page-home .section-trending-industries .trending-terms li.active .term{color:#666;border-bottom:2px solid #ddd}
            .page-home .section-trending-industries .slider-prev,.page-home .section-trending-industries .slider-next{position:absolute;z-index:155;top:50%;font-size:20px;background:#fff;border-radius:100%;border:0 none;padding:14px 16px;line-height:1;outline:0 none}
            .page-home .section-trending-industries .slider-prev{left:11%;transform:translate(-50%, -50%)}
            .page-home .section-trending-industries .slider-next{right:11%;transform:translate(50%, -50%)}
            .page-home .section-trending-industries .industries{list-style:none;margin:0;padding:0;width:100%;position:relative;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;display:flex;overflow-x:hidden;flex-wrap:nowrap;transition:transform .8s}
            .page-home .section-trending-industries .industries.left-end-reached{transform:translate(12%, 0)}
            .page-home .section-trending-industries .industries.right-end-reached{transform:translate(-12%, 0)}
            .page-home .section-trending-industries .industries .industry{position:relative;width:76%;flex:0 0 auto;margin-right:26px}
            .page-home .section-trending-industries .industries .industry:last-child{margin-right:0}
            .page-home .section-trending-industries .industries .industry.active .darkening-layer{background-color:rgba(0,0,0,.1)}
            .page-home .section-trending-industries .industries .industry.active .media-wrap{filter:grayscale(0)}
            .page-home .section-trending-industries .industries .industry.active h2,.page-home .section-trending-industries .industries .industry.active .landing-page-link{opacity:1}
            .page-home .section-trending-industries .industries .industry .landing-page-link{text-decoration:none;position:absolute;right:13px;top:11px;color:#fff;padding:5px;font-size:19px;transition:opacity 1.25s;opacity:0;line-height:1;text-shadow:2px 2px 2px rgba(0,0,0,.2)}
            .page-home .section-trending-industries .industries .industry h2{color:#fff;position:absolute;z-index:50;top:30px;margin:0;font-size:26px;transition:opacity 1.25s;opacity:0;text-shadow:2px 2px 2px rgba(0,0,0,.35);left:42px}
            .page-home .section-trending-industries .industries .industry h2 a{color:#fff;text-decoration:none;opacity:1;transition:opacity .5s}
            .page-home .section-trending-industries .industries .industry h2 a:hover{opacity:.6}
            .page-home .section-trending-industries .industries .industry .media-wrap{position:relative;grid-auto-rows:1fr;overflow:hidden;transition:filter 1s;filter:grayscale(1);border-radius:15px}
            .page-home .section-trending-industries .industries .industry img,.page-home .section-trending-industries .industries .industry video{width:100% !important;height:auto !important}
            .page-home .section-trending-industries .darkening-layer{position:absolute;left:0;top:0;z-index:10;transition:background-color 1s;width:100%;height:100%;background-color:rgba(0,0,0,.15)}
            .page-home .section-awards{padding-top:0;padding-bottom:100px;background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%);background:#ffe29c;background:#f9f9f9}
            .page-home .section-awards .wave-deco{background:#f1f1f1}
            .page-home .section-testimonials{background:#05c4ce linear-gradient(40deg, rgba(255, 255, 255, 0.23), transparent);padding-bottom:60px;background:#fcfcfc linear-gradient(40deg, rgba(255, 255, 255, 0.23), transparent);background:#fff;padding-bottom:20px}
            .page-home .section-testimonials .testimonials-container{margin-top:70px;margin-bottom:15px}
            .page-home .section-testimonials .testimonials-container .testimonial{background:#f9f9f9}
            .page-home .section-testimonials .testimonials-container .testimonial .panel-body .review .glyphicon-star{font-size:21px;margin-right:7px}
            .page-home .section-testimonials .show-more-text-link{margin-top:50px;text-align:center;font-weight:600}
            .page-home .section-testimonials .show-more-text-link a{color:#000}
            .page-home .section-testimonials .section-headline{margin-top:40px;padding:0 20px}
            .page-home .section-testimonials .section-headline .chain{color:#67bfe6}
            .page-home .section-testimonials .section-headline .review-badge{display:inline-block;margin-left:25px}
            .page-home .section-testimonials .section-headline .review-badge img{max-width:120px;height:auto !important}
            .page-home #page .section-envision{background:#fff;padding-top:80px;border-bottom:1px solid #e1def7;padding-bottom:0}
            .page-home #page .section-envision .section-key-points{background:#fff;padding:0 0 20px 0;box-shadow:none}
            .page-home #page .section-envision .section-key-points .horizontal-bullet-list{grid-template-columns:repeat(3, 1fr)}
            .page-home #page .section-envision .section-key-points .horizontal-bullet-list .bullet-item{background:none;text-align:center;box-shadow:none;margin:0 auto}
            .page-home #page .section-envision .section-key-points .horizontal-bullet-list .bullet-item p{margin-bottom:0;display:none}
            .page-home #page .section-envision .section-key-points .horizontal-bullet-list .bullet-item img{background:none;max-height:55px !important}
            .page-home #page .section-envision .section-key-points .horizontal-bullet-list .bullet-item .text{font-weight:bold;color:#0b1347;max-width:100%}
            .page-home #page .section-envision .package-use-cases .use-case{padding:60px 0;overflow:hidden}
            .page-home #page .section-envision .package-use-cases .use-case .container-full-width{position:relative}
            .page-home #page .section-envision .package-use-cases .use-case.web{background:#03b4ba}
            .page-home #page .section-envision .package-use-cases .use-case.web h3{right:9.5%;bottom:8.5%}
            .page-home #page .section-envision .package-use-cases .use-case.web .hotspot-tooltip{left:50%;top:33%}
            .page-home #page .section-envision .package-use-cases .use-case.print{background:#ea5542}
            .page-home #page .section-envision .package-use-cases .use-case.print h3{left:52.7%;top:28%}
            .page-home #page .section-envision .package-use-cases .use-case.print .hotspot-tooltip{left:50.4%;top:56%}
            .page-home #page .section-envision .package-use-cases .use-case.social{background:#ffcc59}
            .page-home #page .section-envision .package-use-cases .use-case.social h3{left:9.5%;bottom:8.5%}
            .page-home #page .section-envision .package-use-cases .use-case.social .hotspot-tooltip{left:59%;top:23%}
            .page-home #page .section-envision .package-use-cases .use-case.support{background:#685bff}
            .page-home #page .section-envision .package-use-cases .use-case.support h3{left:0;top:10%;width:100%;text-align:center}
            .page-home #page .section-envision .package-use-cases .use-case.support .hotspot-tooltip{left:51.2%;top:66%}
            .page-home #page .section-envision .package-use-cases .use-case.observe-intersection.web img{transform:translate(-100%, 0)}
            .page-home #page .section-envision .package-use-cases .use-case.observe-intersection.web h3{transform:translate(1000px, 0)}
            .page-home #page .section-envision .package-use-cases .use-case.observe-intersection.print img{transform:translate(0, 100%)}
            .page-home #page .section-envision .package-use-cases .use-case.observe-intersection.print h3{transform:translate(0, -400px)}
            .page-home #page .section-envision .package-use-cases .use-case.observe-intersection.social img{transform:translate(100%, 0)}
            .page-home #page .section-envision .package-use-cases .use-case.observe-intersection.social h3{transform:translate(-1000px, 0)}
            .page-home #page .section-envision .package-use-cases .use-case.observe-intersection.support img{transform:translate(0, 100%)}
            .page-home #page .section-envision .package-use-cases .use-case.observe-intersection.support h3{transform:translate(0, -200px)}
            .page-home #page .section-envision .package-use-cases .use-case.in-view img{transform:translate(0, 0)}
            .page-home #page .section-envision .package-use-cases .use-case.in-view h3{transform:translate(0, 0)}
            .page-home #page .section-envision .package-use-cases img{width:100% !important;height:auto !important;border-radius:12px;box-shadow:3px 3px 7px rgba(0,0,0,.02);transition:transform .75s}
            .page-home #page .section-envision .package-use-cases h3{color:#fff;margin:0;font-size:34px;position:absolute;z-index:10;transition:transform .75s}
            .page-home #page .section-envision .package-use-cases .hotspot-tooltip{display:block;width:32px;height:32px;position:absolute;z-index:20;top:0;left:0;background-image:url("/static/img/hotspot.png");background-repeat:no-repeat;background-size:contain;border:0 none;background-color:transparent;outline:0 none;opacity:0;transition:all 1s;-webkit-animation:PulsateScale 1.3s linear infinite;animation:PulsateScale 1.3s linear infinite}
            .page-home #page .section-envision .package-use-cases .hotspot-tooltip:hover{-webkit-animation-play-state:paused;animation-play-state:paused}
            .page-home #page .section-envision .package-use-cases .hotspot-tooltip.active{opacity:1}
            .page-home #page .section-envision .package-use-cases .hotspot-tooltip.inactive{opacity:0}
            .page-home #page .section-envision .package-use-cases .tooltip.top{white-space:normal}
            .page-home #page .section-envision .package-use-cases .tooltip.top .tooltip-inner{padding:18px 22px 25px 22px;font-size:18px;max-width:270px}
            .page-home #page .section-envision .package-use-cases .tooltip.top .tooltip-inner p:last-child{margin-bottom:10px}
            .page-home #page .section-envision .envision-brand .hotspot-tooltip{display:none}
            .page-home #page .section-envision .envision-brand #hotspot-standalone-icon,.page-home #page .section-envision .envision-brand #hotspot-watermark,.page-home #page .section-envision .envision-brand #hotspot-sm-kit,.page-home #page .section-envision .envision-brand #hotspot-business-cards,.page-home #page .section-envision .envision-brand #hotspot-shirt-merch{display:block;opacity:1}
            .page-home #page .section-envision .envision-brand .sujet-container img{max-width:100% !important;height:auto !important;filter:hue-rotate(45deg)}
            .page-home #page .section-envision .section-headline{text-align:center;margin-bottom:45px;margin-top:10px}
            .page-home #page .section-envision .envision-brand .slider-wrapper{opacity:1}
            .page-home #page .section-envision .envision-brand #hotspot-shirt-merch{background-image:url("/static/img/hotspot-smashing.png");filter:hue-rotate(45deg)}
            .page-home .hero-section .teaser-container{display:flex;align-items:center}
            .page-home .hero-section .teaser-text{position:relative;z-index:10;max-width:750px;flex:1}
            .page-home .hero-section .teaser-text .text-wrap{padding-left:28px}
            .page-home .hero-section .teaser-image{flex:1;overflow:hidden}
            .page-home .hero-section .teaser-image img{position:relative;max-width:100% !important;height:auto !important}
            .page-home .hero-section h1{font-size:60px;line-height:1.2;margin-bottom:15px;max-width:540px}
            .page-home .hero-section h1 .main-title{font-weight:600;display:block;width:100%;color:#000}
            .page-home .hero-section .form-spinner-wrap{margin-top:35px;min-height:82px}
            .page-home .hero-section .form-spinner-wrap .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .page-home .hero-section .form-spinner-wrap .spinner>div,.page-home .hero-section .form-spinner-wrap .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .page-home .hero-section .form-spinner-wrap .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .page-home .hero-section .form-spinner-wrap .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .page-home .hero-section .form-spinner-wrap .spinner{text-align:left !important;position:relative;top:28px;left:35px;bottom:0}
            .page-home .hero-section .form-spinner-wrap .spinner>div,.page-home .hero-section .form-spinner-wrap .spinner>span{background-color:#000;margin-right:12px;width:24px;height:24px}
            .page-home .hero-section .hero-illustration{width:580px;height:auto !important;position:absolute;right:290px;top:-90px}
            .page-home .hero-section .reviews{margin-top:35px;padding-left:30px}
            .page-home .hero-section .reviews .stars,.page-home .hero-section .reviews .capterra-logo{display:inline-block}
            .page-home .hero-section .reviews .stars .glyphicon{display:inline-block;font-size:18px;margin:0 2px;top:3px;color:#f7b604}
            .page-home .hero-section .reviews .capterra-logo{margin-right:12px;padding-right:12px}
            .page-home .hero-section .reviews .capterra-logo .rating{color:#000}
            .page-home .hero-section .reviews .capterra-logo img{position:relative;top:-2px;margin-left:6px;max-width:100px !important;height:auto !important}
            .page-home .hero-section .intro-text,.page-home .hero-section #typed{display:block;margin:0;color:#000;padding-left:6px}
            .page-home .hero-section h2{font-weight:400}
            .page-home .hero-section h2 strong{font-weight:600}
            .page-home .section-get-started{background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%);background:#ffe29c;background:#f9f9f9;padding-bottom:70px;padding-top:70px;text-align:center}
            .page-home .section-get-started.compact-layout{padding-top:80px;padding-bottom:80px;background:#fff}
            .page-home .section-get-started.compact-layout .cta-buttons{max-width:750px;background:#f5f5f9;box-shadow:none;padding:20px}
            .page-home .section-get-started.compact-layout .cta-buttons .form-control{background:#f5f5f9}
            .page-home .section-get-started .section-headline{margin-bottom:35px}
            .page-home .section-get-started .cta-buttons{max-width:600px;margin:0 auto}
            .page-home .section-get-started .cta-buttons .form-control{box-shadow:none;border-radius:5px;margin-right:10px}
            .page-home .section-get-started .cta-buttons .form-control[disabled=disabled]{background:#e9e9e9;color:#888;font-style:italic}
            .page-home .section-get-started-footer{position:relative;padding:100px 0 140px 0;margin-top:0;background:linear-gradient(90deg, #0B1347 20px, transparent 1%) center,linear-gradient(#0B1347 20px, transparent 1%) center,#1a2256;background-size:26px 26px}
            .page-home .section-get-started-footer .arrow-down{position:absolute;left:50%;top:0;margin-left:-40px;width:0;height:0;border-left:40px solid transparent;border-right:40px solid transparent;border-top:50px solid #f3f2f9}
            .page-home .section-get-started-footer .section-headline{color:#fff;font-size:46px;font-weight:600;text-align:center;margin-bottom:45px}
            .page-home .section-get-started-footer .cta-buttons{background:#1a2256;border:1px solid rgba(113,101,255,.1);border-radius:10px;box-shadow:none}
            .page-home .section-get-started-footer .cta-buttons .form-control{background:#1a2256;color:#686f97}
            .page-home .section-get-started-2{background:#f5f5f5;border-top:1px solid #ddd;border-bottom:1px solid #ddd;text-align:center;padding:25px 25px 13px 25px}
            .page-home .section-get-started-2 .btn{padding:12px 25px;margin-left:10px;margin-right:12px;margin-bottom:12px;font-size:18px}
            .page-home .section-key-points,.page-sub .section-key-points{padding-bottom:66px;padding-top:66px;background:#f9f9f9 linear-gradient(180deg, #F3F2F9 16.58%, rgba(243, 242, 249, 0.2) 50.07%)}
            .page-home .section-key-points .horizontal-bullet-list,.page-sub .section-key-points .horizontal-bullet-list{list-style:none;padding:0;margin:0 auto;width:100%;justify-content:center;display:grid;grid-gap:26px;grid-template-columns:repeat(2, 1fr)}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item,.page-sub .section-key-points .horizontal-bullet-list .bullet-item{flex:1;padding:26px;display:flex;align-items:center;line-height:1.5;text-align:left;border-radius:10px 25px 0;border-radius:10px;background:#fff;padding:26px;box-shadow:3px 3px 10px rgba(0,0,0,.05)}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item:nth-child(1) img,.page-sub .section-key-points .horizontal-bullet-list .bullet-item:nth-child(1) img{background:#dbd8ff}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item:nth-child(2) img,.page-sub .section-key-points .horizontal-bullet-list .bullet-item:nth-child(2) img{background:#ffe2e0}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item:nth-child(3) img,.page-sub .section-key-points .horizontal-bullet-list .bullet-item:nth-child(3) img{background:#d3fcff}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item:nth-child(4) img,.page-sub .section-key-points .horizontal-bullet-list .bullet-item:nth-child(4) img{background:#ffeace}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item img,.page-sub .section-key-points .horizontal-bullet-list .bullet-item img{max-height:50px !important;width:auto !important;border-radius:10px;padding:6px;box-sizing:content-box}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item:last-child,.page-sub .section-key-points .horizontal-bullet-list .bullet-item:last-child{border-right:0 none}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item .glyphicon,.page-sub .section-key-points .horizontal-bullet-list .bullet-item .glyphicon{font-size:20px;position:relative;top:2px}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item .text,.page-sub .section-key-points .horizontal-bullet-list .bullet-item .text{display:block;font-size:18px;max-width:150px;margin-left:20px}
            .page-home .section-key-points .horizontal-bullet-list .bullet-item .sub-text,.page-sub .section-key-points .horizontal-bullet-list .bullet-item .sub-text{font-size:18px}
            .page-home .section-key-points{padding-bottom:50px;padding-top:50px;background:#f9f9f9;overflow:hidden}
            .page-home .section-key-points .horizontal-bullet-list{transition:transform .75s}
            .page-home .section-key-points.in-view .horizontal-bullet-list{transform:translate(0, 0)}
            .page-home .section-key-points.observe-intersection .horizontal-bullet-list{transform:translate(0, 300px)}
            .page-sub .section-key-points{background:#1a2256}
            .page-sub .section-key-points .horizontal-bullet-list{max-width:100% !important}
            .page-sub .section-key-points .horizontal-bullet-list .bullet-item{background:rgba(113,101,255,.1)}
            .page-sub .section-key-points .horizontal-bullet-list .bullet-item .text{color:#fff}
            .page-sub .section-key-points .horizontal-bullet-list .bullet-item img{background:rgba(113,101,255,.1) !important}
            .btn-go-back{display:none}
            .btn-go-back .glyphicon{position:relative;top:3px}
            .btn-go-back .inner-wrap{padding-left:8px}
            .page-generate{background:#fff}
            .page-generate.active-session{background:#f9f9f9}
            .page-generate.active-session.show-config-column{overflow:hidden}
            .page-generate.take-tour{background:#f9f9f9}
            .page-generate.take-tour #page{min-height:100%;background:linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.78) 100%, white 100%)}
            .page-generate.take-tour .modal{z-index:9999}
            .page-generate.take-tour .logo-maker-header{background:#fff}
            .page-generate.take-tour .logo-maker-nav-bar .tour-buttons{display:flex;justify-content:center;align-items:center}
            .page-generate.take-tour .logo-maker-nav-bar .tour-buttons .btn-generate-final-tour{display:none}
            .page-generate.take-tour[data-tour-step=tour-name] .tour-buttons .btn-prev{visibility:hidden}
            .page-generate.take-tour[data-tour-step=tour-industries] .logo-maker-nav-bar .generate-config-column .config-column{overflow:hidden}
            .page-generate.take-tour[data-tour-step=tour-industries] .logo-maker-nav-bar .tour-buttons{background:rgba(255,255,255,.18)}
            .page-generate.take-tour[data-tour-step=tour-designer] .logo-maker-nav-bar .tour-buttons{background:rgba(255,255,255,.72)}
            .page-generate.take-tour[data-tour-step=tour-attributes] .logo-maker-nav-bar .tour-buttons{background:rgba(255,255,255,.82)}
            .page-generate.take-tour[data-tour-step=tour-colors] #page{background:linear-gradient(90deg, rgba(241, 241, 241, 0) 0%, rgba(241, 241, 241, 0.78) 100%, #f9f9f9 100%)}
            .page-generate.take-tour[data-tour-step=tour-colors] .logo-maker-nav-bar .tour-buttons{background:rgba(255,255,255,.96)}
            .page-generate.take-tour[data-tour-step=tour-finish] .tour-buttons .btn-next{display:none}
            .page-generate.take-tour[data-tour-step=tour-finish] .tour-buttons .btn-generate-final-tour{display:inline-block}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column{padding:55px 0 40px 0;min-height:100vh}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section .btn-close-config{display:none}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container.logo-name{padding-top:8px}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .input-container,.page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container{width:100%}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .input-container .bootstrap-tagsinput,.page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container .bootstrap-tagsinput{width:100% !important}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container{top:15px}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .extended-parameters{display:none}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .slots-bar{display:none}
            .page-generate.take-tour .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon.show-slots-bar .slots-bar{display:block}
            .page-generate.take-tour .logo-maker-nav-bar .nav-tabs li{opacity:.1;cursor:default}
            .page-generate.take-tour .logo-maker-nav-bar .nav-tabs li a{cursor:default}
            .page-generate.take-tour .logo-maker-nav-bar .nav-tabs li.active{opacity:1}
            .page-generate.designer-work-in-progress #page{height:100%;overflow:hidden}
            .page-generate.designer-work-in-progress #page .header-container{box-shadow:3px 3px 13px rgba(0,0,0,.22)}
            .page-generate.designer-work-in-progress .fixed-app-header{display:none}
            .page-generate.designer-work-in-progress .virtual-designer-bar .virtual-designer img{max-width:160px !important}
            .page-generate.designer-work-in-progress .virtual-designer-bar .speech-bubble{padding:18px 24px}
            .page-generate.designer-work-in-progress .virtual-designer-bar .speech-bubble .messages .message p{font-size:17px;line-height:1.6}
            .page-generate.designer-work-in-progress .virtual-designer-bar .speech-bubble .collapse-designer-link{visibility:hidden}
            .page-generate.designer-work-in-progress .virtual-designer-bar .switch-designer-button{visibility:hidden}
            .page-generate.designer-work-in-progress #page .header-container .header-logo-link,.page-generate.designer-work-in-progress .header-flex-row .dropdown-toggle{visibility:hidden}
            .page-generate.designer-work-in-progress .logo-maker-nav-bar .tour-buttons{display:none}
            .page-generate.designer-work-in-progress .logo-maker-nav-bar .generate-config-column .config-section{opacity:0 !important}
            .page-generate.designer-work-in-progress .logo-maker-nav-bar .generate-config-column .onboarding-progress-animation{display:block}
            .page-generate.designer-work-in-progress .logo-maker-nav-bar .generate-config-column .onboarding-progress-animation .percent-progress.visible{opacity:1}
            .page-generate.designer-work-in-progress .logo-maker-nav-bar .generate-config-column .onboarding-progress-animation .percent-progress.completed{color:#5cb85c}
            .page-generate.designer-work-in-progress .loading-layer{display:block;background:none}
            .page-generate.designer-work-in-progress .loading-layer .ring{display:none}
            .page-generate.show-industry-image[data-tour-step=tour-industries] .fixed-app-header .logo-maker-header{background:rgba(255,255,255,.25);border-color:#ddd}
            .page-generate.show-industry-image[data-tour-step=tour-industries] .fixed-app-header .logo-maker-header .overall-input-score .progress{background:#ddd}
            .page-generate.show-industry-image[data-tour-step=tour-industries] .logo-maker-nav-bar .tour-buttons .btn{box-shadow:1px 1px 4px rgba(0,0,0,.08),0px 0px 8px rgba(0,0,0,.1)}
            .page-generate.show-industry-image[data-tour-step=tour-industries] .logo-maker-nav-bar .tour-buttons .btn.btn-next.continue-state{box-shadow:2px 2px 6px rgba(0,0,0,.24),0px 0px 8px rgba(0,0,0,.18)}
            .page-generate.show-industry-image .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .bootstrap-tagsinput{box-shadow:2px 2px 3px rgba(0,0,0,.1),2px 2px 8px rgba(0,0,0,.1) !important}
            .page-generate.show-industry-image .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .industry-background-layer{width:100%;height:100%;position:absolute;left:0;top:0;filter:grayscale(1);opacity:.15;background-size:cover;background-position:center;background-repeat:no-repeat;z-index:5}
            .page-generate.show-industry-image .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .industry-background-layer video{display:block;width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
            .page-generate.show-industry-image .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .step-headline{text-shadow:4px 4px 25px #fff}
            .page-generate.show-industry-image .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .legend p{text-shadow:4px 4px 25px #fff;color:#555}
            .page-generate .action-buttons-container{position:fixed;z-index:999;width:100%;left:0;bottom:0;padding:18px 15px;-webkit-backdrop-filter:blur(18px) saturate(180%);backdrop-filter:blur(18px) saturate(180%);background-color:rgba(255,255,255,.78)}
            .page-generate .action-buttons-container .action-buttons{max-width:540px;margin:0 auto;display:flex;gap:20px;text-align:center}
            .page-generate .action-buttons-container .action-buttons .btn{font-size:18px;padding-top:8px;padding-bottom:8px;margin:0}
            .page-generate .action-buttons-container .action-buttons .btn .glyphicon{font-size:16px}
            .page-generate .action-buttons-container .action-buttons .btn .inner-wrap{padding-left:8px;display:inline-block}
            .page-generate .action-buttons-container .action-buttons .btn.btn-init-delete{padding-left:20px;padding-right:20px;margin-right:auto;background:#f9f9f9}
            .page-generate .action-buttons-container .action-buttons .btn.btn-init-delete .inner-wrap{display:none}
            .page-generate .action-buttons-container .action-buttons .btn.btn-generate-more{padding-left:12px;padding-right:12px;flex:1}
            .page-generate .action-buttons-container .action-buttons .btn.btn-generate-more .glyphicon{font-size:14px;top:0}
            .page-generate .action-buttons-container .action-buttons .btn.btn-generate-more[disabled=disabled]{padding-left:25px !important;padding-right:25px !important}
            .page-generate .action-buttons-container .action-buttons .btn.btn-generate-more[disabled=disabled] .inner-wrap{display:none}
            .page-generate .action-buttons-container .action-buttons .btn-manage-favorites{margin-left:auto}
            .page-generate .action-buttons-container .action-buttons .btn-manage-favorites .glyphicon{font-size:18px;color:#000}
            .page-generate .action-buttons-container .action-buttons .btn-manage-favorites[disabled=disabled]{opacity:.5}
            .page-generate .envision-brand{display:none}
            .page-generate .header-container{box-shadow:none}
            .page-generate .header-container .container-full-width{padding:0 30px;max-width:100%}
            .page-generate .header-container .parent-nav-container{display:none}
            .page-generate .header-container .header-flex-row.open .parent-nav-container{display:block;max-width:500px}
            .page-generate .preview-tabs-container.container-full-width{max-width:100%;padding:0 0 100px 0}
            .page-generate .preview-tabs-container.container-full-width .container-full-width{max-width:100%;padding:0}
            .page-generate .header-flex-row .dropdown-toggle{display:block}
            .page-generate .virtual-designer-bar{z-index:500;width:100%;left:0;top:50px;border-bottom:1px solid #d6bc66;margin-top:-5px;transition:padding-top .5s;padding-top:0}
            .page-generate .virtual-designer-bar.no-transition{transition:none !important}
            .page-generate .virtual-designer-bar.no-transition .wrapper,.page-generate .virtual-designer-bar.no-transition .virtual-designer,.page-generate .virtual-designer-bar.no-transition .virtual-designer img{transition:none !important}
            .page-generate .virtual-designer-bar .wrapper{display:flex;padding:0 15px 0 5px;align-items:flex-end;max-width:500px;transition:all .5s;transform:translate(-100%, 0);line-height:1}
            .page-generate .virtual-designer-bar .virtual-designer{padding:25px 10px 0 0px;border-radius:0;position:relative;margin-left:0;transform:translate(0, 0);transition:all .5s}
            .page-generate .virtual-designer-bar .virtual-designer img{transition:all 1s;max-width:140px !important;height:auto !important;cursor:pointer}
            .page-generate .virtual-designer-bar .virtual-designer .switch-designer-button{display:inline-block;background:none;border:0 none;outline:0;box-shadow:none;position:absolute;bottom:24px;right:8px;font-size:18px;padding:5px;opacity:.5}
            .page-generate .virtual-designer-bar .virtual-designer .notification-link{display:none;color:#000;position:absolute;padding:4px 5px;line-height:1;font-size:21px;right:3px;top:3px;font-size:30px}
            .page-generate .virtual-designer-bar .virtual-designer .notification-link .glyphicon{opacity:.2}
            .page-generate .virtual-designer-bar .virtual-designer .notification-link .notification-count{background-color:#fa3e3e;border-radius:3px;color:#fff;padding:2px 5px;line-height:1;font-size:12px;font-weight:bold;position:absolute;top:0;right:0;transform:scale(1);transition:all .5s}
            .page-generate .virtual-designer-bar .virtual-designer .notification-link .notification-count.success{background-color:#5cb85c}
            .page-generate .virtual-designer-bar .virtual-designer .notification-link .notification-count.animated{transform:scale(1.75)}
            .page-generate .virtual-designer-bar .speech-bubble{flex:1;padding:14px 15px 8px 15px;margin:14px 0;position:relative;background:rgba(76,61,1,.06);font-size:14px;line-height:1.5;border-radius:.4em;transition:opacity .5s;opacity:1;color:#000}
            .page-generate .virtual-designer-bar .speech-bubble a{text-decoration:underline}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message{display:none}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message.active{display:block}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message h2{font-size:14px;font-weight:normal;line-height:1.5;margin-top:0;margin-bottom:8px}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message h2 .intro{display:inline-block;width:100%}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message ul{list-style:none;padding-left:0;margin-bottom:0}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message .my-recommendation{display:block;font-style:italic}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message p,.page-generate .virtual-designer-bar .speech-bubble .messages .message li{margin-bottom:8px}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message p .follow-recommendation-link,.page-generate .virtual-designer-bar .speech-bubble .messages .message li .follow-recommendation-link{color:#000;font-weight:bold}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message p .skip-walkthrough,.page-generate .virtual-designer-bar .speech-bubble .messages .message li .skip-walkthrough{color:rgba(0,0,0,.5);text-decoration:none;margin-left:12px}
            .page-generate .virtual-designer-bar .speech-bubble .messages .message li{display:inline-block}
            .page-generate .virtual-designer-bar .speech-bubble .message-browser{width:100%}
            .page-generate .virtual-designer-bar .speech-bubble .message-browser .message-number{margin-top:12px;display:inline-block;width:22px;height:22px;cursor:pointer;border-radius:100%;margin-right:10px;border:2px solid #000}
            .page-generate .virtual-designer-bar .speech-bubble .message-browser .message-number.active{background:#000}
            .page-generate .virtual-designer-bar .speech-bubble .message-browser .message-number:last-child{margin-right:0}
            .page-generate .virtual-designer-bar .speech-bubble .message-browser .message-number:first-child:last-child{display:none}
            .page-generate .virtual-designer-bar .speech-bubble .collapse-designer-link{position:absolute;right:-13px;top:-15px;padding:7px;font-size:16px;color:#000}
            .page-generate .virtual-designer-bar .speech-bubble:after{content:"";position:absolute;left:0;top:50%;width:0;height:0;border:27px solid transparent;border-right-color:rgba(76,61,1,.06);border-left:0;border-bottom:0;margin-top:-13.5px;margin-left:-27px}
            .page-generate .virtual-designer-bar.collapsed-view{margin-top:-40px}
            .page-generate .virtual-designer-bar.collapsed-view .wrapper{display:block}
            .page-generate .virtual-designer-bar.collapsed-view .virtual-designer{display:inline-block;padding-top:0;padding-left:35px;padding-right:35px;margin-left:50%;transform:translate(-50%, 0)}
            .page-generate .virtual-designer-bar.collapsed-view .virtual-designer img{max-width:50px !important}
            .page-generate .virtual-designer-bar.collapsed-view .virtual-designer .notification-link{display:inline-block}
            .page-generate .virtual-designer-bar.collapsed-view .virtual-designer .switch-designer-button{display:none}
            .page-generate .virtual-designer-bar.collapsed-view .speech-bubble{display:none}
            .page-generate .logo-maker-header{display:flex;align-items:center;border-bottom:1px solid #eee;padding:8px 15px}
            .page-generate .overall-input-score{display:flex;flex:1;align-items:center;max-width:620px;margin:0 auto}
            .page-generate .overall-input-score .progress{flex:1;height:5px;margin-bottom:0;background:#eee}
            .page-generate .overall-input-score .info{line-height:1;margin-left:12px}
            .page-generate .overall-input-score .info .glyphicon{top:2px;font-size:16px;color:#000}
            .page-generate .overall-input-score .info .tooltip-inner{padding:12px 15px 20px 15px !important;max-width:290px !important;width:290px !important}
            .page-generate .overall-input-score .info .tooltip-inner p{font-size:16px;line-height:1.5}
            .page-generate .overall-input-score .info .tooltip-inner p:last-child{margin-bottom:0}
            .page-generate .logo-maker-nav-bar{margin-bottom:20px}
            .page-generate .logo-maker-nav-bar .tour-buttons{padding:18px 10px;transition:all .1s ease 0s;background:rgba(255,255,255,.92);border-top:1px solid #ddd;text-align:center;position:fixed;z-index:10;left:0;bottom:0;width:100%}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn{font-size:19px;outline:0;border-radius:40px;line-height:21px;padding:14px 30px;max-width:50%}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn .glyphicon{font-size:14px;top:0}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-prev{margin-left:10px;margin-right:10px;border-color:#ddd;background:#fff}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-prev .glyphicon{margin-right:10px}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-next{background:#7165ff}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-next.continue-state .inner-wrap.continue{display:inline-block}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-next.continue-state .inner-wrap.skip{display:none}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-next.skip-state{color:#7165ff;border-color:#bbb8fc;background:#f7f7ff}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-next.skip-state .inner-wrap.continue{display:none}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-next.skip-state .inner-wrap.skip{display:inline-block}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-next,.page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-generate-final-tour{margin-left:10px;margin-right:10px}
            .page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-next .glyphicon,.page-generate .logo-maker-nav-bar .tour-buttons .btn.btn-generate-final-tour .glyphicon{margin-left:10px}
            .page-generate .logo-maker-nav-bar .local-nav{position:relative}
            .page-generate .logo-maker-nav-bar .fade-out-gradient{display:none;position:absolute;bottom:0;right:0;z-index:20;width:40px;height:100%;margin:0;background:linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, white 60%, white 100%)}
            .page-generate .logo-maker-nav-bar .nav-tabs{display:flex;overflow-x:auto;border:0 none;align-items:center;background:linear-gradient(90deg, #f9f9f9, #fff)}
            .page-generate .logo-maker-nav-bar .nav-tabs li{width:100%;padding:24px 50px 24px 28px;margin:0;cursor:pointer;float:none;opacity:1;transition:opacity 1s;border-radius:8px 8px 0 0;border-radius:0;display:inline-block;text-align:center;border-left:1px solid #efefef;border-bottom:1px solid #efefef;background:#fff;position:relative}
            .page-generate .logo-maker-nav-bar .nav-tabs li:first-child{border-left:0 none}
            .page-generate .logo-maker-nav-bar .nav-tabs li a{color:#000;width:100%;background:none;border:0 none;padding:0;position:relative;white-space:nowrap;margin:0;font-size:15px;transition:color 1s}
            .page-generate .logo-maker-nav-bar .nav-tabs li a .glyphicon{display:none;text-align:center;font-size:18px;padding-bottom:10px}
            .page-generate .logo-maker-nav-bar .nav-tabs li.active{background:none;border-bottom-color:transparent}
            .page-generate .logo-maker-nav-bar .nav-tabs li.logo-types .section-input-score{visibility:hidden}
            .page-generate .logo-maker-nav-bar .nav-tabs li.virtual-designers{padding-right:25px}
            .page-generate .logo-maker-nav-bar .nav-tabs li.virtual-designers .section-input-score{visibility:hidden}
            .page-generate .logo-maker-nav-bar .nav-tabs li.share .section-input-score{visibility:hidden}
            .page-generate .logo-maker-nav-bar .section-input-score{width:7px;margin:0 auto;margin-top:4px;position:absolute;right:25px;top:27px;height:7px}
            .page-generate .logo-maker-nav-bar .section-input-score .progress{height:7px;margin-bottom:0;background:none;box-shadow:none}
            .page-generate .logo-maker-nav-bar .section-input-score .progress .progress-bar{-moz-transition:none;-webkit-transition:none;transition:none;-webkit-animation:none;-o-animation:none;animation:none;width:7px !important;height:7px !important;border-radius:100%}
            .page-generate .logo-maker-nav-bar .generate-config-column{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .onboarding-progress-animation{display:none;position:absolute;top:0;left:0;width:100%;height:100%}
            .page-generate .logo-maker-nav-bar .generate-config-column .onboarding-progress-animation .percent-progress{position:absolute;left:50%;top:200px;transform:translate(-50%, -50%);font-size:170px;font-weight:600;transition:all 1.75s;opacity:0;color:#e5e5e5;font-family:"Poppins";display:flex;align-items:center;letter-spacing:-0.05em}
            .page-generate .logo-maker-nav-bar .generate-config-column .onboarding-progress-animation .percent-progress .percentage-sign{font-size:110px;margin-left:15px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column{padding:0 0 50px 0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section{padding:0 25px;opacity:1;transition:opacity 1.5s}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section:not(.active){display:none !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .step-headline{font-size:24px;margin-bottom:12px;margin-top:0;text-align:center;max-width:620px;margin:15px auto;font-weight:600;line-height:1.5}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .step-headline .optional{font-weight:normal}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .step-headline .step-info-icon{font-size:21px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .step-headline em{font-style:normal}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .legend{text-align:center;max-width:620px;margin:0 auto 45px auto}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .legend p{font-size:18px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .btn-close-config{outline:0;position:sticky;top:16px;left:100%;z-index:9999;font-size:15px;color:#000;background:#fff;border-radius:100%;box-shadow:1px 1px 4px rgba(0,0,0,.12),0px 0px 8px rgba(0,0,0,.12);line-height:1;padding:10px 12px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .tooltip-inner{padding:12px 15px 20px 15px !important;max-width:290px !important;width:290px !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .tooltip-inner p{font-size:16px;line-height:1.5}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .tooltip-inner p:last-child{margin-bottom:0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .bootstrap-tagsinput,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section .form-control{border-color:#ddd !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container{margin-bottom:10px;display:flex;align-items:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container .form-control{flex:1;padding:16px 18px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container .character-count{padding:0 10px;min-width:40px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container .character-count .count{font-size:18px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container .character-count .count.good{color:#5cb85c}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container .character-count .count.bad{color:#f0ad4e}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container .character-count .count.ugly{color:#d9534f}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container.update-input{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container.update-input .btn-update-name-tagline{width:100%}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .btn-generate-more{width:100%}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes.attribute-limit-reached .keywords .keyword .keyword-filter-tag{opacity:.2;cursor:default}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes.attribute-limit-reached .keywords .keyword .keyword-filter-tag.active{opacity:1}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container{align-items:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container .show-all{padding-left:10px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container .show-all .btn{font-size:16px;padding:13px 18px;border-color:#666}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container .show-all .btn .glyphicon{font-size:14px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .keywords-selection{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes ul.keywords{text-align:center;margin-top:30px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-virtual-designers .virtual-designers{max-width:1290px;margin:0 auto;display:flex;flex-wrap:wrap;justify-content:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-virtual-designers .virtual-designers .designer{max-width:265px;margin-bottom:20px;filter:grayscale(1);opacity:.3;cursor:pointer;transition:all .5s}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-virtual-designers .virtual-designers .designer .avatar{padding:0 50px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-virtual-designers .virtual-designers .designer .designer-name .glyphicon{display:inline-block;color:#5cb85c;font-size:20px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-virtual-designers .virtual-designers .designer.active{filter:grayscale(0);opacity:1}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-virtual-designers .virtual-designers .designer.active .avatar{border-color:#eee}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .industry-section-content{position:relative;z-index:8}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .input-container.industry .tag{background-color:#079307}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon{padding-left:0;padding-right:0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .icon-section-header{padding-left:30px;padding-right:30px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .btn-close-config{transform:translate(-25px, 0)}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons{margin-top:0px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons:after{content:"";display:table;clear:both}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot{float:left;width:59px;height:57px;position:relative;text-align:center;border:1px solid #ddd;margin-right:9px;margin-bottom:8px;border-radius:4px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot .icon{padding:9px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot .remove-icon{display:block;width:100%;height:12px;background:#eee;cursor:pointer;border-radius:0 0 5px 5px;z-index:10;padding:3px 0;position:absolute;bottom:0;left:0;border-top:1px solid #ddd;font-size:11px;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot .remove-icon .glyphicon{top:0;left:0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot .remove-icon:hover{background:#333;border-color:#333;color:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot img,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot svg{max-width:45px !important;max-height:36px;margin:0 auto}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot:not(.empty){cursor:pointer}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot.empty{border:1px dashed #ddd;height:59px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons .icon-slot.empty .remove-icon{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection{display:inline-block;float:left}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection:after{content:"";display:table;clear:both}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection.slots-full .icon-slot{background:#ffd8c2;border-color:#ffd8c2}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection.slots-full .icon-slot .btn-remove-icon-from-slot{background:#e8c5b1;border-color:#e8c5b1}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot{float:left;width:42px;height:42px;position:relative;text-align:center;background:#fff;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s;border:1px solid #aaa;margin-right:26px;border-radius:4px 0 0 4px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot:last-child{margin-right:20px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .icon{padding:8px;height:42px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .glyphicon-search{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .btn-remove-icon-from-slot{position:absolute;z-index:10;display:inline-block;top:100%;top:-1px;left:calc(100% + 1px);background:#f9f9f9;border:1px solid #ccc;border-left:0 none;padding:15px 4px;font-size:11px;border-radius:0 4px 4px 0;cursor:pointer;height:calc(100% + 2px);background:#f1f1f1;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .btn-remove-icon-from-slot:hover{background:#222;border-color:#222;color:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .btn-remove-icon-from-slot:hover .glyphicon{color:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .checkmark{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .remove-icon{display:block;width:100%;height:12px;background:#eee;cursor:pointer;border-radius:0 0 5px 5px;z-index:10;padding:3px 0;position:absolute;bottom:0;left:0;border-top:1px solid #ddd;font-size:11px;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .remove-icon .glyphicon{top:0;left:0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .remove-icon:hover{background:#333;border-color:#333;color:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot img,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot svg{max-width:100% !important;max-height:28px;margin:0 auto}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot:not(.empty) .icon{cursor:pointer}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot.empty{border:1px dashed #aaa;margin-right:10px;border-radius:4px;cursor:pointer}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot.empty .glyphicon-search{display:inline-block;position:absolute;opacity:.15;font-size:26px;left:50%;top:50%;transform:translate(-50%, -50%)}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot.empty .remove-icon{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection{float:none;display:flex;flex-wrap:nowrap;overflow-x:auto;align-items:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot{position:relative;margin:15px 10px;width:120px;height:auto;min-height:118px;float:none;display:flex;align-items:center;flex-wrap:wrap;border:0 none;background:#fff;box-shadow:3px 3px 5px rgba(0,0,0,.08),-2px -2px 4px rgba(0,0,0,.06);border-radius:10px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot.selected .icon{background:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot.empty{box-shadow:none;background:#fff;border-radius:10px;min-width:120px;border:1px dashed #ccc}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .icon{float:none;display:flex;flex-basis:100%;height:auto;padding:15px 28px;background:#f5f5f5;border-radius:8px 8px 0 0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .icon svg{width:60px !important;max-height:60px;max-width:80px !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .btn-remove-icon-from-slot{position:relative;left:0;top:0;height:auto;width:100%;text-align:center;border:0 none;padding:7px 0 10px 0;border-radius:0 0 10px 10px;border-top:1px solid #ddd}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .locked-icons.icon-selection .icon-slot .checkmark{display:none;position:absolute;top:-5px;right:-8px;border-radius:100%;background:#079307;padding:2px 6px;font-size:12px;color:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .slots-bar{position:fixed;width:100%;left:0;bottom:88px;background:rgba(249,249,249,.97);padding-top:5px;padding-bottom:10px;border-top:1px solid #eee;box-shadow:-2px -1px 15px rgba(0,0,0,.1)}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .slots-and-search{display:flex;align-items:center;justify-content:center;padding:0 20px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .extended-parameters{margin-top:10px;text-align:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .extended-parameters .allow-random-icons input{margin-right:5px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container{padding-bottom:150px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-header{text-align:center;margin-bottom:40px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-header h2{margin-top:0;font-weight:400;color:#ddd;font-size:28px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-footer{text-align:center;margin-top:40px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-group{padding:80px 25px;background:linear-gradient(360deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.78) 100%, white 100%)}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-group:first-child{padding-top:40px;padding-bottom:60px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-group:first-child .icon-suggestions-header{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-group.pick-your-own{text-align:center;padding-left:40px;padding-right:40px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-group.pick-your-own .btn-pick-own-icons{font-size:16px;padding:13px 30px 14px 28px;border:1px solid #ddd;box-shadow:1px 1px 3px rgba(0,0,0,.08),0px 0px 6px rgba(0,0,0,.08);color:#000;border-radius:30px;background:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-group.pick-your-own .btn-pick-own-icons .glyphicon{font-size:15px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions-group.pick-your-own .btn-pick-own-icons .inner-wrap{margin-left:9px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions{display:flex;flex-wrap:wrap;gap:30px;align-items:center;justify-content:center;max-width:1230px;margin:0 auto}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .icon,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .placeholder{width:130px;height:130px;padding:25px;border-radius:6px;border:1px solid transparent;background:#f6f6f6}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .icon img,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .icon svg,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .placeholder img,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .placeholder svg{width:100% !important;height:auto !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .icon{cursor:pointer;transition:all .3s}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .icon.selected{border-color:#7165ff;background:#f5f5f5}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .pick-own-icons-container{display:flex;justify-content:center;position:sticky;top:13px;z-index:20;margin-bottom:40px;transition:top .5s}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .pick-own-icons-container.pull-up{top:-50px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .pick-own-icons-container .btn{padding:11px 28px 11px 26px;border:1px solid #ddd;box-shadow:1px 1px 3px rgba(0,0,0,.08),0px 0px 6px rgba(0,0,0,.08);color:#000;border-radius:30px;background:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon .pick-own-icons-container .btn .inner-wrap{margin-left:9px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-final-tour-step{text-align:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-final-tour-step .btn-generate-final-tour{padding:18px 25px 20px 18px;width:100%;max-width:400px;font-size:26px;border-radius:4px;background:linear-gradient(65deg, #5cb85c, #71c471);font-family:"Poppins",sans-serif}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-final-tour-step .btn-generate-final-tour .inner-wrap{padding-left:15px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-final-tour-step .btn-generate-final-tour .glyphicon{font-size:21px;top:1px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .color-spectrum-row{display:grid;gap:22px;grid-template-columns:repeat(3, 1fr);max-width:1220px;margin:0 auto}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .color-spectrum-row .box.color-spectrum{margin:0;float:none;width:auto;border:1px solid transparent;background:rgba(0,0,0,.05);background-color:#f5f5f5;position:relative;padding:8px;transition:all .5s}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .color-spectrum-row .box.color-spectrum.selected{background-color:#fff;opacity:1;box-shadow:3px 3px 7px rgba(0,0,0,.12),-2px -2px 5px rgba(0,0,0,.12)}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .color-spectrum-row .box.color-spectrum.selected .box-title{color:#fff;left:50%;transform:translate(-50%, 50%);bottom:50%;font-size:32px;font-weight:bold}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .color-spectrum-row .box.color-spectrum .box-preview{width:100%;height:140px;margin:0 auto;border-radius:10px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .color-spectrum-row .box.color-spectrum .checkmark{top:-9px;right:-11px;padding:3px 8px;font-size:14px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .color-spectrum-row .box.color-spectrum .box-title{width:auto;margin-top:0;color:rgba(255,255,255,.5);position:absolute;left:33px;bottom:27px;font-size:19px;text-align:left;font-weight:normal;transition:all .5s}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .radio-buttons{text-align:center;margin-bottom:30px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .radio-buttons label{padding-right:20px;font-size:16px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .radio-buttons input{margin-right:6px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .recommended-colors .provide-brand-attributes{text-align:center;padding-top:5px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .recommended-colors .color-spectrum-row{gap:0;grid-template-columns:repeat(1, 1fr);border-radius:10px;overflow:hidden;max-width:400px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .recommended-colors .color-spectrum-row .color-spectrum{cursor:default;padding:0;background:none;box-shadow:none;border:0 none;opacity:1}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .recommended-colors .color-spectrum-row .color-spectrum .spectrum-preview{height:80px;border-radius:0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .recommended-colors .color-spectrum-row .color-spectrum .checkmark{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .recommended-colors .color-spectrum-row .color-spectrum:not(.recommended){display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .recommended-colors .color-spectrum-row .color-spectrum .spectrum-title{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .custom-colors .color-spectrum-row .color-spectrum{transform:scale(0.9)}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-colors .custom-colors .color-spectrum-row .color-spectrum.selected{transform:scale(1)}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .recommended-fonts,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .custom-fonts{display:flex;justify-content:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .font-categories-row{display:flex;flex-wrap:wrap;justify-content:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .font-categories-row:after{content:"";display:table;clear:both}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .font-categories-row .box.font-category{margin:15px 10px;border:1px solid transparent;float:none;width:auto;text-align:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .font-categories-row .box.font-category .font-preview{display:inline-block}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .font-categories-row .box.font-category:not(.selected){background:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .font-categories-row .box.font-category .box-title{margin-top:10px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .radio-buttons{text-align:center;margin-bottom:30px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .radio-buttons label{padding-right:20px;font-size:16px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .radio-buttons input{margin-right:6px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .recommended-fonts .provide-brand-attributes{padding-top:5px;text-align:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .recommended-fonts .font-categories-row .font-category{cursor:default;box-shadow:none;background:#fff;padding:0 10px !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .recommended-fonts .font-categories-row .font-category .checkmark{display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-fonts .recommended-fonts .font-categories-row .font-category:not(.recommended){display:none}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container{display:flex;justify-content:center}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul{display:flex;flex-wrap:wrap;justify-content:center;margin-left:0;padding:0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li{list-style:none;padding:10px 0 8px 0;text-align:center;position:relative;border-radius:10px;margin:10px 8px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li:last-child{margin-right:0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .checkmark{display:none;position:absolute;top:-5px;right:-5px;border-radius:100%;background:#079307;padding:2px 6px;font-size:12px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .checkmark .glyphicon{color:#fff}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .logo-type{color:#000;vertical-align:middle;border-radius:8px;padding:20px 20px 16px;cursor:pointer}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .logo-type .icon{display:block;width:105px;text-align:center;margin:0 auto;margin-bottom:15px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .logo-type .icon img{max-width:100% !important;max-height:49px !important;height:auto !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .logo-type[data-logo-type=name] .icon{padding:5px 0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li.active{background:#fff;box-shadow:3px 3px 7px rgba(0,0,0,.07),-2px -2px 5px rgba(0,0,0,.05)}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li.active .logo-type{background:#fff;border-color:#ccc}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li.active .checkmark{display:block;cursor:pointer}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li.active .btn{visibility:visible;border-radius:0 0 4px 4px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .btn{visibility:hidden;width:100%;text-align:center;padding:6px 12px;border-radius:4px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-logo-types .logo-type-container ul li .btn .glyphicon{padding-right:5px;font-size:12px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-change-text .input-container,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container,.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-industry .input-container{max-width:520px;margin:15px auto}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container{max-width:800px;margin:0 auto;margin-bottom:22px;position:sticky;z-index:999;top:13px;width:100%;left:0}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container .bootstrap-tagsinput{width:calc(100% - 55px) !important;margin-top:0 !important;padding:7px 10px !important;line-height:1.9 !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container .bootstrap-tagsinput .tag{background:#fff;color:#000;border:1px solid #ddd;padding:3px 1px 4px 6px !important}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes .input-container .bootstrap-tagsinput .tag [data-role=remove]{margin-left:3px}
            .page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-brand-attributes ul.keywords{max-width:1100px;margin:0 auto}
            .page-generate .logo-maker-nav-bar .action-buttons,.page-generate .logo-maker-nav-bar .tour-buttons{display:none}
            .page-generate.active-session .logo-maker-nav-bar{position:sticky;top:0;width:100%;left:0;z-index:998}
            .page-generate.active-session .logo-maker-nav-bar .action-buttons{display:block}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column{position:absolute;z-index:99;background:#f9f9f9;background:linear-gradient(90deg, #f9f9f9, #fff);width:100%}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-column{overflow:auto;height:100vh}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section{padding-bottom:250px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section .step-headline{display:none}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section .legend{display:none}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-change-text .input-container.logo-name{margin-top:50px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-change-text .input-container.update-input{display:block}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-industry .input-container.industry{margin-top:42px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-virtual-designers .virtual-designers{margin-top:35px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-colors .color-selection{margin-top:30px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-fonts .font-selection{margin-top:30px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-logo-types .logo-type-container{margin-top:42px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-brand-attributes .input-container{margin-top:-25px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-brand-attributes .keywords .keyword-filter-tag{background:none;border:4px solid transparent}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-brand-attributes .keywords .keyword-filter-tag.active{background:#fff linear-gradient(90deg, rgba(255, 204, 0, 0.35) 58%, rgba(255, 205, 0, 0.5) 100%);border-color:#fff;box-shadow:3px 3px 7px rgba(0,0,0,.07),-2px -2px 5px rgba(0,0,0,.05)}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-icon .slots-bar{bottom:79px}
            .page-generate.active-session .logo-maker-nav-bar .generate-config-column .config-section.section-icon .pick-own-icons-container{margin-top:-25px}
            .page-generate.active-session .virtual-designer-bar,.page-generate.take-tour .virtual-designer-bar,.page-generate.show-config-column .virtual-designer-bar{padding-top:0 !important}
            .page-generate.show-config-column .action-buttons-container{background:linear-gradient(90deg, #f9f9f9, #fff);background:#fff;box-shadow:-2px -1px 15px rgba(0,0,0,.1)}
            .page-generate.show-config-column .logo-maker-nav-bar .generate-config-column{display:block}
            .page-generate #page .header-container{padding:8px 0 0 0}
            .page-generate #page .header-container .header-logo-link img{max-width:26px !important}
            .page-generate #page .header-container,.page-generate #page .hero-section{position:relative;background:#ffeeaf;background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%)}
            .page-generate .footer-container p,.page-generate .footer-container .footer-nav a{color:#000}
            .page-generate .ajax-spinner{width:100%;text-align:left;position:relative;top:10px}
            .page-generate .ajax-spinner>div{width:18px;height:18px;background-color:#ddd;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .page-generate .ajax-spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .page-generate .ajax-spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .page-generate #page .preview-container-tabs:after{content:"";display:table;clear:both}
            .page-generate #page .preview-container-tabs .nav-tabs{float:left;border-bottom:0 none;padding-left:15px}
            .page-generate #page .preview-container-tabs .nav-tabs li.active a{background:none;border:0 none;font-weight:bold}
            .page-generate #page .preview-container-tabs .nav-tabs li a{font-size:16px;color:#333;padding:2px 10px;background:none;border:0 none}
            .page-generate #page .preview-container-tabs .top-link{display:none;padding-left:15px;padding-right:15px;line-height:1;cursor:pointer}
            .page-generate #page .preview-container-tabs .top-link .text{font-size:16px;padding-left:9px}
            .page-generate #page .preview-container-tabs .top-link .glyphicon{font-size:14px;top:0}
            .page-generate #page .preview-container-tabs.affix{display:none;position:fixed;z-index:1000;top:0;left:0;z-index:150;width:100%;padding:10px 0 8px 0;margin-top:0;-webkit-backdrop-filter:blur(18px) saturate(180%);backdrop-filter:blur(18px) saturate(180%);background-color:rgba(255,255,255,.78);box-shadow:2px 2px 3px rgba(0,0,0,.4);text-align:center}
            .page-generate #page .preview-container-tabs.affix .nav-tabs{margin:0 auto}
            .page-generate #page .preview-container-tabs.affix .top-link{display:block;width:100%;padding:8px}
            .page-generate #page .preview-container-tabs.affix-top{-moz-transition:none;-webkit-transition:none;transition:none}
            .page-generate .item.favorite .vote-count{display:none}
            .page-generate .svg-container path{transition:all 1s}
            .page-generate .svg-container .svg-string{display:inline-block;background:#fff;height:470px;overflow:hidden;margin-bottom:20px;margin-right:20px}
            .page-generate .svg-container .svg-string.invisible{display:none}
            .page-generate .svg-container .svg-string svg *{stroke:currentColor;stroke-width:.4;fill-opacity:0;-webkit-transition:fill-opacity 2s;-moz-transition:fill-opacity 2s;transition:fill-opacity 2s}
            .page-generate .svg-container .svg-string svg.finished *{fill-opacity:1}
            .page-generate .preview-container-tabs,.page-generate .preview-outer-container{display:none}
            .page-generate.ajax-finished .preview-container-tabs,.page-generate.ajax-finished .preview-outer-container{display:block}
            .page-generate.ajax-finished .virtual-designer-bar .wrapper,.page-generate.take-tour .virtual-designer-bar .wrapper{margin:0 auto;transform:translate(0, 0)}
            .page-generate.not-started-yet .preview-container-tabs,.page-generate.not-started-yet .preview-outer-container{display:none}
            .page-generate.not-started-yet .action-buttons-container{display:none}
            .page-generate.not-started-yet .logo-maker-nav-bar .sidebar-inner{display:none}
            .page-generate.not-started-yet .virtual-designer-bar .virtual-designer .notification-count{display:none}
            .page-sub{background:#fff}
            .page-sub .content{margin-top:50px;margin-bottom:80px}
            .page-sub h1{margin-top:10px;margin-bottom:30px;font-size:60px;line-height:1}
            .page-sub h1 .main-title{font-weight:bold;display:block;width:100%}
            .page-sub h1 .sub-title{font-size:26px;font-weight:400}
            .page-sub .hero-section{padding-top:75px;padding-bottom:35px}
            .page-how{background:#fff}
            .page-how .header-container{box-shadow:0px 10px 10px rgba(96,69,173,.25)}
            .page-how .hero-section-wrapper{background:#fff linear-gradient(270deg, #7165FF 30.91%, rgba(113, 101, 255, 0.95) 67.28%)}
            .page-how .hero-section-wrapper .hero-section{background:url("/static/img/illustrations/shapes-beside.png") no-repeat center center;padding:105px 0}
            .page-how .hero-section-wrapper .hero-section h1{color:#fff;text-align:center;margin:0}
            .page-how .content{margin-top:0;margin-bottom:0;background:#fff}
            .page-how .content h2{margin-top:110px;font-size:42px;text-align:center}
            .page-how .cta-buttons .btn{margin-left:20px;margin-bottom:20px;padding:16px 50px}
            .page-how .cta-buttons .btn:first-child{margin-left:0}
            .page-how .container-about-us{padding:10px 0 80px 0}
            .page-how .cta-buttons{margin-top:30px;text-align:center}
            .section-how .ordered-process-list{padding:0;margin:0}
            .section-how .process-main-headline{text-align:center;font-size:32px}
            .section-how .process-main-headline .inner-wrap{display:inline-block;position:relative;padding-bottom:18px}
            .section-how .process-main-headline .inner-wrap:after{position:absolute;content:"";height:4px;width:80px;left:50%;margin-left:-40px;bottom:0;background-color:#7165ff}
            .section-how .process-step{margin:0 auto;overflow:hidden}
            .section-how .process-step .process-image .img-wrapper.observe-intersection{right:-50px;-webkit-filter:grayscale(100%);-moz-filter:grayscale(100%);filter:grayscale(100%);opacity:.3}
            .section-how .process-step .process-image .img-wrapper.in-view{right:0;-webkit-filter:grayscale(0%);-moz-filter:grayscale(0%);filter:grayscale(0%);opacity:1}
            .section-how .process-step.reverse .process-image .img-wrapper.observe-intersection{left:-50px;right:0}
            .section-how .process-step.reverse .process-image .img-wrapper.in-view{left:0;right:0}
            .section-how .process-step .progress-count{font-size:85px;font-weight:600;line-height:1.1;color:#7165ff}
            .section-how .process-step .process-header .progress-count{display:none}
            .section-how .process-step .container-full-width .inner-container{padding:90px 0;display:flex;justify-content:center;align-items:center;flex-direction:row}
            .section-how .process-step .process-text{flex:0 0 40%;text-align:left}
            .section-how .process-step .process-text .process-headline{margin-top:0;font-size:32px;line-height:1.3;font-weight:600}
            .section-how .process-step .process-text .process-headline em{font-style:normal;color:#7165ff;font-size:34px;padding-left:5px}
            .section-how .process-step .process-text .inner-wrap p{font-size:18px;margin-bottom:0}
            .section-how .process-step .process-text .process-cta{margin-top:15px}
            .section-how .process-step .process-text .process-cta a{margin-right:26px;margin-bottom:15px}
            .section-how .process-step .process-text .process-cta a .glyphicon{font-size:11px;margin-left:3px;top:1px}
            .section-how .process-step .process-text .process-cta a:last-child{margin-right:0}
            .section-how .process-step .process-image{flex:0 0 40%;padding-top:20px}
            .section-how .process-step .process-image .img-wrapper{position:relative;transition:all .75s ease}
            .section-how .process-step .process-image img{display:block;max-width:100% !important;height:auto !important;margin:0 auto}
            .section-how .process-step.reverse{background:#f9f9f9}
            .section-how .process-step.reverse .container-full-width .inner-container{flex-direction:row-reverse}
            .section-how .process-step .process-progress{flex:0 0 12%;text-align:center}
            .section-how .process-step .process-progress .progress-label{line-height:1;display:block;font-size:19px;margin-bottom:10px;display:none}
            .section-how .process-step.your-business{background:#fff}
            .section-how .process-step.industry{background:#f5f5f9}
            .section-how .process-step.brand-attributes{background:#f5f5f9}
            .section-how .process-step.icons{background:#f5f5f9}
            .section-how .process-step.colors{background:#fff}
            .section-how .process-step.colors .process-headline em,.section-how .process-step.colors .progress-count{color:#ffcc59}
            .section-how .process-step.colors .process-cta a{color:#ffcc59}
            .section-how .process-step.virtual-designers{background:#fff}
            .section-how .process-step.virtual-designers .process-headline em,.section-how .process-step.virtual-designers .progress-count{color:#ff5e48}
            .section-how .process-step.virtual-designers .process-cta a{color:#ff5e48}
            .section-how.process .cta-row{text-align:center;padding-top:65px;padding-bottom:80px}
            .section-how.process .cta-row .btn{padding:18px 30px 18px 30px;font-size:21px;border-radius:35px}
            .section-world-map{padding:100px 0 220px 0;background:#fff url("/static/img/world-map.jpg") no-repeat center 140px;background-size:contain}
            .section-world-map .key-facts.observe-intersection li{transform:scale(0.3)}
            .section-world-map .key-facts.in-view li{transform:scale(1)}
            .section-world-map h2{max-width:700px;margin:0 auto;text-align:center;line-height:1.5}
            .section-world-map .key-facts{display:flex;align-items:center;gap:100px;padding-left:0;max-width:1000px;margin:90px auto 130px auto;list-style:none}
            .section-world-map .key-facts li{flex:1;text-align:center;transition:transform .8s}
            .section-world-map .key-facts li .count{font-size:60px;font-weight:600;display:block;color:#7165ff;line-height:1.3}
            .section-world-map .key-facts li .text{font-size:21px;position:relative;left:-8px;top:-2px;text-transform:capitalize}
            .section-world-map .testimonials{display:flex;gap:60px;padding-left:0;max-width:1200px;margin:0 auto;list-style:none}
            .section-world-map .testimonials li{flex:1;text-align:center;background:rgba(255,255,255,.7);box-shadow:-3px 6px 12px rgba(0,0,0,.08);border-radius:14px}
            .section-world-map .testimonials li .title{font-weight:600;font-size:21px;line-height:1.5;padding:30px 30px 80px 30px;color:#fff;background:#7165ff;border-radius:14px 14px 0 0;text-shadow:1px 2px 2px rgba(0,0,0,.08)}
            .section-world-map .testimonials li:nth-child(1) .title{background:#ffcc59}
            .section-world-map .testimonials li:nth-child(2){margin-top:-50px}
            .section-world-map .testimonials li:nth-child(2) .title{background:#ff5e48}
            .section-world-map .testimonials li:nth-child(3) .title{background:#05c4ce}
            .section-world-map .testimonials li .message{margin:0;padding:25px 30px 10px 30px}
            .section-world-map .testimonials li .author{margin:0;padding:0 40px 30px 40px}
            .section-world-map .testimonials li .author .name{display:block;font-weight:600}
            .section-world-map .testimonials li img{margin-top:-80px;filter:drop-shadow(4px 4px 8px rgba(0, 0, 0, 0.3));max-width:135px !important;height:auto !important}
            .translation-notice{font-size:14px;color:#aaa;margin-bottom:30px}
            #sticky-footer .outer-wrap{background:#f9f9f9 linear-gradient(360deg, #F3F2F9 16.58%, rgba(243, 242, 249, 0) 50.07%)}
            #sticky-footer .inner-wrap{padding-top:90px;background-image:url("/static/img/tetris-bar.jpg");background-repeat:repeat-x;background-position:left top}
            #sticky-footer .inner-wrap .awards-wrap{display:flex;align-items:center;padding:75px 0 60px 0}
            #sticky-footer .inner-wrap .awards-wrap .column{flex:1}
            #sticky-footer .inner-wrap .awards-wrap .column:first-child{border-right:1px solid #dfdfe4;margin-left:-8px;padding-right:40px}
            #sticky-footer .inner-wrap .awards-wrap .column:last-child{text-align:center}
            #sticky-footer .inner-wrap .awards-wrap .column .award{display:flex;margin-bottom:25px}
            #sticky-footer .inner-wrap .awards-wrap .column .award:last-child{margin-bottom:0}
            #sticky-footer .inner-wrap .awards-wrap .column .award .image img{width:auto !important;height:90px !important}
            #sticky-footer .inner-wrap .awards-wrap .column .award .text{padding:15px 0 0 20px}
            #sticky-footer .inner-wrap .awards-wrap .column .award .text .award-title{margin-top:0;margin-bottom:0px;font-size:20px}
            #sticky-footer .inner-wrap .awards-wrap .column .award .text .award-category{margin-bottom:0;font-size:14px}
            #sticky-footer .inner-wrap .awards-wrap .column .stars{padding:14px 28px;background:#fff;border-radius:30px;display:inline-block;line-height:1;margin-bottom:12px}
            #sticky-footer .inner-wrap .awards-wrap .column .stars .glyphicon-star{display:inline-block;margin:0 5px;font-size:23px;color:#ffba53}
            #sticky-footer .inner-wrap .awards-wrap .column .capterra-logo .rating{margin-bottom:12px}
            #sticky-footer .inner-wrap .awards-wrap .column .capterra-logo img{max-width:120px;height:auto !important}
            #sticky-footer .bottom-wrap{padding:30px 0 25px 0;background:#fff}
            .page-generate .header-logo{width:210px !important}
            .page-generate #sticky-footer{display:none}
            .page-generate .hero-section{display:none}
            .page-generate h1{margin-top:10px;margin-bottom:8px;font-size:24px;line-height:1.2}
            .page-generate h1 .main-title{letter-spacing:-0.02em;font-weight:bold;display:block;width:100%;font-size:30px}
            .page-generate .sub-title{font-size:24px;font-family:Georgia;font-style:italic;letter-spacing:0;display:none}
            .page-generate .hero-section{padding-top:5px;padding-bottom:10px}
            .page-generate.soft-backdrop .modal-backdrop.in{opacity:.05}
            .page-generate h1.section-hl{margin-top:40px;margin-bottom:5px}
            .on-off-switch{float:left;position:relative;display:inline-block;width:60px;height:34px;margin:0 2px}
            .on-off-switch.small{width:50px;height:30px}
            .on-off-switch.small .on-off-slider.on:before{transform:translateX(18px)}
            .on-off-switch.small .on-off-slider:before{width:22px;height:22px}
            .on-off-slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;-webkit-transition:.4s;transition:.4s}
            .on-off-slider.on{background-color:#7165ff}
            .on-off-slider.on:before{transform:translateX(26px)}
            .on-off-slider.round{border-radius:34px}
            .on-off-slider.round:before{border-radius:50%}
            .on-off-slider:before{position:absolute;content:"";height:26px;width:26px;left:4px;bottom:4px;background-color:#fff;transition:.4s}
            body.loading-layer-active .page-loading-spinner,body.designer-work-in-progress .page-loading-spinner{width:100%;text-align:center;position:fixed;top:40%;z-index:9999}
            body.loading-layer-active .page-loading-spinner>div,body.designer-work-in-progress .page-loading-spinner>div{width:30px;height:30px;margin-right:20px;background-color:rgba(0,0,0,.2);border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            body.loading-layer-active .page-loading-spinner .bounce1,body.designer-work-in-progress .page-loading-spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            body.loading-layer-active .page-loading-spinner .bounce2,body.designer-work-in-progress .page-loading-spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            body.loading-layer-active .page-loading-spinner-v3,body.designer-work-in-progress .page-loading-spinner-v3{bottom:0;height:auto;width:auto;position:fixed;right:0;left:0;top:0;z-index:9999 !important;display:block !important}
            body.loading-layer-active .page-loading-spinner-v3 .ring,body.designer-work-in-progress .page-loading-spinner-v3 .ring{margin:auto;position:absolute;top:0;left:0;bottom:0;right:0;width:200px;height:200px;transform:scale(0.79)}
            body.loading-layer-active .page-loading-spinner-v3 .ring>div,body.designer-work-in-progress .page-loading-spinner-v3 .ring>div{position:absolute;display:block;width:160px;height:160px;top:20px;left:20px;border-radius:80px;box-shadow:0 6px 0 0 #fff;animation:ring-animation 1s linear infinite}
            body.loading-layer-active .color-palette,body.designer-work-in-progress .color-palette{z-index:139}
            .page-editor,.page-shared{background:#fff}
            .page-editor .clone-image-wrap,.page-shared .clone-image-wrap{z-index:999;position:absolute;top:0;left:0;width:550px;height:501px;overflow:hidden}
            .page-editor .clone-image-wrap .wm,.page-shared .clone-image-wrap .wm{position:absolute;top:0;left:0}
            .page-editor .clone-image-wrap img,.page-shared .clone-image-wrap img{max-width:100%;height:auto !important;margin-top:-9px}
            .page-editor.open-modal-contrast-background .modal-backdrop.in,.page-shared.open-modal-contrast-background .modal-backdrop.in{opacity:0}
            .page-editor #page,.page-shared #page{margin-bottom:100px}
            .page-editor #sticky-footer,.page-shared #sticky-footer{display:none}
            .page-editor .header-container,.page-shared .header-container{display:none;background:#020202;padding:4px 0}
            .page-editor .header-container .header-logo-link,.page-shared .header-container .header-logo-link{filter:invert(1);opacity:.6}
            .page-editor .header-container .nav li a,.page-editor .header-container .glyphicon,.page-shared .header-container .nav li a,.page-shared .header-container .glyphicon{color:#aaa !important}
            .page-editor .header-container .nav li,.page-shared .header-container .nav li{border-color:#444 !important}
            .page-editor .editor-main-content,.page-shared .editor-main-content{padding-bottom:160px}
            .page-editor .section-nav-container,.page-shared .section-nav-container{background:#fff;padding-top:20px;border-bottom:1px solid #ddd}
            .page-editor .section-nav-container.inactive,.page-shared .section-nav-container.inactive{visibility:hidden}
            .page-editor .section-nav-container .container,.page-shared .section-nav-container .container{text-align:center}
            .page-editor .section-nav-container .container .cta-buttons,.page-shared .section-nav-container .container .cta-buttons{padding-top:6px}
            .page-editor .section-nav-container .container .cta-buttons .btn,.page-shared .section-nav-container .container .cta-buttons .btn{padding:10px 25px 10px 25px;margin-right:17px;margin-left:0;margin-bottom:0}
            .page-editor .section-nav-container .container .cta-buttons .btn:last-child,.page-shared .section-nav-container .container .cta-buttons .btn:last-child{margin-right:0}
            .page-editor .section,.page-shared .section{margin-bottom:40px}
            .page-editor .section .section-hl,.page-shared .section .section-hl{margin-top:0;margin-bottom:45px;font-size:30px;position:relative;z-index:1}
            .page-editor .section .section-hl:before,.page-shared .section .section-hl:before{border-top:1px solid #ddd;content:"";margin:0 auto;position:absolute;top:17px;left:0;right:0;bottom:0;width:100%;z-index:-1}
            .page-editor .section .section-hl span,.page-shared .section .section-hl span{background:#f9f9f9;padding:0 30px 0 0}
            .page-editor .section:after,.page-shared .section:after{content:"";display:table;clear:both}
            .page-editor .local-nav,.page-shared .local-nav{margin:0;position:relative;display:none}
            .page-editor .local-nav .fade-out-gradient,.page-shared .local-nav .fade-out-gradient{display:none;position:absolute;bottom:0;left:0;z-index:20;width:40px;height:100%;margin:0}
            .page-editor .local-nav .fade-out-gradient.right,.page-shared .local-nav .fade-out-gradient.right{left:auto;right:0;background:linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, white 60%, white 100%)}
            .page-editor .section-nav,.page-shared .section-nav{display:flex;overflow-x:auto;border:0 none}
            .page-editor .section-nav>li.active a,.page-shared .section-nav>li.active a{background:#f9f9f9;font-weight:bold}
            .page-editor .section-nav>li.active a:hover,.page-editor .section-nav>li.active a:focus,.page-shared .section-nav>li.active a:hover,.page-shared .section-nav>li.active a:focus{background:#f9f9f9}
            .page-editor .section-nav>li a,.page-shared .section-nav>li a{color:#333;font-size:19px;padding:15px 25px 26px 25px}
            .page-editor .section-nav>li a:hover,.page-editor .section-nav>li a:focus,.page-shared .section-nav>li a:hover,.page-shared .section-nav>li a:focus{background:none}
            .page-editor .editor-content-wrapper:after,.page-shared .editor-content-wrapper:after{content:"";display:table;clear:both}
            .page-editor .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-change-text .form-control,.page-shared .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-change-text .form-control{padding:10px 12px}
            .page-editor .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-change-text .btn-change-text,.page-shared .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-change-text .btn-change-text{margin-top:6px;padding:8px 12px}
            .page-editor .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-add-icon .sub-section .locked-icons,.page-shared .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-add-icon .sub-section .locked-icons{display:flex;flex-wrap:nowrap;overflow-x:auto}
            .page-editor .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-add-icon .sub-section .locked-icons .icon-slot,.page-shared .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-add-icon .sub-section .locked-icons .icon-slot{float:none;flex:0 0 auto}
            .page-editor .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-font-settings img:not(.wm),.page-shared .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-font-settings img:not(.wm){max-width:160px !important;margin-bottom:0}
            .page-editor .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-layout-options .sub-section .options-row .variation-options,.page-shared .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-layout-options .sub-section .options-row .variation-options{display:flex;flex-wrap:nowrap;overflow-x:auto}
            .page-editor .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-layout-options .sub-section .options-row .variation-options .option,.page-shared .editor-content-wrapper.editor-mode .sidebar-column.compact-height-layout .config-column .section-layout-options .sub-section .options-row .variation-options .option{float:none;flex:0 0 auto}
            .page-editor .editor-content-wrapper.editor-mode .editor-config-column,.page-shared .editor-content-wrapper.editor-mode .editor-config-column{display:block}
            .page-editor .editor-content-wrapper.editor-mode.show-mutations-nav .mutations-column .items .item .btn-wrap-customize-colors,.page-editor .editor-content-wrapper.editor-mode.show-mutations-nav .mutations-column .items .item .preview-wrap-customize-colors,.page-shared .editor-content-wrapper.editor-mode.show-mutations-nav .mutations-column .items .item .btn-wrap-customize-colors,.page-shared .editor-content-wrapper.editor-mode.show-mutations-nav .mutations-column .items .item .preview-wrap-customize-colors{display:block}
            .page-editor .editor-content-wrapper.editor-mode.show-mutations-nav .mutations-column .items .item .undo-controls,.page-shared .editor-content-wrapper.editor-mode.show-mutations-nav .mutations-column .items .item .undo-controls{display:flex}
            .page-editor .editor-content-wrapper.editor-mode.show-mutations-nav .mutations-nav-column,.page-shared .editor-content-wrapper.editor-mode.show-mutations-nav .mutations-nav-column{display:block}
            .page-editor .editor-content-wrapper.color-mutations-aside .section .mutations-column,.page-shared .editor-content-wrapper.color-mutations-aside .section .mutations-column{width:calc(100% - 50px)}
            .page-editor .editor-content-wrapper.color-mutations-aside .section .mutations-nav-column,.page-shared .editor-content-wrapper.color-mutations-aside .section .mutations-nav-column{width:50px;position:absolute;right:0;top:151px}
            .page-editor .editor-content-wrapper.color-mutations-aside .section .mutations-nav-column .carousel-inner,.page-shared .editor-content-wrapper.color-mutations-aside .section .mutations-nav-column .carousel-inner{display:block}
            .page-editor .editor-content-wrapper.color-mutations-aside .section .mutations-nav-column .carousel-inner .nav-item,.page-shared .editor-content-wrapper.color-mutations-aside .section .mutations-nav-column .carousel-inner .nav-item{margin:5px}
            .page-editor .editor-content-wrapper .sidebar-column,.page-shared .editor-content-wrapper .sidebar-column{position:fixed;z-index:998;width:100%;left:0;bottom:0;background:#f9f9f9}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li{text-align:center;width:100%;padding:15px 26px 25px 26px;margin:0;cursor:pointer;float:none;border-radius:0;display:inline-block;border-left:1px solid #e5e5e5;border-top:1px solid #e5e5e5;background:#fff linear-gradient(0deg, rgba(0, 0, 0, 0.08), transparent)}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li:first-child,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li:first-child{border-left:0 none}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li.active .sub-level,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li.active .sub-level{display:inherit}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li a,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li a{width:100%;background:none;border:0 none;padding:0;position:relative;margin:0;font-size:15px}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li a .glyphicon,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li a .glyphicon{display:none;text-align:center;font-size:20px;padding-bottom:11px}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li.active,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li.active{background:#fff}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li.active a,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs li.active a{font-weight:normal;cursor:pointer}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li{background:#020202;border-bottom:1px solid rgba(255,255,255,.3) !important;color:#fff}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li a,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li a{color:#fff}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li a .glyphicon,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li a .glyphicon{color:rgba(255,255,255,.5)}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li.active,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li.active{background:#fff !important;border-left:0 !important}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li.active a,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li.active a{color:#020202}
            .page-editor .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li.active a .glyphicon,.page-shared .editor-content-wrapper .sidebar-column .sidebar-inner .nav-tabs.dark li.active a .glyphicon{color:#020202}
            .page-editor #editor-sections .section,.page-shared #editor-sections .section{display:none;width:100%;overflow:hidden}
            .page-editor #editor-sections .section:after,.page-shared #editor-sections .section:after{content:"";display:table;clear:both}
            .page-editor #editor-sections .section.active,.page-shared #editor-sections .section.active{display:block}
            .page-editor .section .call-to-action-wrap,.page-shared .section .call-to-action-wrap{float:left;width:100%;margin-top:40px;text-align:center}
            .page-editor .section .call-to-action-wrap .btn,.page-shared .section .call-to-action-wrap .btn{padding:18px 45px;font-size:24px}
            .page-editor .section .call-to-action-wrap .btn .inner-wrap,.page-shared .section .call-to-action-wrap .btn .inner-wrap{padding-left:12px}
            .page-editor .section,.page-shared .section{margin:0 auto;overflow:hidden}
            .page-editor .section:after,.page-shared .section:after{content:"";display:table;clear:both}
            .page-editor .section .cta-container:after,.page-shared .section .cta-container:after{content:"";display:table;clear:both}
            .page-editor .section .cta-container .cta-buttons,.page-shared .section .cta-container .cta-buttons{display:none}
            .page-editor .section .cta-container .color-change-label,.page-shared .section .cta-container .color-change-label{display:inline-block;margin-right:20px}
            .page-editor .section .cta-container .btn-change-colors,.page-shared .section .cta-container .btn-change-colors{display:none;padding:11px 18px 11px 18px;border:0 none;margin-right:2%;width:49%;font-size:21px}
            .page-editor .section .cta-container .btn-change-colors:last-child,.page-shared .section .cta-container .btn-change-colors:last-child{margin-right:0}
            .page-editor .section .cta-container .btn-change-colors .inner-wrap,.page-shared .section .cta-container .btn-change-colors .inner-wrap{margin-left:15px;font-size:20px}
            .page-editor .section .cta-container .btn-change-colors .glyphicon,.page-shared .section .cta-container .btn-change-colors .glyphicon{top:1px;font-size:18px}
            .page-editor .section .cta-container .btn-change-colors.single-color-logo,.page-shared .section .cta-container .btn-change-colors.single-color-logo{width:100%}
            .page-editor .section .mutations-column .items .item .svg-container,.page-shared .section .mutations-column .items .item .svg-container{width:100%;height:100%;line-height:1}
            .page-editor .section .mutations-column,.page-shared .section .mutations-column{float:none;width:100%;min-height:100%;margin-top:0}
            .page-editor .section .mutations-column.pull-up,.page-shared .section .mutations-column.pull-up{margin-top:-65px}
            .page-editor .section .mutations-column.pull-up .undo-controls,.page-editor .section .mutations-column.pull-up .preview-wrap-customize-colors,.page-editor .section .mutations-column.pull-up .btn-wrap-customize-colors,.page-shared .section .mutations-column.pull-up .undo-controls,.page-shared .section .mutations-column.pull-up .preview-wrap-customize-colors,.page-shared .section .mutations-column.pull-up .btn-wrap-customize-colors{top:80px !important}
            .page-editor .section .mutations-column .placeholder-loading,.page-shared .section .mutations-column .placeholder-loading{display:block;width:100%;height:100%;background:#f5f5f5;position:relative}
            .page-editor .section .mutations-column .placeholder-loading .spinner,.page-shared .section .mutations-column .placeholder-loading .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .page-editor .section .mutations-column .placeholder-loading .spinner>div,.page-editor .section .mutations-column .placeholder-loading .spinner>span,.page-shared .section .mutations-column .placeholder-loading .spinner>div,.page-shared .section .mutations-column .placeholder-loading .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .page-editor .section .mutations-column .placeholder-loading .spinner .bounce1,.page-shared .section .mutations-column .placeholder-loading .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .page-editor .section .mutations-column .placeholder-loading .spinner .bounce2,.page-shared .section .mutations-column .placeholder-loading .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .page-editor .section .mutations-column .placeholder-loading img,.page-shared .section .mutations-column .placeholder-loading img{width:100%;max-width:630px !important;height:auto !important;margin-top:23px}
            .page-editor .section .mutations-column .items .item,.page-shared .section .mutations-column .items .item{text-align:center;overflow:hidden;position:relative;width:100%;height:100%;display:none}
            .page-editor .section .mutations-column .items .item.default,.page-shared .section .mutations-column .items .item.default{background:#fff}
            .page-editor .section .mutations-column .items .item.active,.page-shared .section .mutations-column .items .item.active{display:block}
            .page-editor .section .mutations-column .items .item .wm,.page-shared .section .mutations-column .items .item .wm{position:absolute;top:0;left:50%;transform:translate(-50%, 0);padding:1px 13px}
            .page-editor .section .mutations-column .items .item img,.page-editor .section .mutations-column .items .item svg,.page-shared .section .mutations-column .items .item img,.page-shared .section .mutations-column .items .item svg{max-width:630px !important;width:100%;height:auto !important;margin-top:23px;position:relative;z-index:3}
            .page-editor .section .mutations-column .items .item.template-black-and-highlight-hex1 .svg-container,.page-editor .section .mutations-column .items .item.template-black-and-highlight-hex2 .svg-container,.page-shared .section .mutations-column .items .item.template-black-and-highlight-hex1 .svg-container,.page-shared .section .mutations-column .items .item.template-black-and-highlight-hex2 .svg-container{background:radial-gradient(circle, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0) 75%)}
            .page-editor .section .mutations-column .items .item.template-contrast,.page-shared .section .mutations-column .items .item.template-contrast{transition:background-color .75s}
            .page-editor .section .mutations-column .items .item.template-contrast .svg-container,.page-shared .section .mutations-column .items .item.template-contrast .svg-container{background:radial-gradient(circle, rgba(255, 255, 255, 0.12) 0%, rgba(255, 255, 255, 0) 75%)}
            .page-editor .section .mutations-column .items .item .btn-wrap-customize-colors,.page-shared .section .mutations-column .items .item .btn-wrap-customize-colors{position:absolute;top:13px;right:13px;z-index:10;display:none}
            .page-editor .section .mutations-column .items .item .btn-wrap-customize-colors .btn,.page-shared .section .mutations-column .items .item .btn-wrap-customize-colors .btn{padding:6px 12px;border-radius:22px;border:0 none;font-size:14px;box-shadow:0 4px 8px rgba(0,0,0,.3)}
            .page-editor .section .mutations-column .items .item .btn-wrap-customize-colors .btn .glyphicon,.page-shared .section .mutations-column .items .item .btn-wrap-customize-colors .btn .glyphicon{padding-right:7px}
            .page-editor .section .mutations-column .items .item .undo-controls,.page-shared .section .mutations-column .items .item .undo-controls{position:absolute;top:15px;left:50%;transform:translate(-50%, 0);z-index:10;display:none;color:#fff;background:#000;background:#fff;border-radius:25px;width:50px;height:30px;box-shadow:0 4px 8px rgba(0,0,0,.08);align-items:center}
            .page-editor .section .mutations-column .items .item .undo-controls .undo-controls-inner,.page-shared .section .mutations-column .items .item .undo-controls .undo-controls-inner{flex-grow:1;flex-shrink:1;flex-basis:0;display:flex;padding:0}
            .page-editor .section .mutations-column .items .item .undo-controls .step-back,.page-shared .section .mutations-column .items .item .undo-controls .step-back{flex-grow:1;flex-shrink:1;flex-basis:0;line-height:24px;font-size:16px;cursor:pointer;transition:all .15s ease-in-out;display:inline-block;text-rendering:auto;-webkit-font-smoothing:antialiased}
            .page-editor .section .mutations-column .items .item .undo-controls .step-back.disabled,.page-shared .section .mutations-column .items .item .undo-controls .step-back.disabled{cursor:default;opacity:.3}
            .page-editor .section .mutations-column .items .item .undo-controls .step-back .glyphicon,.page-shared .section .mutations-column .items .item .undo-controls .step-back .glyphicon{color:#333;transform:scaleX(-1);padding:8px 15px;top:0}
            .page-editor .section .mutations-column .items .item .preview-wrap-customize-colors,.page-shared .section .mutations-column .items .item .preview-wrap-customize-colors{position:absolute;left:0;top:0;z-index:10;background-color:rgba(0,0,0,.08);padding:12px 15px;border-radius:0 0 8px 0;display:none}
            .page-editor .section .mutations-column .items .item .preview-wrap-customize-colors:after,.page-shared .section .mutations-column .items .item .preview-wrap-customize-colors:after{content:"";display:table;clear:both}
            .page-editor .section .mutations-column .items .item .preview-wrap-customize-colors .switch-label,.page-shared .section .mutations-column .items .item .preview-wrap-customize-colors .switch-label{float:left;display:inline-block;padding:4px 5px;color:#fff;font-size:18px;margin-top:3px;cursor:pointer}
            .page-editor .section .mutations-column .items .item .preview-wrap-customize-colors .switch-label.glyphicon-pencil,.page-shared .section .mutations-column .items .item .preview-wrap-customize-colors .switch-label.glyphicon-pencil{font-size:16px;margin-top:4px}
            .page-editor .section .mutations-column .items .item .preview-wrap-customize-colors .on-off-switch,.page-shared .section .mutations-column .items .item .preview-wrap-customize-colors .on-off-switch{height:30px}
            .page-editor .section .mutations-column .items .item .preview-wrap-customize-colors .on-off-switch .on-off-slider:before,.page-shared .section .mutations-column .items .item .preview-wrap-customize-colors .on-off-switch .on-off-slider:before{height:24px;width:24px;bottom:3px}
            .page-editor .section .mutations-column .items .item .preview-wrap-customize-colors .on-off-slider,.page-shared .section .mutations-column .items .item .preview-wrap-customize-colors .on-off-slider{box-shadow:0 4px 8px rgba(0,0,0,.1)}
            .page-editor .section .mutations-column .items .item .preview-wrap-customize-colors .on-off-slider.on,.page-shared .section .mutations-column .items .item .preview-wrap-customize-colors .on-off-slider.on{background-color:#7165ff !important}
            .page-editor .section .mutations-column .items .item.template-contrast .svg-container.absolute-width,.page-shared .section .mutations-column .items .item.template-contrast .svg-container.absolute-width{width:550px}
            .page-editor .section .mutations-column .items .item.template-contrast.segment-color-mode svg,.page-editor .section .mutations-column .items .item.template-contrast.segment-color-mode .invisible-bbox,.page-shared .section .mutations-column .items .item.template-contrast.segment-color-mode svg,.page-shared .section .mutations-column .items .item.template-contrast.segment-color-mode .invisible-bbox{cursor:url("/static/img/cursor-fill-bucket.cur"),auto}
            .page-editor .section .mutations-column .items .item.template-contrast.segment-color-mode svg path[data-mouseover=true],.page-shared .section .mutations-column .items .item.template-contrast.segment-color-mode svg path[data-mouseover=true]{opacity:.8}
            .page-editor .section .mutations-column .items .item.template-contrast.segment-color-mode.erase-mode svg,.page-editor .section .mutations-column .items .item.template-contrast.segment-color-mode.erase-mode svg .invisible-bbox,.page-shared .section .mutations-column .items .item.template-contrast.segment-color-mode.erase-mode svg,.page-shared .section .mutations-column .items .item.template-contrast.segment-color-mode.erase-mode svg .invisible-bbox{cursor:url("/static/img/cursor-eraser.cur"),auto}
            .page-editor .section .mutations-column .items .item.inversed .light,.page-shared .section .mutations-column .items .item.inversed .light{margin-top:-940px}
            .page-editor .section .mutations-column .items .item.inversed .dark,.page-shared .section .mutations-column .items .item.inversed .dark{margin-top:-20px}
            .page-editor .section .mutations-column #editor-wrapper,.page-shared .section .mutations-column #editor-wrapper{width:75%;margin:0 auto}
            .page-editor .section .mutations-column #editor-wrapper:after,.page-shared .section .mutations-column #editor-wrapper:after{content:"";display:table;clear:both}
            .page-editor .section .mutations-column #editor-wrapper .inner-wrapper,.page-shared .section .mutations-column #editor-wrapper .inner-wrapper{position:relative;overflow:hidden;width:74%;float:left;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}
            .page-editor .section .mutations-column #editor-wrapper .inner-wrapper.absolute-width,.page-shared .section .mutations-column #editor-wrapper .inner-wrapper.absolute-width{width:550px}
            .page-editor .section .mutations-column #editor-wrapper .inner-wrapper .wm,.page-shared .section .mutations-column #editor-wrapper .inner-wrapper .wm{position:absolute;top:0;left:0;padding:1px 13px}
            .page-editor .section .mutations-column #editor-wrapper .inner-wrapper img,.page-editor .section .mutations-column #editor-wrapper .inner-wrapper svg,.page-shared .section .mutations-column #editor-wrapper .inner-wrapper img,.page-shared .section .mutations-column #editor-wrapper .inner-wrapper svg{max-width:100% !important;height:auto !important;position:relative;z-index:3}
            .page-editor .section .mutations-column #editor-wrapper.segment-color-mode svg,.page-shared .section .mutations-column #editor-wrapper.segment-color-mode svg{transition:transform .5s}
            .page-editor .section .mutations-column #editor-wrapper.segment-color-mode svg path,.page-shared .section .mutations-column #editor-wrapper.segment-color-mode svg path{transition:fill .5s;opacity:1}
            .page-editor .section .mutations-column #editor-wrapper.segment-color-mode svg .invisible-bbox,.page-shared .section .mutations-column #editor-wrapper.segment-color-mode svg .invisible-bbox{cursor:pointer}
            .page-editor .section .custom-color-column,.page-shared .section .custom-color-column{width:100%}
            .page-editor .section .custom-color-column h2,.page-shared .section .custom-color-column h2{margin-top:0;margin-bottom:45px;font-size:30px;position:relative;z-index:1;margin-bottom:0;font-size:26px}
            .page-editor .section .custom-color-column h2:before,.page-shared .section .custom-color-column h2:before{border-top:1px solid #ddd;content:"";margin:0 auto;position:absolute;top:17px;left:0;right:0;bottom:0;width:100%;z-index:-1}
            .page-editor .section .custom-color-column h2 span,.page-shared .section .custom-color-column h2 span{background:#f9f9f9;padding:0 30px 0 0}
            .page-editor .section .custom-color-column .explanation,.page-shared .section .custom-color-column .explanation{width:75%;margin:0 auto 15px auto;padding:16px 20px;background:none;border-radius:5px;border:1px solid #555;color:#aaa}
            .page-editor .section .custom-color-column .footer,.page-shared .section .custom-color-column .footer{margin-top:35px}
            .page-editor .section .custom-color-column .footer .btn-purchase,.page-shared .section .custom-color-column .footer .btn-purchase{width:100%;padding:18px 20px;font-size:18px;line-height:1}
            .page-editor .section .custom-color-column .footer .btn-purchase .glyphicon,.page-shared .section .custom-color-column .footer .btn-purchase .glyphicon{margin-right:6px}
            .page-editor .section .mutations-nav-column,.page-shared .section .mutations-nav-column{display:none}
            .page-editor .section .mutations-nav-column:after,.page-shared .section .mutations-nav-column:after{content:"";display:table;clear:both}
            .page-editor .section .mutations-nav-column .carousel,.page-shared .section .mutations-nav-column .carousel{position:relative;width:100%;overflow:hidden;margin:3px 0}
            .page-editor .section .mutations-nav-column .carousel .carousel-inner,.page-shared .section .mutations-nav-column .carousel .carousel-inner{display:flex;align-items:center}
            .page-editor .section .mutations-nav-column .carousel .carousel-inner .nav-item,.page-shared .section .mutations-nav-column .carousel .carousel-inner .nav-item{flex:1;margin:2px}
            .page-editor .section .mutations-nav-column .btn.prev,.page-editor .section .mutations-nav-column .btn.next,.page-shared .section .mutations-nav-column .btn.prev,.page-shared .section .mutations-nav-column .btn.next{width:100%}
            .page-editor .section .mutations-nav-column .btn.prev[disabled=disabled],.page-editor .section .mutations-nav-column .btn.next[disabled=disabled],.page-shared .section .mutations-nav-column .btn.prev[disabled=disabled],.page-shared .section .mutations-nav-column .btn.next[disabled=disabled]{opacity:.25}
            .page-editor .section .mutations-nav-column .nav-item,.page-shared .section .mutations-nav-column .nav-item{position:relative;background:#fff;margin-bottom:10px;text-align:center;cursor:pointer;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}
            .page-editor .section .mutations-nav-column .nav-item .nav-item-inner,.page-shared .section .mutations-nav-column .nav-item .nav-item-inner{padding:18px 15px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}
            .page-editor .section .mutations-nav-column .nav-item.active,.page-shared .section .mutations-nav-column .nav-item.active{position:relative}
            .page-editor .section .mutations-nav-column .nav-item.active .nav-item-inner,.page-shared .section .mutations-nav-column .nav-item.active .nav-item-inner{padding-top:20px;padding-bottom:20px}
            .page-editor .section .mutations-nav-column .nav-item.active .nav-item-inner .half-circles .half-circle,.page-shared .section .mutations-nav-column .nav-item.active .nav-item-inner .half-circles .half-circle{width:13px;height:26px}
            .page-editor .section .mutations-nav-column .nav-item:last-child,.page-shared .section .mutations-nav-column .nav-item:last-child{margin-bottom:0}
            .page-editor .section .mutations-nav-column .nav-item .half-circles,.page-shared .section .mutations-nav-column .nav-item .half-circles{position:relative;left:0;-moz-transform:rotate(45deg);-webkit-transform:rotate(45deg);transform:rotate(45deg);-moz-transition:all .5s;-webkit-transition:all .5s;transition:all .5s}
            .page-editor .section .mutations-nav-column .nav-item .half-circle,.page-shared .section .mutations-nav-column .nav-item .half-circle{background:#9e978e;display:inline-block}
            .page-editor .section .mutations-nav-column .nav-item .half-circle.top,.page-editor .section .mutations-nav-column .nav-item .half-circle.bottom,.page-shared .section .mutations-nav-column .nav-item .half-circle.top,.page-shared .section .mutations-nav-column .nav-item .half-circle.bottom{height:10px;width:20px}
            .page-editor .section .mutations-nav-column .nav-item .half-circle.right,.page-editor .section .mutations-nav-column .nav-item .half-circle.left,.page-shared .section .mutations-nav-column .nav-item .half-circle.right,.page-shared .section .mutations-nav-column .nav-item .half-circle.left{height:20px;width:10px}
            .page-editor .section .mutations-nav-column .nav-item .half-circle.top,.page-shared .section .mutations-nav-column .nav-item .half-circle.top{border-top-left-radius:20px;border-top-right-radius:20px}
            .page-editor .section .mutations-nav-column .nav-item .half-circle.right,.page-shared .section .mutations-nav-column .nav-item .half-circle.right{border-bottom-right-radius:20px;border-top-right-radius:20px;position:relative;left:-1px}
            .page-editor .section .mutations-nav-column .nav-item .half-circle.bottom,.page-shared .section .mutations-nav-column .nav-item .half-circle.bottom{border-bottom-left-radius:20px;border-bottom-right-radius:20px}
            .page-editor .section .mutations-nav-column .nav-item .half-circle.left,.page-shared .section .mutations-nav-column .nav-item .half-circle.left{border-bottom-left-radius:20px;border-top-left-radius:20px}
            .page-editor .section .mutations-nav-column .nav-item .half-circle.rotate,.page-shared .section .mutations-nav-column .nav-item .half-circle.rotate{animation:1s linear infinite rotate;position:relative;top:-10px;transform-origin:50% 100%}
            .page-editor .section .mutations-nav-column .btn-add-custom-color,.page-shared .section .mutations-nav-column .btn-add-custom-color{width:100%;padding-top:20px;padding-bottom:20px}
            .page-editor .section .hex-code-form,.page-shared .section .hex-code-form{margin-top:15px}
            .page-editor .section .hex-code-form .form-control,.page-shared .section .hex-code-form .form-control{float:left;width:auto;display:inline-block;margin-right:5px;padding:10px 15px;height:45px;font-size:18px}
            .page-editor .section .hex-code-form .btn-default,.page-shared .section .hex-code-form .btn-default{padding:11px 15px}
            .page-editor .section .hex-code-form:after,.page-shared .section .hex-code-form:after{content:"";display:table;clear:both}
            .page-editor .section .btn-close-color-mode,.page-shared .section .btn-close-color-mode{display:none}
            .page-editor.color-customize-mode #editor-sections .mutations-nav-column{display:none}
            .page-checkout{background:#fcfcfc}
            .page-checkout #page{margin-bottom:0px}
            .page-checkout #page:after{height:0}
            .page-checkout .checkout-content{margin-top:52px}
            .page-checkout .header-container{padding:0;background:#fff;border-bottom:1px solid #e9e9e9}
            .page-checkout .header-container .sub-header{float:left;width:100%;margin-top:25px}
            .page-checkout .content-nav-wrap{position:relative;padding-top:10px}
            .page-checkout .content-nav-wrap .col-selected-design{position:absolute;right:0;top:-5px}
            .page-checkout .section{padding-top:60px;margin-bottom:40px}
            .page-checkout .section .section-hl{text-align:center;font-size:32px;margin-top:0;margin-bottom:45px;font-weight:bold}
            .page-checkout .section .section-hl.choose-package-hl{margin-bottom:45px;font-size:28px}
            .page-checkout .section .section-hl.testimonials-hl{margin-top:0px !important}
            .page-checkout .section .section-hl.testimonials-hl .review-badge{display:inline-block}
            .page-checkout .section .section-hl.testimonials-hl .review-badge img{max-width:120px;height:auto !important}
            .page-checkout .section .section-hl span{padding:0 35px}
            .page-checkout .section:after{content:"";display:table;clear:both}
            .page-checkout #checkout-step-1{padding-top:30px;margin-bottom:60px}
            .page-checkout #checkout-included-colors{padding:80px 80px 70px 80px;background:#f9f9f9;margin-bottom:0}
            .page-checkout #checkout-included-colors img.wm{display:none}
            .page-checkout #checkout-included-colors .selected-template{border-radius:8px;margin-bottom:12px}
            .page-checkout #checkout-included-colors .selected-template .svg-container{max-width:550px;margin:0 auto}
            .page-checkout #checkout-included-colors .selected-template .svg-container svg{border-radius:8px}
            .page-checkout #checkout-included-colors .svg-container{background:radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 75%)}
            .page-checkout #checkout-included-colors .colors-container:after{content:"";display:table;clear:both}
            .page-checkout #checkout-included-colors .colors-container>.mutation{float:left;width:32.6%;margin-right:1%;margin-bottom:1%;border-radius:8px;border:1px solid transparent}
            .page-checkout #checkout-included-colors .colors-container>.mutation:nth-child(3n+3){margin-right:0}
            .page-checkout #checkout-included-colors .colors-container>.mutation.default{border:1px solid #ddd;background:#fff}
            .page-checkout #checkout-included-colors .colors-container>.mutation .svg-container{max-width:300px;margin:0 auto}
            .page-checkout #checkout-included-colors .colors-container>.mutation .svg-container svg{padding:10px;max-width:100% !important}
            .page-checkout #awards{text-align:center;background:#fff;padding:0;margin:0}
            .page-checkout #awards .wave-deco{background:#f9f9f9}
            .page-checkout #checkout-testimonials{padding:120px 0 0 0;background:#fff}
            .page-checkout #checkout-testimonials .testimonials-container{margin-top:60px}
            .page-checkout #checkout-testimonials .testimonial.panel{background:#f9f9f9}
            .page-checkout .pricing-bullet-list{width:100%;overflow:hidden;margin-top:50px;margin-bottom:0;border-left:0 none;border-right:0 none;border-bottom:0;border-radius:0}
            .payment-methods{width:100%;overflow:hidden}
            .payment-methods .inner-wrap{background:#fff;padding:25px 20px 30px 20px;border-top:1px solid #eee;border-bottom:1px solid #eee}
            .payment-methods .inner-wrap .image-container{height:60px;line-height:60px;filter:grayscale(1)}
            .payment-methods .inner-wrap .image-container img{max-width:100% !important;height:auto !important}
            .payment-methods .col-sm-2{text-align:center}
            .payment-methods .label{color:inherit;font-size:13px;font-weight:normal}
            .page-shared #page{margin-bottom:0}
            .page-shared #page:after{content:"";height:0}
            .page-shared .header-container{display:block;padding:20px 0;text-align:center;border-color:#d5d5d5;background:#e9e9e9}
            .page-shared .header-container .btn{padding:8px 20px}
            .page-shared .editor-content-wrapper .content-column{margin:0 auto;float:none}
            .page-shared .editor-content-wrapper .content-column #editor-sections .section{display:block !important}
            .page-shared .editor-content-wrapper .content-column .mutations-column{width:100%}
            .page-shared .editor-content-wrapper .content-column .mutations-nav-column{margin-left:0;display:block}
            .page-faq{background:#f3f2f9}
            .page-faq .hero-section-wrapper{background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%)}
            .page-faq .hero-section-wrapper .hero-section{background:url("/static/img/illustrations/faq.png") no-repeat right 8% top 22px,url("/static/img/illustrations/tiny-dots.png") no-repeat left 3% top 35px}
            .page-faq .hero-section-wrapper h1{padding-left:30px}
            .page-faq .content{margin-top:0;margin-bottom:0;background:#f9f9f9 linear-gradient(180deg, #F3F2F9 16.58%, rgba(243, 242, 249, 0.2) 50.07%)}
            .page-faq .faq-container{max-width:800px;margin:0 auto 80px auto}
            .page-faq .faq-container h2.sub-headline{margin-top:100px;margin-bottom:25px}
            .page-faq .faq-container h2.sub-headline:first-child{margin-top:60px}
            .page-faq p.sample-download{margin-top:22px;margin-bottom:0}
            .page-faq p.sample-download em{font-style:normal;font-weight:400}
            .page-faq .section-cta{margin-top:25px;margin-left:-5px}
            .page-faq .section-cta .btn{margin:6px 8px;padding:15px 28px;font-size:16px;border:0 none}
            .page-faq .section-sample-buttons{margin-top:5px}
            .page-faq .section-sample-buttons .btn{padding:15px 28px;font-size:14px}
            .page-faq .section-key-points .horizontal-bullet-list{max-width:800px}
            .faq-panel{border:0 none;background:none;box-shadow:none;float:none;width:100%;border-radius:0;margin-bottom:10px}
            .faq-panel .glyphicon-menu-up{display:inline-block}
            .faq-panel .glyphicon-menu-down{display:none}
            .faq-panel .panel-heading{background:#fff}
            .faq-panel .panel-heading .panel-title{font-weight:400}
            .faq-panel.collapsed{margin-top:0}
            .faq-panel.collapsed .panel-body{display:none}
            .faq-panel.collapsed .panel-heading{background:#fff;border-radius:10px}
            .faq-panel.collapsed .panel-heading .glyphicon{color:#7165ff}
            .faq-panel.collapsed .panel-heading .glyphicon-menu-up{display:none}
            .faq-panel.collapsed .panel-heading .glyphicon-menu-down{display:inline-block}
            .faq-panel .panel-heading{color:#7d7e8a;padding-top:24px;padding-bottom:22px;border-top:0 none;border-bottom:1px solid #eae8f2;border-radius:10px 10px 0 0;cursor:pointer}
            .faq-panel .panel-heading .glyphicon{position:absolute;top:45%;right:7px;transform:translate(0, -50%);color:#7165ff;font-weight:600;font-size:19px}
            .faq-panel .panel-title{line-height:1.6;padding-left:15px;padding-right:35px;font-family:inherit;position:relative}
            .faq-panel .panel-body{border:0 none;padding:20px 25px 25px 30px;border-bottom:0 none;background:#fff;border-radius:0 0 10px 10px}
            .faq-panel .panel-body p{padding-left:0px}
            .faq-panel .panel-body ol.checkout-steps{list-style:none;padding-left:0;margin-left:0}
            .faq-panel .panel-body ol.checkout-steps li{list-style:none;padding-left:25px;margin-bottom:10px}
            .faq-panel .panel-body ol.checkout-steps li .glyphicon{margin-left:-25px;padding-right:13px;color:#000;position:relative;top:2px}
            .faq-panel p:last-child{margin-bottom:0}
            .page-contact{background:#f3f2f9}
            .page-contact .header-container{box-shadow:0px 10px 10px rgba(96,69,173,.25)}
            .page-contact .hero-section-wrapper{background:#fff linear-gradient(270deg, #7165FF 30.91%, rgba(113, 101, 255, 0.95) 67.28%)}
            .page-contact .hero-section-wrapper .hero-section{background:url("/static/img/illustrations/flower-shapes-alt.png") no-repeat right 8% bottom,url("/static/img/illustrations/tiny-dots.png") no-repeat left 3% top 35px}
            .page-contact .hero-section-wrapper .hero-section h1{color:#fff;padding-left:30px}
            .page-pricing{background:#fff}
            .page-pricing h1{padding-left:30px}
            .page-pricing .content{margin-bottom:0;margin-top:0;padding-top:25px}
            .page-pricing .section-world-map{margin-top:50px}
            .page-pricing .section-payment-methods{background:#fff}
            .page-pricing .payment-methods{position:relative;margin-bottom:-62px;border-radius:14px;box-shadow:-3px 3px 14px rgba(0,0,0,.15)}
            .page-pricing .payment-methods .col-sm-2{border-right:1px solid #e7e6ed}
            .page-pricing .payment-methods .col-sm-2:last-child{border-right:0 none}
            .page-pricing .payment-methods .inner-wrap{border:0 none}
            .page-pricing .hero-section-wrapper{background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%)}
            .page-pricing .hero-section{background:url("/static/img/illustrations/flower-shapes.png") no-repeat right 8% bottom,url("/static/img/illustrations/tiny-dots.png") no-repeat left 3% top 35px}
            .page-pricing .section-hl{margin-top:0;margin-bottom:45px;font-size:26px;position:relative;z-index:1}
            .page-pricing .section-hl:before{border-top:1px solid #ddd;content:"";margin:0 auto;position:absolute;top:17px;left:0;right:0;bottom:0;width:100%;z-index:-1}
            .page-pricing .section-hl span{background:#f9f9f9;padding:0 30px 0 0}
            .page-pricing .discount-wrap .btn-primary{padding:8px 14px}
            .page-pricing #sticky-footer .section-key-points{padding:130px 0 80px 0;background:#1a2256}
            .page-pricing #sticky-footer .section-key-points .horizontal-bullet-list{grid-template-columns:repeat(4, 1fr);max-width:100%}
            .page-pricing #sticky-footer .section-key-points .horizontal-bullet-list .bullet-item{flex-flow:column;background:none;text-align:center;padding:60px 40px;border-right:1px solid rgba(45,52,117,.8);border-radius:0;box-shadow:none}
            .page-pricing #sticky-footer .section-key-points .horizontal-bullet-list .bullet-item:last-child{border-right:0 none}
            .page-pricing #sticky-footer .section-key-points .horizontal-bullet-list .bullet-item img{max-height:60px !important;background:rgba(113,101,255,.1)}
            .page-pricing #sticky-footer .section-key-points .horizontal-bullet-list .bullet-item span.text{max-width:100%;margin-left:0;margin-top:25px;color:#fff}
            .page-pricing .footnote{margin-top:0;font-size:14px;margin-bottom:6px}
            .page-pricing .pricing-container-row .col-logo{border:0 none !important}
            .page-pricing .special-pricing-trigger{margin-left:3px;margin-right:6px;font-weight:bold}
            .page-pricing .special-pricing-trigger .glyphicon{padding-left:3px;position:relative;top:1px;font-size:12px}
            .page-pricing .special-pricing{margin-bottom:80px;background:#fff;clear:both;margin-top:20px;padding:25px 22px;border:1px solid #e9e9e9;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}
            .page-pricing .special-pricing .header{margin-top:0;font-size:18px;margin-bottom:12px;padding-left:10px}
            .page-pricing .special-pricing .header .glyphicon-ok{font-size:16px;margin-right:13px}
            .page-pricing .special-pricing .col-sm-4{border-right:1px solid #e9e9e9}
            .page-pricing .special-pricing .col-sm-4:last-child{border-right:0 none}
            .page-pricing .special-pricing p{padding-bottom:14px;margin-bottom:18px;padding-left:38px;padding-right:11px}
            .page-pricing .special-pricing p a{text-decoration:underline}
            .page-pricing .special-pricing p a:hover,.page-pricing .special-pricing p a:focus{text-decoration:none}
            .page-pricing .special-pricing p:last-child{margin-bottom:0;padding-bottom:8px}
            .page-pricing .logo-animation-wrap{margin-top:70px}
            .page-pricing.show-vat-notice .pricing-container .vat-notice{display:block}
            .page-pricing .vat-notice,.page-checkout .vat-notice{text-align:center;margin-top:70px;margin-bottom:70px;padding:0 25px}
            .page-pricing .footnote.pricing-footnote,.page-checkout .footnote.pricing-footnote{font-size:14px;max-width:820px;margin:0 auto 25px auto}
            .pricing-bullet-list{text-align:center}
            .pricing-bullet-list .header{margin-top:0;margin-bottom:0;font-size:16px;font-weight:600;color:#fff}
            .pricing-bullet-list .header .glyphicon{display:block;width:100%;margin-bottom:30px}
            .price{position:relative;font-size:42px;border-bottom:0 none;padding:15px 20px 4px 20px;margin-bottom:0;text-align:center}
            .price.medium-size{font-size:32px}
            .price.small-size{font-size:24px}
            .price .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .price .spinner>div,.price .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .price .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .price .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .price .spinner{width:auto;bottom:15px;left:50%;margin-left:-35px}
            .price .spinner>div,.price .spinner>span{background-color:#ddd}
            .price .price-inner-wrap{visibility:hidden}
            .price.ready .price-inner-wrap{visibility:visible}
            .price.ready .spinner{display:none}
            .price.regular-price{background:#f9f9f9}
            .price.regular-price .sep{opacity:.15}
            .price.special-price .sep{opacity:.15}
            .price.special-price .pumpkin{width:96px !important;height:auto !important;position:absolute;bottom:8px;right:8px;z-index:1}
            .price .currency{padding-right:6px}
            .price .amount{font-weight:600}
            .price .decimal{padding-left:3px;top:-12px;font-size:18px}
            .price .parent{position:relative}
            .price .strike{display:inline-block;width:110%;height:1px;background:#aaa;position:absolute;top:50%;left:-7px}
            .price .old-price .amount{font-weight:400}
            .price .regular{display:inline-block;margin-right:18px;color:#aaa}
            .price strong{font-weight:normal}
            .price .glyphicon-arrow-right{font-size:21px;color:#aaa;margin-right:18px;display:inline-block;position:relative;top:-4px}
            .price .sep{color:#666;padding:0 20px 0 12px;position:relative;top:2px}
            .col-lite,.col-business,.col-customized{background:#fff;padding:0 0 20px 0}
            .col-lite .package-title,.col-business .package-title,.col-customized .package-title{font-size:24px;text-align:center;margin-bottom:0px}
            .pricing-container-row{display:grid;width:100%;margin-top:90px;margin-bottom:20px;grid-template-columns:25% repeat(3, 1fr)}
            .pricing-container-row .col-logo{position:relative;margin-right:8px}
            .pricing-container-row .col-logo .svg-container{padding:0;background:radial-gradient(circle, rgba(255, 255, 255, 0.12) 0%, rgba(255, 255, 255, 0) 75%)}
            .pricing-container-row .col-logo .included-colors-link{display:none;position:absolute;bottom:40px;left:50%;padding:8px 16px;transform:translate(-50%, 0)}
            .pricing-container-row .col-lite,.pricing-container-row .col-business,.pricing-container-row .col-customized{grid-template-rows:1fr max-content auto;grid-template-columns:1fr;display:grid;order:initial !important;padding-left:1.25rem;padding-right:1.25rem;grid-gap:1.25rem;border-bottom:0;margin:0 8px}
            .pricing-container-row .col-lite .package-title,.pricing-container-row .col-business .package-title,.pricing-container-row .col-customized .package-title{margin-top:30px}
            .pricing-container-row .col-lite .package-description,.pricing-container-row .col-business .package-description,.pricing-container-row .col-customized .package-description{text-align:center;font-size:18px;line-height:24px;color:#72848e;max-width:200px;margin:0 auto}
            .pricing-container-row .col-lite .one-time,.pricing-container-row .col-business .one-time,.pricing-container-row .col-customized .one-time{margin-top:-10px;text-align:center;font-size:14px;color:#333;font-weight:bold;margin-top:0;margin-bottom:15px}
            .pricing-container-row .col-lite .whats-included,.pricing-container-row .col-business .whats-included,.pricing-container-row .col-customized .whats-included{display:none;text-align:center;font-size:16px;font-weight:bold;margin-top:0}
            .pricing-container-row .col-lite .whats-included a,.pricing-container-row .col-business .whats-included a,.pricing-container-row .col-customized .whats-included a{text-decoration:underline}
            .pricing-container-row .col-lite .whats-included a:hover,.pricing-container-row .col-business .whats-included a:hover,.pricing-container-row .col-customized .whats-included a:hover{text-decoration:none}
            .pricing-container-row .col-lite{grid-column:2;background:#fff linear-gradient(180deg, rgba(255, 94, 72, 0.08), rgba(255, 94, 72, 0.08))}
            .pricing-container-row .col-lite .package-title{color:#ff5e48;opacity:.75}
            .pricing-container-row .col-lite .final-price{color:#ff5e48}
            .pricing-container-row .col-lite .continue-wrap .btn-purchase{color:#ff5e48;background:#fff;border-color:rgba(255,94,72,.4)}
            .pricing-container-row .col-business{grid-column:3;border-left:0;border-right:0;background:#fff linear-gradient(180deg, rgba(5, 196, 206, 0.08), rgba(5, 196, 206, 0.08));border-bottom:0 none}
            .pricing-container-row .col-business .package-title{color:#05c4ce;opacity:.75}
            .pricing-container-row .col-business .final-price{color:#05c4ce}
            .pricing-container-row .col-business .continue-wrap .btn-purchase{color:#05c4ce;background:#fff;border-color:rgba(5,196,206,.4)}
            .pricing-container-row .col-customized{grid-column:4;background:#fff linear-gradient(180deg, rgba(113, 101, 255, 0.08), rgba(113, 101, 255, 0.08))}
            .pricing-container-row .col-customized .package-title{color:#7165ff;opacity:.75}
            .pricing-container-row .col-customized .final-price{color:#7165ff}
            .pricing-container-row .col-customized .continue-wrap .btn-purchase{color:#7165ff;background:#fff;border-color:rgba(113,101,255,.4)}
            .pricing-features-wrap{border-bottom:0 none}
            .pricing-features-row{margin:0;display:grid;grid-template-columns:25% repeat(3, 1fr)}
            .pricing-features-row.table-header{display:none}
            .pricing-features-row.first-row{border-top:1px solid #eee}
            .pricing-features-row.first-row .pricing-features-col{padding-top:20px;padding-bottom:20px}
            .pricing-features-row dd.pricing-features-col{background:none}
            .pricing-features-row dt.pricing-features-col{font-weight:400;text-align:left;display:flex}
            .pricing-features-row .pricing-features-col{font-size:13px;justify-content:center;flex-direction:column;text-align:center;word-break:break-word;padding:12px 15px;border-bottom:1px solid #eee;box-sizing:border-box;position:relative}
            .pricing-features-row .pricing-features-col .glyphicon-ok{font-size:14px;border-radius:100%;padding:8px}
            .pricing-features-row .pricing-features-col .glyphicon-remove{color:#d3d3e6;background:#f4f4f8;font-size:13px;border-radius:100%;padding:9px}
            .pricing-features-row .pricing-features-col:nth-child(2) .glyphicon-ok{color:#ff5e48;background:#fbeaeb}
            .pricing-features-row .pricing-features-col:nth-child(2) a{color:#ff5e48}
            .pricing-features-row .pricing-features-col:nth-child(3) .glyphicon-ok{color:#05c4ce;background:#e6f9fa}
            .pricing-features-row .pricing-features-col:nth-child(3) a{color:#05c4ce}
            .pricing-features-row .pricing-features-col:nth-child(4) .glyphicon-ok{color:#7165ff;background:#edecfd}
            .pricing-features-row .pricing-features-col:nth-child(4) a{color:#7165ff}
            .pricing-features-row .pricing-features-col .included-colors-link{color:#7d7e8a !important}
            .pricing-features-row .pricing-features-col .included-colors-link:link,.pricing-features-row .pricing-features-col .included-colors-link:visited{text-decoration:underline}
            .pricing-features-row .pricing-features-col .included-colors-link:hover,.pricing-features-row .pricing-features-col .included-colors-link:focus{text-decoration:none}
            .pricing-features-row .pricing-features-col .text{padding-left:10px;padding-right:30px}
            .pricing-features-row .pricing-features-col .sub-text{padding-left:10px;padding-right:30px;font-weight:normal}
            .pricing-features-row .pricing-features-col .tooltip-container{position:absolute;right:17px;top:50%;margin-top:-10px}
            .pricing-features-row .pricing-features-col .tooltip-container .icon-info{font-size:18px;color:#ddd;padding:2px;cursor:pointer}
            .pricing-features-row .pricing-features-col .tooltip-container .tooltip-inner{width:220px;max-width:220px;padding:10px 14px 12px 14px}
            .pricing-features-row .pricing-features-col .tooltip-container .tooltip-inner .underlined{text-decoration:underline}
            .pricing-features-row .pricing-features-col:first-child{border-left:0 none}
            .pricing-features-row.sample-package-row a{font-size:14px}
            .pricing-features-row.sample-package-row .pricing-features-col{padding-top:32px;padding-bottom:18px;border-bottom:0}
            .pricing-features-row.sample-package-row dt.pricing-features-col .text{display:none;color:#aaa}
            .col-lite li{background:#fff}
            .col-business{position:relative}
            .col-business .most-popular{text-transform:uppercase;background:#05c4ce;color:#fff;width:100%;display:block;padding:12px 0;font-size:14px;text-align:center;width:100%;width:calc(100% + 2px);margin-left:-1px;border-radius:6px 6px 0 0;transform:translate(0, -100%);position:absolute;font-weight:bold;letter-spacing:1px}
            .col-business .pricing-features li:nth-child(odd){background:#fff}
            .col-business .pricing-features li:nth-child(even){background:#fff}
            .col-business .pricing-features li.last{padding-bottom:30px}
            .col-business .pricing-features li.addon .glyphicon-ok{visibility:hidden}
            .col-business .corner-ribbon{width:200px;background:#e43;position:absolute;top:25px;left:-50px;font-size:15px;text-align:center;line-height:50px;letter-spacing:.02em;color:#fff;transform:rotate(-45deg);-webkit-transform:rotate(-45deg);background:#05c4ce}
            .col-business .corner-ribbon.top-right{top:25px;right:-50px;left:auto;transform:rotate(45deg);-webkit-transform:rotate(45deg)}
            .col-business .corner-ribbon.shadow{box-shadow:0 0 3px rgba(0,0,0,.3)}
            .col-business .final-price{display:block}
            .col-business .old-price{display:inline-block;display:none;font-size:16px;top:-18px;color:#aaa}
            .col-business .save{position:relative;display:inline-block;display:none;font-size:16px;top:-18px;color:#05c4ce;margin-left:15px}
            .col-customized li{background:#fff}
            .col-customized li:last-child{padding-bottom:26px}
            .pricing-features{padding-left:0;margin-top:0;margin-bottom:0;padding-bottom:0}
            .pricing-features li{position:relative;list-style:none;margin-bottom:0;padding:8px 40px 8px 54px}
            .pricing-features li .inline-icon{display:inline-block;padding:0 12px 0 5px;font-size:14px;margin-left:-30px;color:#05c4ce}
            .pricing-features li .icon-info{display:inline-block;position:absolute;right:20px;top:11px;font-size:18px;padding-left:8px;color:#ccc;cursor:pointer}
            .pricing-features li .tooltip .tooltip-inner{padding:10px 13px 15px 13px !important}
            .pricing-features li .blank-item{display:block;padding-bottom:44px;border-bottom:1px dashed #ccc}
            .pricing-features li .blank-item:first-child{padding-bottom:12px}
            .pricing-features li .blank-item:last-child{margin-bottom:30px}
            .pricing-features li.placeholder{padding:13px 25px 15px 25px}
            .pricing-features li:nth-child(odd){background:#fff}
            .pricing-features li.download-sample{background:#fff !important;border-top:1px solid #e9e9e9;padding-top:13px;padding-bottom:13px}
            .pricing-features li.download-sample a{color:#aaa}
            .pricing-features li:first-child{border-top:1px solid #e9e9e9;padding-top:22px}
            .pricing-features li:first-child .icon-info{top:24px}
            .pricing-features li:last-child{-moz-border-radius:0 0 6px 6px;-webkit-border-radius:0 0 6px 6px;border-radius:0 0 6px 6px;border-bottom:1px solid #e9e9e9}
            .pricing-container .vat-notice{display:none;background:#fff;padding:0 10px 0 38px;font-size:13px}
            .pricing-container .vat-notice .asterisk-highlight{margin-left:-15px;font-size:32px;font-weight:bold;top:11px;padding-right:8px;color:#ef853b}
            .pricing-container .vat-notice .halloween-notice .highlight{color:#ef853b}
            .pricing-container .continue-wrap{border-top:0 none;border-bottom:0 none;text-align:center;padding:12px 20px}
            .pricing-container .continue-wrap .btn{display:block;padding:12px 25px;font-size:21px}
            .pricing-container .continue-wrap .btn .glyphicon{font-size:20px}
            .pricing-container .continue-wrap .btn .inner-wrap{margin-left:1px}
            .pricing-container .continue-wrap .btn.btn-deliver-logo-dev{margin-top:5px;background-color:#d9534f !important;border-color:#d9534f !important;color:#fff !important}
            .pricing-container .sujet-wrap{position:relative;overflow:hidden;padding-bottom:2px;margin-bottom:20px}
            .pricing-container .sujet-wrap img{max-width:100%;height:auto;border:1px solid #e9e9e9;-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:6px;background:#fff;padding-top:12px}
            .pricing-container .sujet-wrap .corner-ribbon{width:200px;background:#e43;position:absolute;top:25px;left:-50px;text-align:center;line-height:50px;letter-spacing:.02em;color:#f0f0f0;transform:rotate(-45deg);-webkit-transform:rotate(-45deg)}
            .pricing-container .sujet-wrap .corner-ribbon.shadow{box-shadow:0 0 3px rgba(0,0,0,.3)}
            .pricing-container .sujet-wrap .corner-ribbon.top-left{top:25px;left:-50px;transform:rotate(-45deg);-webkit-transform:rotate(-45deg)}
            .pricing-container .sujet-wrap .corner-ribbon.top-right{top:25px;right:-50px;left:auto;transform:rotate(45deg);-webkit-transform:rotate(45deg)}
            .pricing-container .sujet-wrap .corner-ribbon.bottom-left{top:auto;bottom:25px;left:-50px;transform:rotate(45deg);-webkit-transform:rotate(45deg)}
            .pricing-container .sujet-wrap .corner-ribbon.bottom-right{top:auto;right:-50px;bottom:25px;left:auto;transform:rotate(-45deg);-webkit-transform:rotate(-45deg)}
            .pricing-container .sujet-wrap .corner-ribbon.blue{background:#5bc0de}
            .pricing-container .sujet-wrap .corner-ribbon.green{background:#4cae4c}
            .pricing-container .sujet-wrap .corner-ribbon.orange{background:#eea236}
            .content .container .svg-wrap{width:580px;display:inline-block;height:290px;overflow:hidden;background:#fff;border:1px solid #e9e9e9;-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:6px}
            .content .container .svg-wrap.inverted{position:relative}
            .content .container .svg-wrap.inverted .bg-layer{background:#333;width:540px;height:280px;position:absolute;top:20px;left:20px}
            .content .container .svg-wrap.inverted svg{position:relative;z-index:10}
            .content .container .svg-wrap.inverted svg *{stroke:#fff;stroke-width:1}
            .content .container .svg-wrap.inverted svg.animation-finished *{stroke:#fff;stroke-width:1}
            .content .container .svg-wrap.first{margin-right:25px}
            .content .container .svg-wrap.modified-paths svg{margin-top:-95px}
            .content .container .svg-wrap svg{margin-top:-93px;margin-left:15px}
            .content .container .svg-wrap svg *{stroke:currentColor;stroke-width:.4;fill-opacity:0;-webkit-transition:fill-opacity 2s;-moz-transition:fill-opacity 2s;transition:fill-opacity 2s}
            .content .container .svg-wrap svg.finished *{fill-opacity:1}
            .page-how .content .container .svg-wrap{width:565px}
            .page-how .content .container .svg-wrap svg{margin-left:6px}
            .page-how .content .container .svg-wrap.inverted .bg-layer{width:525px}
            .asterisk-highlight{font-size:28px;position:relative;top:9px;padding-right:5px}
            .hidden-asterix{visibility:hidden}
            .page-terms h2{margin-top:30px}
            .page-affiliate .hero-section-wrapper{background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%)}
            .page-affiliate .hero-section{background:url("/static/img/illustrations/flower-shapes.png") no-repeat right 8% bottom,url("/static/img/illustrations/tiny-dots.png") no-repeat left 3% top 35px}
            .page-affiliate .content{margin-top:0 !important;margin-bottom:0}
            .page-affiliate .section-how .process-step.signup,.page-affiliate .section-how .process-step.get-paid{background:#fff}
            .page-affiliate .section-how .process-step.promote{background:#f9f9f9 linear-gradient(180deg, #F3F2F9 16.58%, rgba(243, 242, 249, 0.2) 50.07%)}
            .page-affiliate .section-how .cta-row{margin-top:30px;background:#f9f9f9 linear-gradient(180deg, #F3F2F9 16.58%, rgba(243, 242, 249, 0.2) 50.07%)}
            .page-affiliate .affiliate-features{padding-left:0;margin-left:20px;margin-bottom:28px}
            .page-affiliate .affiliate-features li{list-style:none;margin-bottom:8px}
            .page-affiliate .affiliate-features li .inline-icon{display:inline-block;padding:0 12px 0 5px;margin-left:-30px;color:#333}
            .page-affiliate .affiliate-features.steps{margin-top:20px;counter-reset:my-counter;margin-left:0}
            .page-affiliate .affiliate-features.steps li{position:relative;padding-left:60px;margin-bottom:40px}
            .page-affiliate .affiliate-features.steps li h2{margin-top:0}
            .page-affiliate .affiliate-features.steps li:before{content:counter(my-counter);counter-increment:my-counter;position:absolute;left:0;top:0;font:bold 50px/1 Sans-Serif;color:#0b1347}
            .page-affiliate .btn-signup{margin-left:58px}
            .page-affiliate .section-hl{margin-bottom:45px;font-size:30px;position:relative;z-index:1}
            .page-affiliate .section-hl:before{border-top:1px solid #ddd;content:"";margin:0 auto;position:absolute;top:17px;left:0;right:0;bottom:0;width:100%;z-index:-1}
            .page-affiliate .section-hl span{background:#f9f9f9;padding:0 30px 0 0}
            .page-voting .cta-top-bar{display:block;padding:20px 0;text-align:center;border-color:#d5d5d5;background:#f1f1f1}
            .page-voting #page .header-container{margin-bottom:20px;padding:50px 0;text-align:center;background:#fff}
            .page-voting #page .header-container .header-logo{width:260px !important}
            .page-voting h1{font-size:36px;text-align:center}
            .page-voting .no-voting{text-align:center;font-size:22px;color:#999;margin-top:70px}
            .page-voting .intro-text{text-align:center;font-size:22px;margin-bottom:50px;display:block}
            .page-voting .logo-options{width:100%}
            .page-voting .vote-count{display:inline-block}
            .page-voting .vote-count:after,.page-voting .vote-count:before{right:100%;top:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none}
            .page-voting .vote-count:after{border-color:rgba(239,239,239,0);border-right-color:#f9f9f9;border-width:4px;margin-top:-4px}
            .page-voting .vote-count:before{border-color:rgba(170,170,170,0);border-right-color:#ccc;border-width:5px;margin-top:-5px}
            .vote-count{display:none;font-style:italic;position:relative;top:1px;background:#f9f9f9;border:1px solid #ccc;padding:7px 10px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;-moz-transition:all .2s;-webkit-transition:all .2s;transition:all .2s}
            .vote-count.animated{-moz-transform:scale(0.8);-webkit-transform:scale(0.8);transform:scale(0.8)}
            .page-privacy .content h1{text-align:left;font-size:32px}
            .page-privacy .content h2{font-size:22px}
            .page-privacy .content h3{font-size:18px}
            .page-thanks .content h2.error-hl{margin-top:30px;font-size:16px}
            .page-thanks .content h3.error-hl{line-height:1.5}
            .page-thanks .content .fake-li{margin-bottom:0}
            .page-maintenance .header-container .dropdown,.page-maintenance .footer-nav{display:none}
            .page-purchases{background:#ffeeaf;background:#fff linear-gradient(270deg, #FFD983 20.91%, rgba(255, 217, 131, 0.87) 87.28%)}
            .page-purchases #page{min-height:100%}
            .page-purchases.loading-layer-active .loading-layer{background-color:#fc0}
            .page-purchases.loading-layer-active.loading-layer-sailing .page-loading-spinner-v3 .ring{display:none}
            .page-purchases.loading-layer-active .loading-container{position:fixed;text-align:center;left:0;top:50%;width:100%;transform:translate(0, -50%);z-index:9999;color:#000}
            .page-purchases.loading-layer-active .loading-container .loading-notice{text-align:center;font-weight:bold;font-size:18px;margin-bottom:0}
            .page-purchases.loading-layer-active .loading-container .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .page-purchases.loading-layer-active .loading-container .spinner>div,.page-purchases.loading-layer-active .loading-container .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .page-purchases.loading-layer-active .loading-container .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .page-purchases.loading-layer-active .loading-container .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .page-purchases.loading-layer-active .loading-container .spinner{margin-top:30px;position:relative;top:auto;bottom:auto}
            .page-purchases.loading-layer-active .loading-container .spinner>div{background-color:#000;margin:0 4px}
            .page-purchases.loading-layer-active .loading-container .hero-illustration{max-width:320px;height:auto !important;margin:30px auto;position:relative;left:-15px}
            .page-purchases .hero-section{background:none}
            .page-purchases #sticky-footer .outer-wrap{display:none}
            .page-purchases #sticky-footer .bottom-wrap{margin-top:160px}
            .page-purchases .login-form .tooltip{white-space:normal}
            .page-purchases .login-form .form-control{padding:13px 15px;height:auto;width:90%;width:calc(100% - 32px);font-size:16px;border:0 none}
            .page-purchases .login-form .alert-danger{background:#a94442;color:#fff;border:0 none;font-size:16px}
            .page-purchases .content{margin-top:0 !important}
            .page-purchases #my-purchases-form p{margin-bottom:10px;position:relative}
            .page-purchases #my-purchases-form .icon-info{position:absolute;top:50%;right:0;transform:translate(0, -50%);font-size:22px;color:#000}
            .page-purchases #my-purchases-form .tooltip{margin-left:12px !important}
            .page-purchases #my-purchases-form .tooltip .tooltip-inner{padding:10px 13px 15px 13px !important;width:220px;max-width:220px}
            .page-purchases #my-purchases-form .btn{margin-left:0 !important;padding-left:25px;padding-right:25px;width:100%}
            .page-purchases .purchase-type-navigation-container{margin-top:20px;margin-bottom:15px}
            .page-purchases .purchase-type-navigation-container .purchase-type-navigation a{color:#000;display:inline-block;margin:0 12px;padding:2px 10px 6px 2px;font-size:16px;text-decoration:none !important}
            .page-purchases .purchase-type-navigation-container .purchase-type-navigation a.active{border-bottom:3px solid #000;font-weight:bold}
            .page-purchases .purchase-logo-container{padding-top:25px}
            .page-purchases .purchase-logo-container[data-purchase-type=type-purchased] .purchase[data-purchase-type=type-purchased]{display:block}
            .page-purchases .purchase-logo-container[data-purchase-type=type-purchased] .purchase[data-purchase-type=type-customized-by-smashinglogo]{display:none}
            .page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-purchased]{display:none}
            .page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-customized-by-smashinglogo]{display:block;max-width:45%;margin-right:50px;display:inline-block}
            .page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-customized-by-smashinglogo] .logo-preview,.page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-customized-by-smashinglogo] .img-wrap,.page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-customized-by-smashinglogo] .options-wrap{width:100%}
            .page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-customized-by-smashinglogo] .logo-preview{padding-bottom:15px}
            .page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-customized-by-smashinglogo] .logo-preview svg{margin-bottom:0;background:#f9f9f9;border:1px solid #ccc}
            .page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-customized-by-smashinglogo] .options-wrap{padding-top:0;border-left:0 none;margin-left:0}
            .page-purchases .purchase-logo-container[data-purchase-type=type-customized-by-smashinglogo] .purchase[data-purchase-type=type-customized-by-smashinglogo] .options-wrap .list-group-item{padding-top:0}
            .page-purchases .purchase-logo-container .purchase{margin-bottom:50px;border:1px solid #eee;background:#fff;-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:20px;box-shadow:3px 3px 15px rgba(0,0,0,.3);margin-bottom:50px}
            .page-purchases .purchase-logo-container .logo-preview{display:inline-block;padding:30px 25px}
            .page-purchases .purchase-logo-container .logo-preview .svg-string svg{max-width:100% !important;height:auto !important;background:#fff;border-radius:8px;margin-bottom:20px}
            .page-purchases .purchase-logo-container .logo-preview .edit-btn-container{text-align:center}
            .page-purchases .purchase-logo-container .logo-preview .edit-btn-container .btn{margin-left:10px;margin-right:10px;margin-bottom:15px;padding-left:28px;padding-right:35px}
            .page-purchases .purchase-logo-container .logo-preview .edit-btn-container .btn .glyphicon{font-size:16px;padding-right:8px}
            .page-purchases .purchase-logo-container .logo-preview .edit-btn-container .change-purchased-colors-container{display:inline-block;margin-right:20px}
            .page-purchases .purchase-logo-container .logo-preview .edit-btn-container .btn-change-purchased-colors{padding:10px 45px;margin-right:0}
            .page-purchases .purchase-logo-container .logo-preview .edit-btn-container .btn-change-purchased-colors .glyphicon{padding-right:0}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap{position:relative;text-align:center}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap.loading .spinner{display:block;width:100%;text-align:center;position:absolute;bottom:20px}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap.loading .spinner>div,.page-purchases .purchase-logo-container .logo-preview .img-wrap.loading .spinner>span{width:18px;height:18px;background-color:#eee;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap.loading .spinner .bounce1{-webkit-animation-delay:-0.32s;animation-delay:-0.32s}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap.loading .spinner .bounce2{-webkit-animation-delay:-0.16s;animation-delay:-0.16s}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap.loading .spinner{bottom:auto;top:240px}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap.loading .color-preview-container{opacity:.15}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap.loading .btn-download{cursor:default}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap .carousel-indicators{margin-left:0;width:auto;top:27px;left:18px}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap .carousel-indicators li{border:0 none;margin-right:4px;background-color:rgba(255,255,255,.65)}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap .carousel-indicators li.active{background-color:#fff}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap .carousel-indicators.light li{background-color:rgba(0,0,0,.15)}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap .carousel-indicators.light li.active{background-color:rgba(0,0,0,.3)}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap.dark{background:#000}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap .carousel{padding-top:15px;padding-bottom:15px}
            .page-purchases .purchase-logo-container .logo-preview .img-wrap .carousel .item{padding:20px 62px}
            .page-purchases .purchase-logo-container .logo-preview .color-preview-container{display:none;margin:0 22px 37px 22px;border:1px solid #ccc;padding:10px 40px 25px 40px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}
            .page-purchases .purchase-logo-container .logo-preview .color-preview-container.active{display:block}
            .page-purchases .purchase-logo-container .logo-preview .color-preview-container .actions{margin-top:5px;text-align:center;position:relative;z-index:1}
            .page-purchases .purchase-logo-container .logo-preview .color-preview-container .actions:before{border-top:1px solid #ccc;content:"";margin:0 auto;position:absolute;top:50%;left:0;right:0;bottom:0;width:95%;z-index:-1}
            .page-purchases .purchase-logo-container .logo-preview .color-preview-container img{display:block;max-width:100%;height:auto}
            .page-purchases .purchase-logo-container .options-wrap{border-left:1px solid #e5e5e5;margin-left:-1px;padding:15px 15px 40px 10px}
            .page-purchases .purchase-logo-container .options-wrap .sub-hl{padding-left:20px;margin-top:35px;margin-bottom:0;letter-spacing:2px;font-weight:bold;text-transform:uppercase;font-size:15px;padding-bottom:15px;border-bottom:1px solid #eee}
            .page-purchases .purchase-logo-container .options-wrap .list-group{margin-top:8px;margin-bottom:8px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item{background-color:transparent;padding:20px 20px 15px 20px;border-radius:0;border-top:0 none;border-left:0 none;border-right:0 none;font-size:15px;border-color:#eee;border:0 none}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.your-plan .icon-info{font-size:16px;top:3px;border-radius:0 4px 4px 0;background:#eee;margin-right:25px;padding:8px 10px;border:1px solid #ccc;color:#000}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.your-plan .icon-info:before{position:relative;top:1px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.your-plan .tooltip.top{white-space:normal}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.your-plan .tooltip.top .tooltip-inner{padding:15px;position:relative}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.your-plan .tooltip.top .tooltip-inner p:last-child{margin-bottom:10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.your-plan .upgrade-section{padding-top:10px;padding-bottom:12px;border-top:1px dashed #ddd;border-bottom:1px dashed #ddd}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.satisfaction-guarantee .btn{padding:8px 15px;margin-right:16px;margin-bottom:10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.satisfaction-guarantee .btn.btn-copy-to-logo-maker-modal{border-right:0 none;border-radius:4px 0 0 4px;margin-right:0}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.satisfaction-guarantee .icon-info{font-size:16px;top:-1px;border-radius:0 4px 4px 0;background:#eee;margin-right:0;padding:11px 10px 9px 10px;border:1px solid #ccc}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.satisfaction-guarantee .tooltip.top{white-space:normal}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.satisfaction-guarantee .tooltip.top .tooltip-inner{padding:15px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.satisfaction-guarantee .tooltip.top .tooltip-inner p:last-child{margin-bottom:10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item h3{font-size:18px;margin-top:0;margin-bottom:10px;font-size:16px;font-weight:normal;padding-bottom:10px;border-bottom:1px solid #e5e5e5;color:#75787b;letter-spacing:.04em}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item:last-child{border-bottom:0 none}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .glyphicon{padding-right:10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item h4{font-size:13px;padding-bottom:2px;text-transform:uppercase;letter-spacing:1px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.toggle-item{padding:0}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .trigger-toggle{cursor:pointer;color:#555;padding:16px 20px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .trigger-toggle .toggle-arrow{float:right;font-size:16px;padding-top:2px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .trigger-toggle.show{background:#f5f5f5;border-bottom:1px solid #eee}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .toggle-target{padding:16px 20px 16px 30px;display:none}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .toggle-target.show{display:block;background:#f5f5f5}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-svg{display:none}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-logo{font-weight:bold}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .btn-download-package{display:inline-block;min-width:147px;margin-top:12px;margin-right:12px;padding:20px 10px 16px 10px;border-color:#e5e5e5;background:#f9f9f9}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .btn-download-package:last-child{margin-right:0}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .btn-download-package .glyphicon{display:block;width:100%;font-size:30px;padding:0;margin-bottom:9px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .btn-download-package .text{display:block;width:100%}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .btn-download-package:hover{background:#eaf2f7;border-color:#abc3d6}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .design-support-notice{font-size:14px;padding-left:10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item p.package-name{color:#000;display:inline-block;position:relative;top:2px;font-size:16px;font-weight:bold;letter-spacing:1px;margin-right:6px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .invoice-container{display:inline-block;margin:8px 10px 8px 10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .is-selected{border:4px solid #7165ff !important}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution label{font-weight:bold;margin-right:10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .custom-dimensions{display:inline-block;margin-left:30px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .input-dimensions{width:60px;margin-right:30px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .transparent-swatch{float:left;display:block;margin-right:10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution h4{margin-top:40px;padding-bottom:8px;border-bottom:1px solid #aaa}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution h4:first-child{margin-top:10px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution img.logo-version{max-width:140px !important;height:auto !important;margin-right:20px;border:1px solid #aaa;background:#ddd;cursor:pointer}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution img.logo-version:hover{outline:1px solid #555;background:#ccc}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.color-info .hex-rect{display:inline-block;margin-right:5px;position:relative;top:2px;width:15px;height:15px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.color-info .color{margin-bottom:5px;padding-bottom:7px;padding-top:2px;border-bottom:1px solid #ccc}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.color-info .color:last-child,.page-purchases .purchase-logo-container .options-wrap .list-group-item.color-info .color+.color{border-bottom:0 none}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.color-info .headline-new{margin-top:25px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.change-color .toggle-target:after{content:"";display:block;clear:both}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.change-color .toggle-target .selectric-wrapper{margin-bottom:5px;max-width:150px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.change-color .toggle-target .selectric-wrapper .selectric{background:#fff}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.change-color .toggle-target .selectric-items li span{display:inline-block;width:30px;height:30px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.change-color .toggle-target .swatches{display:none;float:left;width:100%;border:1px solid #ddd;padding:15px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.change-color .toggle-target .swatches.active{display:block}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .toggle-target .swatches .color-palette-swatch{border:1px solid #aaa;width:33px;height:33px;margin-right:8px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .toggle-target .swatches .color-palette-swatch:hover{-webkit-transform:scale(1.3);-moz-transform:scale(1.3);transform:scale(1.3)}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .toggle-target .swatches:after{content:"";display:block;clear:both}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .toggle-target .submit-wrap{margin-top:25px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.download-resolution .toggle-target .submit-wrap a{margin-right:15px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .customize-form textarea{height:120px;margin-top:7px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .customize-form textarea.error{border:1px solid red}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .customize-form .notice{padding-left:15px;font-size:13px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item.additional-colors{margin-bottom:20px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .btn-upgrade-package{padding:6px 20px 6px 14px;border-right:0 none;border-radius:4px 0 0 4px}
            .page-purchases .purchase-logo-container .options-wrap .list-group-item .btn-upgrade-package .glyphicon{padding-right:6px}
            .page-purchases .website-row{display:none;margin-bottom:50px;border:1px solid #eee;background:#fff;-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:20px;box-shadow:3px 3px 15px rgba(0,0,0,.3);padding:35px 25px 40px 25px;margin-bottom:50px}
            .page-purchases .website-row .text-column{padding:30px}
            .page-purchases .website-row .text-column h2{margin-top:0;font-size:24px;margin-bottom:25px;padding-bottom:5px;border-bottom:3px solid #ccc;display:inline-block}
            .page-purchases .website-row .text-column h2 a{color:#000;text-decoration:none}
            .page-purchases .website-row .text-column h2 a:hover{color:#666}
            .page-purchases .website-row .text-column .feature-list{padding:0 0 0 3px;margin:25px 0 0 0}
            .page-purchases .website-row .text-column .feature-list li{list-style:none;margin-bottom:8px}
            .page-purchases .website-row .text-column .feature-list li .text{padding-left:10px}
            .page-purchases .website-row .text-column .feature-list li .glyphicon{color:#000}
            .page-purchases .website-row .text-column .cta-wrapper{margin-top:40px}
            .page-purchases .website-row .text-column .cta-wrapper .btn{margin-right:15px;margin-bottom:15px}
            .page-purchases .website-row .text-column .cta-wrapper .btn:last-child{margin-right:0}
            .page-purchases .website-row .text-column .cta-wrapper .btn-mozello{font-size:18px;padding:19px 22px;min-width:230px;border-radius:31px;color:#fff}
            .page-purchases .website-row .text-column .cta-wrapper .btn-mozello.green{background-color:#4cb963}
            .page-purchases .website-row .text-column .cta-wrapper .btn-mozello.red{background-color:#d7263d}
            .page-purchases .website-row img{max-width:100% !important;height:auto !important;border-radius:15px}
            .envision-cta-footer{position:fixed;bottom:0;left:0;z-index:1020;width:100%;padding:0;text-align:center;background:#fff;display:flex;justify-content:center;box-shadow:0px -8px 10px rgba(0,0,0,.1)}
            .envision-cta-footer .btn{flex:1;font-size:19px;padding:14px 18px;border-radius:0;border:0 none;box-shadow:none}
            .envision-cta-footer .btn .glyphicon{font-size:15px;display:none}
            .envision-cta-footer .btn .inner-wrap{padding-left:10px}
            .page-variations.initial-page-setup-in-progress #quick-edit-section{opacity:0}
            .page-variations.expanded-history #quick-edit-section .variations-canvas .variation-action-buttons,.page-variations.expanded-browse #quick-edit-section .variations-canvas .variation-action-buttons{display:none}
            .page-variations.expanded-history #quick-edit-section .variation-history{display:block}
            .page-variations.expanded-browse #quick-edit-section .variation-browse{display:block}
            .page-variations #quick-edit-section .variations-header{background:#fff linear-gradient(0deg, rgba(0, 0, 0, 0.05), transparent);background:#fcfcfc;padding:14px 0;text-align:center;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .page-variations #quick-edit-section .variations-header .switch-modes{margin:0;display:inline-block;background:none;padding:0}
            .page-variations #quick-edit-section .variations-header .switch-modes .mode{padding:4px 2px 6px 2px;line-height:1;margin:8px 12px;border-radius:0}
            .page-variations #quick-edit-section .variations-header .switch-modes .mode.active{background:none;box-shadow:none;font-weight:bold;font-weight:bold;border-bottom:2px solid #333}
            .page-variations #quick-edit-section .variations-header .switch-modes .mode:last-child{border-right:0 none}
            .page-variations #quick-edit-section .variations-canvas{background:#fff radial-gradient(circle, rgba(255, 255, 255, 0.15) 20%, rgba(255, 255, 255, 0.05) 75%);position:relative;width:100%;height:100%;min-height:200px}
            .page-variations #quick-edit-section .variations-canvas .variation-canvas-inner-wrap{position:absolute;z-index:10;width:100%;max-width:840px;left:50%;top:50%;transform:translate(-50%, -50%)}
            .page-variations #quick-edit-section .variations-canvas .variation-canvas-inner-wrap>.item .mutations-container .mutation{display:none;background:none !important}
            .page-variations #quick-edit-section .variations-canvas .variation-canvas-inner-wrap>.item .mutations-container .mutation.active,.page-variations #quick-edit-section .variations-canvas .variation-canvas-inner-wrap>.item .mutations-container .mutation[data-random-template=true]{display:block}
            .page-variations #quick-edit-section .variations-canvas .variation-canvas-inner-wrap>.item .mutations-container .mutation img.wm{display:none}
            .page-variations #quick-edit-section .variations-canvas .variation-canvas-inner-wrap svg{position:relative;top:0 !important;left:0 !important;width:100% !important;height:auto !important;transform:none !important}
            .page-variations #quick-edit-section .variations-canvas .variation-filter{position:absolute;width:100%;left:0;top:0;z-index:20}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-inner{background:#fff;padding:5px 8px;min-height:98px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced{padding:20px 10px 0 10px;text-align:center;display:none;position:relative;z-index:10}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced.active{display:block}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=font] #select-font-switch{max-width:220px;padding:7px 45px 7px 16px;font-size:16px;border:1px solid #000;border-radius:4px;-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:transparent;background-image:linear-gradient(45deg, transparent 50%, gray 50%),linear-gradient(135deg, gray 50%, transparent 50%);background-position:calc(100% - 20px) calc(1em + 1px),calc(100% - 15px) calc(1em + 1px),calc(100% - 2.5em) .25em;background-size:5px 5px,5px 5px,1px 1.5em;background-repeat:no-repeat}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=font] #select-font-switch option{background:#fff;color:#000}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=layout] .additional-icon-variation-options{display:none;justify-content:center}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=layout] .additional-icon-variation-options .inner-container{display:flex;gap:12px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=layout] .additional-icon-variation-options .inner-container .option{padding:8px 15px;line-height:1;border:1px solid #ddd;border-radius:3px;cursor:pointer}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=layout] .additional-icon-variation-options .inner-container .option.active{cursor:default}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=layout] .additional-icon-variation-options .inner-container .option:not(.active){background-color:transparent !important}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text]{padding:20px 35px 15px 25px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .letter-spacing{display:flex;align-items:center;gap:30px;width:100%;max-width:380px;margin:0 auto}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .letter-spacing-label{line-height:1;width:30px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .letter-spacing-label svg{max-width:20px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .slider-container{flex:1}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .slider-container #primary-letter-spacing-slider{height:16px;border:0 none;border-radius:6px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .slider-container #primary-letter-spacing-slider .noUi-base{background-color:#000;border-radius:5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .slider-container #primary-letter-spacing-slider .noUi-origin{background:#f9f9f9;border-radius:5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .slider-container #primary-letter-spacing-slider .noUi-handle{height:26px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .slider-container #primary-letter-spacing-slider .noUi-handle:after,.page-variations #quick-edit-section .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .slider-container #primary-letter-spacing-slider .noUi-handle:before{background:#aaa}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container{display:none;align-items:center;justify-content:center}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container.active{display:block}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections-header{display:flex;justify-content:center;align-items:center;margin-top:-21px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections-header .switch-modes{border:1px solid #ddd;background:#fff linear-gradient(0deg, rgba(0, 0, 0, 0.08), transparent);padding:0;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections-header .switch-modes .mode{padding:6px 12px 6px 12px;border-right:1px solid #ddd;border-radius:0;margin:0;font-size:13px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections-header .switch-modes .mode.icon-view{font-size:15px;padding-top:5px;padding-bottom:3px;padding-left:14px;padding-right:14px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections-header .switch-modes .mode.previously-used .glyphicon{transform:scaleX(-1)}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections-header .switch-modes .mode:last-child{border-right:0 none}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections-header .switch-modes .mode.active{background:#fff;box-shadow:none;font-weight:bold;border-color:#ccc}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections{display:flex;justify-content:center;align-items:center}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections .filter-section{display:none;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections .filter-section.active{display:flex}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections .filter-section .box{background:#fff}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container .filter-sections .filter-section .box.selected{box-shadow:none;background:#f9f9f9}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=color] .filter-section[data-filter-section=color-previous]{padding:12px 10px;gap:20px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=color] .filter-section[data-filter-section=color-previous] .box{display:flex;padding:7px 9px;border-radius:9px;background:#efefef;margin:0;width:auto}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=color] .filter-section[data-filter-section=color-previous] .box .stripe{display:inline-block;width:24px;height:33px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=color] .filter-section[data-filter-section=color-previous] .box .stripe:first-child:last-child{border-radius:5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=color] .filter-section[data-filter-section=color-previous] .box .stripe:first-child{border-radius:5px 0 0 5px;width:40px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=color] .filter-section[data-filter-section=color-previous] .box .stripe:last-child{border-radius:0 5px 5px 0}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=color] .filter-section[data-filter-section=color-previous] .box.gradient .stripe:first-child{width:40px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=color] .filter-section[data-filter-section=color-previous] .box.gradient .stripe{width:40px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .box-row .box .box-preview .icon{line-height:1;padding:0}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .box-row .box .box-preview .icon img{max-height:17px !important}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .font-tags-row .box{font-size:14px;padding:10px 14px 9px 14px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .font-categories-row .box{padding:8px 15px;margin-right:10px;margin-left:10px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .font-categories-row .box .font-preview{display:inline-block;position:relative;top:-1px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .font-categories-row .box .font-category-title{display:inline-block;font-weight:normal;width:auto;margin:0 0 0 10px;font-family:"Poppins",sans-serif}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .filter-section[data-filter-section=font-previous]{padding:13px 10px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .filter-section[data-filter-section=font-previous] .box{width:210px;padding:11px 15px;background:none;border:1px solid #efefef;border-radius:6px;margin-right:10px;line-height:1}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=font] .filter-section[data-filter-section=font-previous] .box img{max-width:100%}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=text] .filter-section{padding:15px 10px 15px 10px;gap:10px;width:100%;max-width:400px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=text] .form-control{height:auto;padding:8px 14px;font-size:16px;box-shadow:none;color:#000}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=text] .btn{padding:10px 18px;background:#fff linear-gradient(0deg, rgba(0, 0, 0, 0.08), transparent)}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=text] .btn .inner-wrap{display:none}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section{padding:17px 10px 10px 10px;gap:15px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-previous]{padding:8px 10px 0 10px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-previous] .box{width:60px;padding:6px 6px 0 6px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-previous] .box svg{max-width:100%}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size]{padding:30px 25px 5px 25px;width:100%}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size] .icon-size{width:100%;max-width:340px;margin:0 auto}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size] .slider-container{width:100%}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size] .slider-container #icon-size-slider{width:100%;height:16px;border:0 none;border-radius:6px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size] .slider-container #icon-size-slider .noUi-base{background-color:#000;border-radius:5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size] .slider-container #icon-size-slider .noUi-origin{background:#f5f5f5;border-radius:5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size] .slider-container #icon-size-slider .noUi-handle{height:26px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size] .slider-container #icon-size-slider .noUi-handle:after,.page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-size] .slider-container #icon-size-slider .noUi-handle:before{background:#aaa}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap]{padding:30px 25px 5px 25px;width:100%}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap] .icon-gap{width:100%;max-width:340px;margin:0 auto}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap] .slider-container{width:100%}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap] .slider-container #icon-gap-slider{width:100%;height:16px;border:0 none;border-radius:6px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap] .slider-container #icon-gap-slider .noUi-base{background-color:#000;border-radius:5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap] .slider-container #icon-gap-slider .noUi-origin{background:#f5f5f5;border-radius:5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap] .slider-container #icon-gap-slider .noUi-handle{height:26px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap] .slider-container #icon-gap-slider .noUi-handle:after,.page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .filter-section[data-filter-section=icon-gap] .slider-container #icon-gap-slider .noUi-handle:before{background:#aaa}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .btn{padding:7px 22px 7px 16px;background:#fff linear-gradient(0deg, rgba(0, 0, 0, 0.08), transparent)}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .btn .inner-wrap{padding-left:10px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=icon] .btn.btn-remove-icon{background:#efefef;margin-left:15px;display:none}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text]{align-items:center}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text]>.box{padding:0 20px;margin-right:0}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text] .text-variation-options .box-row{padding:0}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text] .text-variation-options .option{padding:0;margin:0 8px;width:60px;height:40px;background-image:url("/static/img/text-layout-sprites.gif");background-repeat:no-repeat;opacity:.25}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text] .text-variation-options .option.active{background-color:#f5f5f5;opacity:1;cursor:default}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text] .text-variation-options .option[data-variation-identifier=one-line]{background-position:-4px -5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text] .text-variation-options .option[data-variation-identifier=stacked-fakeSlogan]{background-position:-93px -9px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text] .text-variation-options .option[data-variation-identifier=stacked-primaryDouble]{background-position:-184px -4px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-text] .text-variation-options .option[data-variation-identifier=stacked-primaryDoubleEqualWidth]{background-position:-274px -4px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-icon]{align-items:center}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-icon]>.box{padding:0 20px;margin-right:0}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-icon] .icon-variation-options .box-row{padding:0}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-icon] .icon-variation-options .option{padding:0;margin:0 8px;width:60px;height:40px;background-image:url("/static/img/icon-layout-sprites.png");background-repeat:no-repeat;opacity:.25}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-icon] .icon-variation-options .option.active{background-color:#f5f5f5;opacity:1;cursor:default}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-icon] .icon-variation-options .option[data-variation-identifier=standalone-above]{background-position:-8px -5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-icon] .icon-variation-options .option[data-variation-identifier=standalone-beside]{background-position:-87px -5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-icon] .icon-variation-options .option[data-variation-identifier=icon-in-text]{background-position:-163px -5px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-container]{align-items:center}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-container]>.box{padding:0;margin-right:0}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-container] .container-variation-options .box-row{padding:0}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-container] .container-variation-options .option{padding:6px 15px;margin:0 8px;width:60px;height:42px;background-repeat:no-repeat;opacity:.2;text-align:center}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-container] .container-variation-options .option img{max-height:22px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .filter-container[data-filter-container=layout] .filter-section[data-filter-section=layout-container] .container-variation-options .option.active{background-color:#f5f5f5;opacity:1;cursor:default}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .box-row.flex{width:auto;padding:15px 10px}
            .page-variations #quick-edit-section .variations-canvas .variation-filter .box-row.flex .box:last-child{margin-right:0}
            .page-variations #quick-edit-section .variations-canvas .variation-actions{position:absolute;left:50%;bottom:6%;transform:translate(-50%, 0);width:100%;z-index:20;max-width:550px}
            .page-variations #quick-edit-section .variations-canvas .variation-action-buttons{display:grid;width:100%;grid-auto-flow:column;grid-auto-columns:1fr}
            .page-variations #quick-edit-section .variations-canvas .variation-action-button{background:none;border:0 none;box-shadow:none;color:rgba(255,255,255,.7);text-align:center;padding:8px 40px;font-size:16px;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .page-variations #quick-edit-section .variations-canvas .variation-action-button .glyphicon{display:block;margin-bottom:13px;font-size:30px}
            .page-variations #quick-edit-section .variations-canvas .variation-action-button .text{opacity:.85}
            .page-variations #quick-edit-section .variations-canvas .variation-action-button.undo .glyphicon{transform:scaleX(-1)}
            .page-variations #quick-edit-section .variations-canvas .variation-action-button.browse{border-left:1px solid rgba(255,255,255,.2);border-right:1px solid rgba(255,255,255,.2)}
            .page-variations #quick-edit-section[data-active-variation-type=text] .variations-canvas .variation-actions .variation-action-button.shuffle,.page-variations #quick-edit-section[data-active-variation-type=text] .variations-canvas .variation-actions .variation-action-button.browse,.page-variations #quick-edit-section[data-active-variation-sub-type=layout-text] .variations-canvas .variation-actions .variation-action-button.shuffle,.page-variations #quick-edit-section[data-active-variation-sub-type=layout-text] .variations-canvas .variation-actions .variation-action-button.browse,.page-variations #quick-edit-section[data-active-variation-sub-type=layout-icon] .variations-canvas .variation-actions .variation-action-button.shuffle,.page-variations #quick-edit-section[data-active-variation-sub-type=layout-icon] .variations-canvas .variation-actions .variation-action-button.browse,.page-variations #quick-edit-section[data-active-variation-sub-type=color-previous] .variations-canvas .variation-actions .variation-action-button.shuffle,.page-variations #quick-edit-section[data-active-variation-sub-type=color-previous] .variations-canvas .variation-actions .variation-action-button.browse,.page-variations #quick-edit-section[data-active-variation-sub-type=font-previous] .variations-canvas .variation-actions .variation-action-button.shuffle,.page-variations #quick-edit-section[data-active-variation-sub-type=font-previous] .variations-canvas .variation-actions .variation-action-button.browse,.page-variations #quick-edit-section[data-active-variation-sub-type=icon-previous] .variations-canvas .variation-actions .variation-action-button.shuffle,.page-variations #quick-edit-section[data-active-variation-sub-type=icon-previous] .variations-canvas .variation-actions .variation-action-button.browse{display:none}
            .page-variations #quick-edit-section[data-active-variation-sub-type=text-slogan] .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=text] .letter-spacing{display:none}
            .page-variations #quick-edit-section[data-active-variation-sub-type=layout-icon] .variations-canvas .variation-filter .variation-filter-advanced .filter-container-advanced[data-filter-container-advanced=layout] .additional-icon-variation-options{display:flex}
            .page-variations #quick-edit-section .variation-history,.page-variations #quick-edit-section .variation-browse{display:none;position:absolute;bottom:0;z-index:1000;background:#fff;padding:15px 10px;width:100%;text-align:right}
            .page-variations #quick-edit-section .variation-history-wrapper,.page-variations #quick-edit-section .variation-browse-wrapper{width:100%}
            .page-variations #quick-edit-section .variation-history-wrapper .mutation,.page-variations #quick-edit-section .variation-browse-wrapper .mutation{background:#fff radial-gradient(circle, rgba(255, 255, 255, 0.15) 20%, rgba(255, 255, 255, 0.05) 75%)}
            .page-variations #quick-edit-section .variation-history-wrapper .horizontal-logo-wrapper img.wm,.page-variations #quick-edit-section .variation-browse-wrapper .horizontal-logo-wrapper img.wm{display:none}
            .page-variations #quick-edit-section .btn-close-variation-history,.page-variations #quick-edit-section .btn-close-variation-browse{font-size:16px;position:absolute;top:-23px;right:6px;line-height:1;padding:8px 9px;z-index:99999;border-radius:100%;box-shadow:-3px -3px 4px rgba(0,0,0,.15)}
            .page-variations #quick-edit-section .btn-close-variation-history .text,.page-variations #quick-edit-section .btn-close-variation-browse .text{display:none}
            .page-variations #quick-edit-section .btn-close-variation-history .glyphicon,.page-variations #quick-edit-section .btn-close-variation-browse .glyphicon{font-size:16px}
            .page-preview{background:#fff}
            .page-preview .preview-logo-source{display:none}
            .page-editor,.page-shared{background:#fff}
            .page-editor #page,.page-shared #page{margin-bottom:0}
            .page-editor #page:after,.page-shared #page:after{height:0}
            .page-editor .fullscreen-section .fullscreen-headline,.page-shared .fullscreen-section .fullscreen-headline{margin-top:0;margin-bottom:40px;font-size:34px;text-align:center}
            .page-editor .fullscreen-section.cta,.page-shared .fullscreen-section.cta{background:#2b2b2b;padding:14px 10px;border:0 none;z-index:99;left:0;bottom:0;width:100%}
            .page-editor .fullscreen-section.cta .cta-container,.page-shared .fullscreen-section.cta .cta-container{text-align:center}
            .page-editor .fullscreen-section.cta .btn,.page-shared .fullscreen-section.cta .btn{float:none;background:none;border-color:rgba(255,255,255,.35);color:#fff;margin:0 10px}
            .page-editor .fullscreen-section.cta .btn .glyphicon,.page-shared .fullscreen-section.cta .btn .glyphicon{color:rgba(255,255,255,.5)}
            .page-editor .fullscreen-section.cta .btn.btn-purchase,.page-shared .fullscreen-section.cta .btn.btn-purchase{background:#fff;color:#2b2b2b}
            .page-editor .fullscreen-section.cta .btn.btn-purchase .glyphicon,.page-shared .fullscreen-section.cta .btn.btn-purchase .glyphicon{color:#2b2b2b}
            .page-editor .fullscreen-section.preview,.page-shared .fullscreen-section.preview{background:#fff;position:relative}
            .page-editor .fullscreen-section.preview .color-mutation-grid,.page-shared .fullscreen-section.preview .color-mutation-grid{display:none}
            .page-editor .fullscreen-section.variations,.page-shared .fullscreen-section.variations{background:#f9f9f9;padding-bottom:80px;padding-bottom:80px;min-height:300px}
            .page-editor .fullscreen-section.variations .preview-container,.page-shared .fullscreen-section.variations .preview-container{margin-bottom:0}
            .page-editor .fullscreen-section.variations .preview-container:after,.page-shared .fullscreen-section.variations .preview-container:after{content:"";display:table;clear:both}
            .page-editor .fullscreen-section.variations .preview-container .item,.page-shared .fullscreen-section.variations .preview-container .item{opacity:1;width:370px;height:350px;background:#f1f1f1;border-radius:5px;overflow:hidden;position:relative}
            .page-editor .fullscreen-section.variations .preview-container .item .wm,.page-shared .fullscreen-section.variations .preview-container .item .wm{position:absolute;top:-5px;left:-5px}
            .page-editor .fullscreen-section.variations .preview-container .item img,.page-editor .fullscreen-section.variations .preview-container .item svg,.page-shared .fullscreen-section.variations .preview-container .item img,.page-shared .fullscreen-section.variations .preview-container .item svg{margin-top:-10px}
            .page-editor .fullscreen-section.variations .preview-container .item .logo-options,.page-shared .fullscreen-section.variations .preview-container .item .logo-options{position:absolute;left:0;bottom:0;z-index:10;background:#edeaea;border-radius:0;padding:10px 5px}
            .page-editor .fullscreen-section.variations .preview-container .item .logo-options:after,.page-shared .fullscreen-section.variations .preview-container .item .logo-options:after{content:"";display:table;clear:both}
            .page-editor .fullscreen-section.variations .preview-container .item .logo-options .btn,.page-shared .fullscreen-section.variations .preview-container .item .logo-options .btn{padding:8px 20px 8px 20px;margin:0}
            .page-editor .fullscreen-section.variations .preview-container .item .logo-options .btn-override-current-design,.page-shared .fullscreen-section.variations .preview-container .item .logo-options .btn-override-current-design{border-right:1px solid #ccc;border-radius:0}
            .page-editor .fullscreen-section.variations .preview-container .item .logo-options .glyphicon,.page-shared .fullscreen-section.variations .preview-container .item .logo-options .glyphicon{font-size:15px;top:2px;padding-right:8px}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap,.page-shared .fullscreen-section.variations .add-more-bottom-wrap{margin-top:35px}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6{text-align:center}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap{margin-right:0;padding-top:9px}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap{display:inline-block}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap p,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap p{margin-bottom:8px}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap .option,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap .option{margin-right:0;padding:5px 20px 7px 20px;border-right:1px solid #eee}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap .option:last-child,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap .option:last-child{margin-right:0;padding-right:0;border-right:0 none}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap .option label,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap .option label{padding:4px 10px 4px 10px;position:relative;top:2px}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap .option input,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .col-sm-6 .variation-selection-wrap .inner-wrap .option input{cursor:pointer}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .btn,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .btn{padding:12px 30px}
            .page-editor .fullscreen-section.variations .add-more-bottom-wrap .btn .glyphicon,.page-shared .fullscreen-section.variations .add-more-bottom-wrap .btn .glyphicon{padding-right:10px;top:2px}
            .logo-option-button{display:block;position:absolute;top:auto;left:auto;right:auto;bottom:auto;z-index:102;font-size:24px;transition:opacity 1s,transform .3s;transform:scale(1);cursor:pointer;padding:22px;line-height:1}
            .logo-option-button.unfavorite{display:none;left:10px;top:5px}
            .logo-option-button.favorite{display:block;left:10px;top:5px}
            .logo-option-button.envision{right:10px;top:5px}
            .logo-option-button.buy{left:10px;bottom:4px}
            .logo-option-button.edit{right:10px;bottom:4px}
            .item.favorite .logo-option-button.favorite{display:none}
            .item.favorite .logo-option-button.unfavorite{display:block}
            .btn-manage-favorites{position:relative;padding:7px 22px 7px 0;cursor:pointer;transition:all .5s;transform:scale(1)}
            .btn-manage-favorites.no-button-style{background:none;border:0 none;box-shadow:none}
            .btn-manage-favorites.animated{transform:scale(1.4)}
            .btn-manage-favorites.animated .favorite-count{background-color:#428bca}
            .btn-manage-favorites .favorite-count{background-color:#5cb85c;border-radius:100%;color:#fff;padding:3px 6px;line-height:1;font-size:14px;font-weight:bold;position:absolute;top:0;right:0;transform:scale(1);transition:all .5s}
            .no-touch-device .item .logo-option-button{opacity:.25}
            .no-touch-device .item .logo-option-button:hover{transform:scale(1.4)}
            .no-touch-device .item.favorite .logo-option-button{opacity:1}
            .no-touch-device.page-generate .logo-maker-nav-bar .generate-config-column .config-column .config-section.section-icon #icon-suggestions-container .icon-suggestions .icon:hover{opacity:.7;transform:scale(1.3)}
            .no-touch-device.page-home .section-showcase .universal-logos-grid{overflow:hidden}
            .page-editor,.page-variations,.page-preview{color:#000;line-height:1.65}
            .page-editor .modal-backdrop.in,.page-variations .modal-backdrop.in{opacity:.1}
            .testimonial{margin-bottom:0;background:#fff;border:0 none;transition:all 1s}
            .testimonial.observe-intersection{opacity:0;transform:scale(0.9)}
            .testimonial.in-view{opacity:1;transform:scale(1)}
            .testimonial .panel-body{padding:50px 70px 30px 80px;background:url("/static/img/quotes1.png") no-repeat 25px 30px}
            .testimonial img{width:240px;max-width:100% !important;height:auto !important}
            .testimonial .author{font-weight:bold;margin-bottom:8px}
            .testimonial .author .company{font-weight:normal}
            .testimonial .title{font-size:26px;margin-top:2px;margin-bottom:15px}
            .testimonial .message{font-size:18px;line-height:1.8}
            .testimonial .review .glyphicon{color:#ffc400;font-size:16px;margin-right:2px}
            .page-pricing .testimonials-hl,.page-checkout .testimonials-hl{margin-top:60px !important}
            .testimonials-container{padding:0;margin:0 auto;display:grid;grid-template-columns:repeat(2, 1fr);gap:40px;list-style:none}
            .testimonials-container .panel{border-radius:12px;text-align:center;display:inline-block;-webkit-column-break-inside:avoid;page-break-inside:avoid;break-inside:avoid}
            .page-editor .editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row .option{display:none}
            .page-editor-post-purchase .editor-header-container .col-backlink{padding:6px;text-align:center}
            .page-editor-post-purchase .editor-header-container .col-backlink .btn{padding:8px 14px;font-size:16px;border:0 none}
            .page-editor-post-purchase .local-nav{display:block}
            .page-editor-post-purchase.loading-layer-active .loading-layer{background-color:rgba(0,0,0,.4) !important}
            .page-editor-post-purchase .fullscreen-section.cta{display:none}
            .page-editor-post-purchase img.wm{display:none}
            .page-editor-post-purchase .section .custom-color-column .explanation{display:none}
            .page-editor-post-purchase .full-screen-section.back-to-purchases{padding:25px 0;text-align:center}
            .page-editor-post-purchase .full-screen-section.back-to-purchases .btn{width:100%}
            .page-editor-post-purchase .editor-config-column .config-column .config-section.section-layout-options .sub-section-container-layout .options-row .option{display:block}
            .footer-container{margin-bottom:18px;margin-top:20px}
            .footer-container .footnote{display:flex}
            .footer-container .column.copyright p{margin-bottom:0;font-size:14px}
            .footer-container .column.footer-nav{margin-left:auto}
            .footer-container .column.footer-nav a{margin:0 12px;color:#7d7e8a;font-size:14px;display:inline-block}
            .tooltip.top{white-space:nowrap}
            .generate-config-column .config-section .tooltip.top{white-space:normal}
            .generate-config-column .config-section .tooltip.top .tooltip-inner{padding:15px !important;max-width:280px !important;width:280px !important}
            .generate-config-column .config-section .tooltip.top .tooltip-inner p:last-child{margin-bottom:10px}
            .preview-container .item.mutation-default .logo-preview img.dark{margin-top:0}
            ::-webkit-input-placeholder{color:#777 !important;font-weight:normal}
            :-moz-placeholder{color:#777 !important;opacity:1;font-weight:normal}
            ::-moz-placeholder{color:#777 !important;opacity:1;font-weight:normal}
            :-ms-input-placeholder{color:#777 !important;font-weight:normal}
            .loading-layer-active .loading-layer{background-color:rgba(0,0,0,.2);bottom:0;height:auto;width:auto;position:fixed;right:0;left:0;top:0;z-index:9999 !important;display:block !important}
            .loading-layer-active.loading-layer-active-dark .loading-layer{background-color:rgba(0,0,0,.4)}
            .loading-layer-active.loading-layer-active-error .loading-layer{background-color:rgba(140,10,10,.15)}
            .loading-layer-active.loading-layer-active-error .loading-layer .page-loading-spinner-v3 .ring{display:none}
            .page-generate.favorites-view .preview-container .item{display:none}
            .page-generate.favorites-view .preview-container .item.favorite.favorite-highlight-mode{display:block}
            .color-palette{background:#fff;padding:45px 18px 18px 18px;display:none}
            .color-palette .swatches{margin-bottom:8px}
            .color-palette .swatches:after{content:"";display:table;clear:both}
            .color-palette .target-color{margin-bottom:12px}
            .color-palette .target-color .nav-tabs{border-color:#ccc !important}
            .color-palette .target-color .nav-tabs a{outline:0 none !important;padding-left:34px;padding-right:34px;font-size:21px}
            .color-palette .target-color .nav-tabs a:link,.color-palette .target-color .nav-tabs a:hover,.color-palette .target-color .nav-tabs a:visited,.color-palette .target-color .nav-tabs a:focus,.color-palette .target-color .nav-tabs a:active{color:#000}
            .color-palette .target-color .nav-tabs a:hover{background-color:#f7f7f7}
            .color-palette .target-color .nav-tabs li.active a{border-left-color:#ccc !important;border-top-color:#ccc !important;border-right-color:#ccc !important}
            .color-palette .btn-close-color-mode{margin-left:20px}
            .color-palette-swatch{width:40px;height:40px;margin:1px;float:left;cursor:pointer;line-height:18px;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px}
            .color-palette-swatch:hover{-webkit-transform:scale(1.8);-moz-transform:scale(1.8);transform:scale(1.8)}
            .mutation-nav-item{height:12px;width:12px;margin-right:8px;display:inline-block;cursor:pointer;line-height:18px;-moz-border-radius:6px;-webkit-border-radius:6px;border-radius:6px;background:#000 !important;opacity:.05}
            .mutation-nav-item:last-child{margin-right:0}
            .mutation-nav-item.active{opacity:.2}
            .page-contact .content{margin-bottom:0}
            .page-contact .content-columns{margin-top:70px;display:flex;gap:55px}
            .page-contact .content-columns .content-column{flex:1}
            .page-contact .content-columns .content-column img{max-width:100% !important;height:auto !important}
            .page-contact .imprint-section{margin-top:35px;background:#1a2256;padding:90px 0 100px 0}
            .page-contact .imprint-section h2{margin-top:0;margin-bottom:55px;font-size:32px}
            .page-contact .imprint-section h2,.page-contact .imprint-section p,.page-contact .imprint-section a{color:#fff}
            .page-contact .imprint-section p{line-height:2.2}
            .page-contact .imprint-section .imprint-columns{display:grid;gap:210px;grid-template-columns:repeat(3, 1fr)}
            #contact-form{padding-bottom:25px;margin-bottom:65px}
            #contact-form input.form-control{height:auto}
            #contact-form textarea.form-control{height:220px}
            #contact-form .form-control{padding:24px 29px;font-size:16px;border:1px solid #e5e4eb;border-radius:10px;max-width:100%}
            #contact-form p{margin-bottom:17px}
            #contact-form .footer-submit{display:flex;align-items:center}
            #contact-form .footer-submit .g-recaptcha{margin-left:auto}
            #contact-form .footer-submit .submit-button-wrap{margin-right:auto}
            #contact-form label{padding-left:8px;font-size:16px}
            #contact-form .btn-primary{padding:16px 35px}
            .page-editor.initial-page-setup-in-progress .variations-header,.page-editor.initial-page-setup-in-progress .filter-sections-header-wrapper,.page-editor.initial-page-setup-in-progress .editor-main-content{opacity:0}
            .page-editor .variations-header{background:#fff linear-gradient(0deg, rgba(0, 0, 0, 0.05), transparent);background:#fcfcfc;padding:14px 0;text-align:center;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .page-editor .variations-header .switch-modes{margin:0;display:inline-block;background:none;padding:0}
            .page-editor .variations-header .switch-modes .mode{padding:4px 2px 6px 2px;line-height:1;margin:8px 12px;border-radius:0}
            .page-editor .variations-header .switch-modes .mode.active{background:none;box-shadow:none;font-weight:bold;font-weight:bold;border-bottom:2px solid #333}
            .page-editor .variations-header .switch-modes .mode:last-child{border-right:0 none}
            .page-editor .filter-sections-header-wrapper{border-top:1px solid #e5e5e5;background:#fff;height:30px}
            .page-editor .filter-sections-header{display:flex;justify-content:center;align-items:center;margin-top:-21px;margin-top:-15px}
            .page-editor .filter-sections-header .switch-modes{border:1px solid #ddd;background:#fff linear-gradient(0deg, rgba(0, 0, 0, 0.08), transparent);padding:0;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
            .page-editor .filter-sections-header .switch-modes .mode{padding:6px 12px 6px 12px;border-right:1px solid #ddd;border-radius:0;margin:0;font-size:13px}
            .page-editor .filter-sections-header .switch-modes .mode.icon-view{font-size:15px;padding-top:5px;padding-bottom:3px;padding-left:14px;padding-right:14px}
            .page-editor .filter-sections-header .switch-modes .mode.previously-used .glyphicon{transform:scaleX(-1)}
            .page-editor .filter-sections-header .switch-modes .mode:last-child{border-right:0 none}
            .page-editor .filter-sections-header .switch-modes .mode.active{background:#fff;box-shadow:none;font-weight:bold;border-color:#ccc}
            .page-editor .section-nav-container .cta-buttons{display:none}
            .page-editor .section-nav-container .cta-buttons .btn{margin-left:20px;margin-bottom:20px;padding:16px 50px}
            .page-editor .section-nav-container .cta-buttons .btn:first-child{margin-left:0}
            .page-editor .section-nav-container .cta-buttons .btn.btn-save.disabled{opacity:.3}
            .page-editor .section-nav-container .cta-buttons .btn .inner-wrap{display:none}
            .page-editor .section-nav-container .cta-buttons.ready{display:block}
            .btn-lg,.btn-group-lg>.btn{-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px}
            .add-more-bottom-wrap:after{content:"";display:table;clear:both}
            .add-more-bottom-wrap .btn-lg{padding:15px 24px}
            .add-more-bottom-wrap .btn-voting{margin-left:10px}
            .variation-selection-wrap{margin-right:25px}
            .variation-selection-wrap p{color:#bbb;letter-spacing:.04em;margin-bottom:5px;text-transform:uppercase}
            .variation-selection-wrap input{outline:0 none !important}
            .variation-selection-wrap .option{margin-right:10px;font-size:16px}
            .variation-selection-wrap .option:last-child{margin-right:0}
            .variation-selection-wrap label{padding-left:6px;cursor:pointer}
            #dropdownLogoType{margin-top:3px;padding:8px 14px}
            .logo-type-dropdown{position:relative}
            .logo-type-list{background-color:#f7f7f7;min-width:145px;padding:8px 0}
            .logo-type-list .intro-header{color:#aaa;font-size:11px;letter-spacing:.04em;padding:0 14px;text-transform:uppercase;margin:5px 0 8px 0}
            .logo-type-list .option{padding:0 14px}
            .logo-type-list .option label{cursor:pointer;padding-left:7px}
            input#companyName{position:relative;z-index:10}
            .bootstrap-tagsinput{background-color:#fff;border:1px solid #ccc;box-shadow:inset 0 1px 1px rgba(0,0,0,.075);display:inline-block;padding:4px 6px;color:#555;vertical-align:middle;border-radius:4px;max-width:100%;line-height:22px;cursor:text}
            .bootstrap-tagsinput input{border:none;box-shadow:none;outline:none;background-color:transparent;padding:0 6px;margin:0;width:auto;max-width:inherit}
            .bootstrap-tagsinput input::-moz-placeholder{color:#777;opacity:1}
            .bootstrap-tagsinput.form-control input:-ms-input-placeholder{color:#777}
            .bootstrap-tagsinput.form-control input::-webkit-input-placeholder{color:#777}
            .bootstrap-tagsinput input:focus{border:none;box-shadow:none}
            .bootstrap-tagsinput .tag{margin-right:2px;color:#fff;font-size:13px}
            .bootstrap-tagsinput .tag [data-role=remove]{margin-left:8px;padding:3px 5px 3px 5px;font-size:14px;cursor:pointer}
            .bootstrap-tagsinput .tag [data-role=remove]:hover{box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05)}
            .bootstrap-tagsinput .tag [data-role=remove]:hover:active{box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}
            .bootstrap-tagsinput .tag [data-role=remove]:after{content:"x";padding:0px 2px}
            .color-spectrums:after{content:"";display:table;clear:both}
            .color-spectrums .color-spectrum{float:left;margin:5px}
            .color-spectrums .color-spectrum .colorbox{width:183px;height:183px;cursor:pointer}
            .color-spectrums .color-spectrum .colorbox.active{outline:6px solid red}
            .color-spectrums .color-spectrum .info{margin-bottom:10px;line-height:1.2;font-size:16px;white-space:nowrap}
            .page-industry #page{position:relative;min-height:100%}
            .page-industry.page-envision-background.envision-background-mode .envision-background .darkening-layer{background-color:rgba(0,0,0,.65)}
            .page-industry.envision-background-mode .envision-background-progress{display:none;position:absolute;z-index:100;bottom:40px;white-space:nowrap;left:50%;top:auto;right:auto;transform:translate(-50%, 0);width:auto}
            .page-industry.envision-background-mode .envision-background-progress .progress-item{margin-bottom:0;display:inline-block;margin-right:12px}
            .page-industry .header-container{background:none !important;position:relative;padding:25px 0;box-shadow:none}
            .page-industry .header-container .container-full-width{padding:0 30px}
            .page-industry .header-container .parent-nav-container{display:none}
            .page-industry .header-container .header-flex-row .dropdown-toggle{display:block}
            .page-industry .header-container .header-flex-row.open .parent-nav-container{display:block;max-width:250px}
            .page-industry .header-container .header-flex-row.open .main-nav{border-bottom:0 none;padding-bottom:0}
            .page-industry .header-container .header-flex-row.open .meta-nav-container{display:none}
            .page-industry .content{position:relative;z-index:10;margin-top:100px;margin-bottom:40px}
            .page-industry .content .container-full-width{padding:0 30px}
            .page-industry .content .industry-title{color:#fff;text-shadow:2px 2px 2px rgba(0,0,0,.3);text-align:center;font-size:48px;text-transform:uppercase;margin-bottom:30px}
            .page-industry .content .industry-text{text-align:center;font-size:21px;line-height:1.7;color:#fff;max-width:680px;margin:0 auto;text-shadow:2px 2px 2px rgba(0,0,0,.3)}
            .page-industry .content .industry-text.intro{margin-bottom:25px}
            .page-industry .content .industry-form{display:flex;align-items:center;justify-content:center;max-width:600px;margin:70px auto 30px auto}
            .page-industry .content .industry-form .input-wrap{flex:1}
            .page-industry .content .industry-form .input-wrap .form-control{display:inline-block;height:auto;padding:18px 25px;font-size:18px;border-radius:5px 0 0 5px;-webkit-appearance:none;border:1px solid transparent;box-shadow:-2px -2px 4px rgba(0,0,0,.3),2px 2px 4px rgba(0,0,0,.3)}
            .page-industry .content .industry-form .submit-wrap .btn{display:inline-block;padding:18px 30px 19px 30px;font-size:18px;border-radius:0 5px 5px 0;-webkit-appearance:none;border:1px solid transparent;box-shadow:-2px -2px 4px rgba(0,0,0,.3),2px 2px 4px rgba(0,0,0,.3)}
            .page-industry .content .scroll-indicator{text-align:center}
            .page-industry .content .scroll-indicator .glyphicon{cursor:pointer;color:#fff;font-size:60px;-webkit-animation:PulsateScrollIndicator 2s ease-in-out infinite;animation:PulsateScrollIndicator 2s ease-in-out infinite}
            .page-industry .btn-generate{transition:all 1s}
            .page-industry .intro-header-text{text-align:center;margin-bottom:30px}
            .page-industry .intro-header-text .header{text-align:center;font-size:36px;margin-bottom:20px;margin-top:0}
            .page-industry .intro-header-text .text{font-size:21px;line-height:1.7;max-width:500px;margin:0 auto}
            .page-industry .premium-template-section,.page-industry .instant-designs-section{padding:80px 0 140px 0}
            .page-industry .premium-template-section{position:relative;z-index:11;background:#fff;text-align:center;color:#fff;background-color:rgba(0,0,0,.35);transition:background-color 1s}
            .page-industry .premium-template-section .header{color:#fff}
            .page-industry .premium-template-section .wave-deco.bottom{position:absolute;left:0;bottom:0;background:#f1f1f1}
            .page-industry .premium-template-section .universal-logos-grid .logo .items .item{background-color:transparent !important;border-color:transparent !important}
            .page-industry .premium-template-section .universal-logos-grid .logo .btn-edit-industry-logo{background-color:#7165ff !important;border-color:#2e6da4 !important;color:#fff !important}
            .page-industry .premium-template-section .universal-logos-grid svg{transition:opacity 1s;opacity:1}
            .page-industry .premium-template-section .universal-logos-grid svg path{fill:#fff !important}
            .page-industry .instant-designs-section{background:#f1f1f1;text-align:center}
            .page-industry .instant-designs-section .wave-deco{display:none;position:absolute;top:0;left:0}
            .page-industry .instant-designs-section .btn-edit-industry-logo{color:#333;background-color:#f9f9f9;border-color:#adadad}
            .page-industry .magic-curtain-container{position:relative;overflow:hidden}
            .page-industry .perfect-match{position:relative;z-index:10}
            .page-industry .perfect-match .wave-deco{background:#fff;background:#f1f1f1;position:absolute;top:0;left:0;width:100%}
            .page-industry .perfect-match .perfect-match-section{text-align:center;padding:180px 0 90px 0;background:#fff}
            .page-industry .perfect-match .perfect-match-section .header .chain{font-weight:normal;padding:0 5px;font-size:34px;position:relative;top:-1px}
            .page-industry .perfect-match .perfect-match-section .match-module{max-width:465px;margin:0 auto;padding-bottom:120px;background-image:url("/static/img/call-to-logo-maker-dashed-line.gif");background-repeat:no-repeat;background-position:88% 100%}
            .page-industry .perfect-match .perfect-match-section .match-module .header{display:flex;align-items:center}
            .page-industry .perfect-match .perfect-match-section .match-module .header .form-control{display:block;width:100%;height:auto;padding:10px 10px;font-size:18px;border-color:#f5f5f5;box-shadow:none;border-left:0;border-top:0;border-right:0;border-radius:0;border-width:2px;font-weight:bold}
            .page-industry .perfect-match .perfect-match-section .match-module .header .input-wrap.tagline{margin:0 15px}
            .page-industry .perfect-match .perfect-match-section .match-module .header .btn-update-logo{border:0 none}
            .page-industry .perfect-match .perfect-match-section .match-module .header .btn-update-logo .inner-wrap{display:none}
            .page-industry .perfect-match .perfect-match-section .match-module .logos{margin-top:20px;margin-bottom:20px;padding:15px;background:#fff;box-shadow:0px 1px 7px 0px rgba(0,0,0,.2);border:1px solid rgba(255,255,255,.3);border-radius:8px;position:relative;overflow:hidden}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .loading-item{position:relative}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .loading-item img{max-width:100% !important;height:auto !important}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .loading-item .loading-layer{background-color:#eee;border-radius:0;height:100%;width:100%;position:absolute;left:0;top:0;z-index:10 !important;display:block !important}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .loading-item .page-loading-spinner-v3{position:absolute;left:0;top:0;width:100%;height:100%;z-index:10 !important;display:block !important}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .loading-item .page-loading-spinner-v3 .ring{margin:auto;position:absolute;top:0;left:0;bottom:0;right:0;width:200px;height:200px;transform:scale(0.79)}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .loading-item .page-loading-spinner-v3 .ring>div{position:absolute;display:block;width:160px;height:160px;top:20px;left:20px;border-radius:80px;box-shadow:0 6px 0 0 #fff;animation:ring-animation 1s linear infinite}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item{position:absolute;left:15px;top:15px;z-index:9999;width:calc(100% - 30px);transition:left .7s,opacity .7s;opacity:1}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:first-child{display:block}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item.like+.item,.page-industry .perfect-match .perfect-match-section .match-module .logos .item.dislike+.item{display:block}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(1){z-index:9998}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(2){z-index:9997}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(3){z-index:9996}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(4){z-index:9995}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(5){z-index:9994}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(6){z-index:9993}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(7){z-index:9992}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(8){z-index:9991}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(9){z-index:9990}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(10){z-index:9989}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(11){z-index:9988}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(12){z-index:9987}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(13){z-index:9986}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(14){z-index:9985}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(15){z-index:9984}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(16){z-index:9983}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(17){z-index:9982}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(18){z-index:9981}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(19){z-index:9980}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item:nth-child(20){z-index:9979}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-options{display:none}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-option-button{display:none}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-preview{width:100%;overflow:hidden;position:relative}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-preview .favorite-sign{display:none}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-preview .mutations-container{position:relative;z-index:20}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-preview .mutations-container .mutation{-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s;background:#fff;border-radius:0;display:none}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-preview .mutations-container .mutation .svg-container{line-height:1}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-preview .mutations-container .mutation.active{display:block}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item .logo-preview .mutations-container .mutation img.wm{display:none}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item.dislike{left:-500px;opacity:0}
            .page-industry .perfect-match .perfect-match-section .match-module .logos .item.like{left:500px;outline:5px solid #337ab7}
            .page-industry .perfect-match .perfect-match-section .match-module .footer{display:flex;align-items:center;padding:0 5px 0 20px}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .brand-attributes,.page-industry .perfect-match .perfect-match-section .match-module .footer .btn-manage-favorites{cursor:pointer}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .brand-attributes{position:relative;padding:7px 17px 7px 0}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .brand-attributes .brand-attributes-notification{line-height:1;font-weight:bold;position:absolute;top:0;right:0;transform:scale(1);transition:all .5s}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .brand-attributes .brand-attributes-notification .glyphicon-question-sign{color:#f0ad4e;font-size:21px}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .action-buttons{display:flex;margin-left:auto;margin-right:auto}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .action-buttons .glyphicon{font-size:34px;padding:16px 18px;border:4px solid #f9f9f9;border-radius:100%;margin:0 4px;cursor:pointer;transition:all .2s;background-color:#fff}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .action-buttons .glyphicon-heart{color:#337ab7}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .action-buttons .glyphicon-heart.animated{border-color:#337ab7}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .action-buttons .glyphicon-remove{color:#98c0e0}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .action-buttons .glyphicon-remove.animated{border-color:#98c0e0}
            .page-industry .perfect-match .perfect-match-section .match-module .footer .glyphicon{font-size:26px;color:#ddd}
            .page-industry .perfect-match .perfect-match-section .call-to-logo-maker{padding-top:10px}
            .page-industry .perfect-match .perfect-match-section .call-to-logo-maker .btn{padding:20px 36px;font-size:21px}
            .page-industry .perfect-match .perfect-match-section .call-to-logo-maker .explanation-match-customize{max-width:450px;font-style:italic;margin:18px auto}
            .page-industry .faq{position:relative;z-index:10}
            .page-industry .faq .wave-deco{background:#fff;position:absolute;top:-1px;left:0;width:100%}
            .page-industry .faq .wave-deco.bottom{top:auto;bottom:0;background-color:rgba(0,0,0,.35);transition:background-color 1s}
            .page-industry .faq .faq-section{text-align:center;padding:200px 0 240px 0;transition:background-color 1s;color:#fff}
            .page-industry .faq .faq-section .intro-header-text .header{color:#fff}
            .page-industry .faq .faq-section .faq-container{list-style:none;padding:0;margin:60px 0 0 0}
            .page-industry .faq .faq-section .faq-panel{text-align:left;max-width:800px;margin:0 auto 6px auto;border-left:0 none}
            .page-industry .faq .faq-section .faq-panel .panel-heading{background-color:rgba(0,0,0,.5);transition:background-color 1s;border-bottom:0 none;padding:25px 22px;border-radius:10px 10px 0 0}
            .page-industry .faq .faq-section .faq-panel .panel-heading .panel-title{font-size:21px;color:#fff;padding-left:30px}
            .page-industry .faq .faq-section .faq-panel .panel-heading .panel-title .glyphicon{color:#fff;padding-right:15px}
            .page-industry .faq .faq-section .faq-panel.collapsed .panel-heading{border-radius:10px;background:rgba(0,0,0,.2)}
            .page-industry .faq .faq-section .faq-panel .panel-body{font-size:18px;color:#fff;border-bottom:0 none;background-color:rgba(0,0,0,.5);transition:background-color 1s;border-radius:0 0 10px 10px;padding:5px 30px 25px 56px}
            .page-industry .testimonials-section{position:relative;z-index:10;padding:20px 0 120px 0;background-color:rgba(0,0,0,.35);transition:background-color 1s}
            .page-industry .testimonials-section .wave-deco.bottom{position:absolute;bottom:0;background-color:#fff}
            .page-industry .testimonials-section .industry-testimonials-wrapper{position:relative}
            .page-industry .testimonials-section .industry-testimonials-wrapper .btn{position:absolute;top:50%;background:none;border:0 none;box-shadow:none;cursor:pointer;transform:translate(0, -50%);color:#fff;font-size:60px;z-index:20;outline:0 none}
            .page-industry .testimonials-section .industry-testimonials-wrapper .btn.slider-review-prev{left:0}
            .page-industry .testimonials-section .industry-testimonials-wrapper .btn.slider-review-next{right:0}
            .page-industry .testimonials-section .industry-testimonials{list-style:none;margin:0;padding:0;width:100%;position:relative;overflow:hidden}
            .page-industry .testimonials-section .industry-testimonials .industry-testimonial{display:none;width:100%;position:relative}
            .page-industry .testimonials-section .industry-testimonials .industry-testimonial.active{display:block}
            .page-industry .testimonials-section .panel{border:0 none;text-align:center;box-shadow:none;background:none;max-width:620px;margin:0 auto}
            .page-industry .testimonials-section .panel .panel-body{font-size:21px;color:#fff}
            .page-industry .testimonials-section .panel .panel-body .title{font-size:30px;margin-bottom:20px;color:#fff}
            .page-industry .testimonials-section .panel .panel-body .author{font-weight:bold;margin-top:40px}
            .page-industry .testimonials-section .panel .panel-body .author .company{font-weight:normal}
            .page-industry .testimonials-section .panel .panel-body .glyphicon-star{color:#ffc400;font-size:26px;margin-right:6px}
            .page-industry .capterra-section{position:relative;z-index:20;text-align:center;padding-top:40px;padding-bottom:150px;background:#fff}
            .page-industry .capterra-section .wave-deco.bottom{position:absolute;bottom:0;background-color:#f9f9f9}
            .page-industry .cta-section{position:relative;z-index:10;padding:80px 0 180px 0;background:#f9f9f9}
            .page-industry .cta-section .wave-deco{position:absolute;top:-1px;left:0;width:100%}
            .page-industry .cta-section .extended-industry-form{margin:50px auto 0 auto;max-width:620px}
            .page-industry .cta-section .extended-industry-form h2{text-align:center;font-size:22px;font-weight:normal;margin-bottom:18px;display:none}
            .page-industry .cta-section .extended-industry-form h2 em{font-style:normal;font-weight:bold}
            .page-industry .cta-section .extended-industry-form .brand-attributes{margin-top:20px;margin-bottom:35px}
            .page-industry .cta-section .extended-industry-form .brand-attributes .input-wrap{display:flex;align-items:center}
            .page-industry .cta-section .extended-industry-form .brand-attributes .input-wrap .show-all{padding-left:10px}
            .page-industry .cta-section .extended-industry-form .brand-attributes .input-wrap .bootstrap-tagsinput{border-color:#ccc !important;padding-top:12px !important;padding-bottom:12px !important}
            .page-industry .cta-section .extended-industry-form .brand-attributes .input-wrap .btn-keywords{font-size:18px;padding:16px 18px}
            .page-industry .cta-section .extended-industry-form .brand-attributes .input-wrap .tag{background-color:#fff;color:#000;border:1px solid #bbb}
            .page-industry .cta-section .extended-industry-form .input-wrap{margin-bottom:10px}
            .page-industry .cta-section .extended-industry-form .form-control{display:block;width:100%;height:auto;padding:16px 25px;font-size:18px}
            .page-industry .cta-section .extended-industry-form .btn-generate{width:100%;padding:18px 24px;font-size:18px}
            .page-industry #sticky-footer{position:relative;background:#f9f9f9;padding-bottom:25px}
            .page-industry #sticky-footer .container-full-width{padding-top:0;padding-bottom:0;margin-top:0;margin-bottom:0}
            .wave-deco{width:100%;height:140px;clip-path:polygon(100% 0%, 0% 0%, 0% 65%, 1% 64.95%, 2% 64.8%, 3% 64.6%, 4% 64.3%, 5% 63.9%, 6% 63.45%, 7% 62.9%, 8% 62.25%, 9% 61.55%, 10% 60.8%, 11% 59.95%, 12% 59.05%, 13% 58.1%, 14% 57.1%, 15% 56.05%, 16% 55%, 17% 53.9%, 18% 52.8%, 19% 51.65%, 20% 50.5%, 21% 49.35%, 22% 48.2%, 23% 47.05%, 24% 45.9%, 25% 44.8%, 26% 43.75%, 27% 42.75%, 28% 41.75%, 29% 40.8%, 30% 39.9%, 31% 39.1%, 32% 38.35%, 33% 37.65%, 34% 37.05%, 35% 36.5%, 36% 36.05%, 37% 35.65%, 38% 35.35%, 39% 35.15%, 40% 35.05%, 41% 35%, 42% 35.05%, 43% 35.2%, 44% 35.45%, 45% 35.75%, 46% 36.15%, 47% 36.65%, 48% 37.2%, 49% 37.85%, 50% 38.55%, 51% 39.35%, 52% 40.2%, 53% 41.1%, 54% 42.05%, 55% 43.05%, 56% 44.1%, 57% 45.15%, 58% 46.3%, 59% 47.4%, 60% 48.55%, 61% 49.7%, 62% 50.85%, 63% 52%, 64% 53.15%, 65% 54.25%, 66% 55.35%, 67% 56.4%, 68% 57.45%, 69% 58.4%, 70% 59.35%, 71% 60.2%, 72% 61.05%, 73% 61.8%, 74% 62.45%, 75% 63.05%, 76% 63.6%, 77% 64.05%, 78% 64.4%, 79% 64.7%, 80% 64.85%, 81% 65%, 82% 65%, 83% 64.9%, 84% 64.75%, 85% 64.5%, 86% 64.2%, 87% 63.75%, 88% 63.25%, 89% 62.7%, 90% 62.05%, 91% 61.3%, 92% 60.5%, 93% 59.65%, 94% 58.75%, 95% 57.8%, 96% 56.8%, 97% 55.75%, 98% 54.65%, 99% 53.55%, 100% 52.4%);background-color:#fff;transition:background-color 1s}
            .wave-deco.dark-semi{background-color:rgba(0,0,0,.35)}
            .wave-deco.flipped{transform:rotate(180deg)}
            .award-badges p{font-size:18px;margin:0 auto 10px auto;color:#000}
            .award-badges p .mini-badge{display:inline-block;--text-opacity: 1;color:#68c5ed;position:relative;top:3px;width:20px;height:20px;display:none}
            .award-badges p .mini-badge.blue{color:#68c5ed;color:rgba(104, 197, 237, var(--text-opacity))}
            .award-badges p .mini-badge.green{color:#21ac21;color:rgba(33, 172, 33, var(--text-opacity))}
            .award-badges .badge-container{margin-top:30px}
            .award-badges .badge-container .review-badge-container{display:inline-block;margin:7px 15px}
            .award-badges .badge-container .review-badge-container a{display:inline-block}
            .award-badges .badge-container .review-badge-container.get-app{max-width:110px}
            .award-badges .badge-container .review-badge-container img{max-width:100% !important;height:auto !important}
            /*==*/


            a{
                background-color:transparent;
                color:inherit;
                text-decoration:inherit
            }
            a:active,a:hover{
                outline:0
            }

            [hidden]{
                display:none
            }

            *,:after,:before{
                box-sizing:border-box;
                border:0 solid #e2e8f0
            }

            svg,video{
                display:block;
                vertical-align:middle
            }
            video{
                max-width:100%;
                height:auto
            }

            .text-sm{font-size:1.000rem}
            .ml-4{margin-left:1rem}
            .text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}
            .underline{text-decoration:underline}

            #slider{
                width: 1915px;
                height: 43vw;

                /* margin-left: auto;
                 margin-right: auto;*/
            }
            #slider img{
                position: absolute;
                opacity: 0;

                width: 100%;
                height: 100%;

                object-fit: cover;

                transition: opacity 5000ms;
            }

            #slider img.selected{
                opacity: 1;
            }


        </style>
    </head>

    <body class="page-preview no-touch-device">

        <div id="page">

            <div class="seamless-header-container">

                <div class="seamless-header">

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registre</a>
                            @endif
                        @endauth
                    @endif
                </div>
        </div>

        <div class="content preview-content" data-active-section="preview">

            <div id="envision-section">

                <div class="fullscreen-section preview">

                    <div class="envision-brand watermark-mode portrait-mode">

                        <div class="envision-section preview active" data-section="preview">

                            <div class="slider-wrapper">

                                <div class="sujet-containers">

                                    <div class="items">

                                        <div class="item item-tiles">

                                            <div class="sujet-container" id="slide-tiles" data-ratio="landscape" style="height: 774.859px;">

                                                <div class="primary-tile" style="background-color: rgb(17, 17, 31); height: 387.43px;">

                                                    <svg xmlns:mydata="http://www.w3.org/2000/svg" mydata:contrastcolor="11111f" mydata:template="Contrast" mydata:presentation="2.5" mydata:layouttype="undefined" mydata:specialfontid="undefined" mydata:id1="161" mydata:id2="169" mydata:companyname="Empório da Praça" mydata:companytagline="Beer Spot" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 550 470" class="svg-primary-tile">

                                                        <g fill="#ffc600" fill-rule="none" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">

                                                            <g data-paper-data="{&quot;isGlobalGroup&quot;:true,&quot;bounds&quot;:{&quot;x&quot;:65,&quot;y&quot;:126.85910374861041,&quot;width&quot;:420,&quot;height&quot;:216.28179250277915}}">

                                                                <g data-paper-data="{&quot;isSecondaryText&quot;:true}" fill-rule="nonzero">

                                                                    <path d="M274.60854,338.45107c1.10927,0 1.99388,0.07021 1.99388,1.16543c0,1.12331 -0.74419,1.26372 -1.89559,1.26372h-0.37912v-2.42916zM274.5243,334.28078c0.88461,0 1.53051,0.26679 1.53051,1.10927c0,0.88461 -0.53357,1.13735 -1.54455,1.13735h-0.18254v-2.24662zM275.46507,342.87411c2.036,0 3.6648,-0.94077 3.6648,-3.0891c0,-1.02502 -0.46337,-2.17641 -1.64284,-2.62574c0.60378,-0.53357 0.95481,-1.24968 0.95481,-1.89559c0,-2.19046 -1.60072,-2.97677 -3.6648,-2.97677h-2.83636v10.5872z" data-paper-data="{&quot;glyphName&quot;:&quot;B&quot;,&quot;glyphIndex&quot;:0,&quot;firstGlyphOfWord&quot;:true,&quot;word&quot;:1}"></path>

                                                                    <path d="M297.95998,342.87411v-2.13429h-4.00179v-2.2747h3.94563v-2.13429h-3.94563v-1.90963h4.00179v-2.13429h-6.52924v10.5872z" data-paper-data="{&quot;glyphName&quot;:&quot;E&quot;,&quot;glyphIndex&quot;:1,&quot;word&quot;:1}"></path>

                                                                    <path d="M316.53021,342.87411v-2.13429h-4.00179v-2.2747h3.94563v-2.13429h-3.94563v-1.90963h4.00179v-2.13429h-6.52924v10.5872z" data-paper-data="{&quot;glyphName&quot;:&quot;E&quot;,&quot;glyphIndex&quot;:2,&quot;word&quot;:1}"></path>

                                                                    <path d="M331.61636,334.32291c1.08119,0 1.74113,0.22466 1.74113,1.30585c0,1.06715 -0.65994,1.40414 -1.75517,1.41818h-0.42124v-2.72403zM336.89592,342.87411l-2.69595,-4.26858c1.30585,-0.5757 1.68497,-1.7973 1.68497,-3.03294c0,-2.33087 -1.61476,-3.27164 -3.81926,-3.27164h-3.41206v10.57316h2.52745v-3.97371h0.58974l2.07812,3.97371z" data-paper-data="{&quot;glyphName&quot;:&quot;R&quot;,&quot;glyphIndex&quot;:3,&quot;lastGlyphOfWord&quot;:true,&quot;word&quot;:1}"></path>
                                                                    <path d="M363.51117,343.1409c2.33087,0 3.76309,-1.53051 3.76309,-3.67884c0,-1.83942 -1.16543,-2.56957 -2.2747,-3.03294c-0.26679,-0.12637 -0.53357,-0.22466 -0.78632,-0.32295c-0.2387,-0.09829 -0.46337,-0.19658 -0.65994,-0.30891c-0.37912,-0.21062 -0.56166,-0.43528 -0.56166,-0.75823c0,-0.51953 0.51953,-0.95481 1.10927,-0.95481c0.5757,0 1.02502,0.25274 1.6288,0.9829l1.24968,-1.74113c-0.88461,-0.87057 -2.23258,-1.31989 -3.22952,-1.31989c-1.93771,0 -3.35589,1.4603 -3.35589,3.2576c0,1.71305 1.12331,2.4432 2.54149,2.97677c0.21062,0.08425 0.42124,0.15446 0.63186,0.25274c0.67399,0.26679 1.10927,0.58974 1.10927,1.2216c0,0.70207 -0.46337,1.27777 -1.17948,1.27777c-0.75823,0 -1.43222,-0.56166 -1.88155,-1.64284l-1.69901,1.58668c0.88461,1.37606 2.02196,2.2045 3.59459,2.2045z" data-paper-data="{&quot;glyphName&quot;:&quot;S&quot;,&quot;glyphIndex&quot;:4,&quot;firstGlyphOfWord&quot;:true,&quot;word&quot;:2}"></path>

                                                                    <path d="M383.06261,334.33695c1.15139,0 1.76921,0.18254 1.76921,1.30585c0,1.15139 -0.51953,1.37606 -1.71305,1.37606h-0.43528v-2.6819zM383.73659,339.0689c2.30279,0 3.6648,-1.13735 3.6648,-3.4261c0,-2.45724 -1.61476,-3.35589 -3.94563,-3.35589h-3.29972v10.5872h2.52745v-3.80521z" data-paper-data="{&quot;glyphName&quot;:&quot;P&quot;,&quot;glyphIndex&quot;:5,&quot;word&quot;:2}"></path>

                                                                    <path d="M405.33431,334.37907c1.82538,0 2.93465,1.53051 2.93465,3.10315c0,1.53051 -0.78632,3.29972 -2.93465,3.29972c-2.14833,0 -2.93465,-1.76921 -2.93465,-3.29972c0,-1.57263 1.10927,-3.10315 2.93465,-3.10315zM405.33431,343.1409c3.41206,0 5.51826,-2.47128 5.51826,-5.57443c0,-3.13123 -2.19046,-5.56039 -5.51826,-5.56039c-3.32781,0 -5.51826,2.42916 -5.51826,5.56039c0,3.10315 2.10621,5.57443 5.51826,5.57443z" data-paper-data="{&quot;glyphName&quot;:&quot;O&quot;,&quot;glyphIndex&quot;:6,&quot;word&quot;:2}"></path>
                                                                    <path d="M430.64303,334.4914v-2.13429h-6.88028v2.13429h2.16237v8.38271h2.54149v-8.38271z" data-paper-data="{&quot;glyphName&quot;:&quot;T&quot;,&quot;glyphIndex&quot;:7,&quot;lastGlyphOfWord&quot;:true,&quot;word&quot;:2}"></path>
                                                                </g>
                                                                <g data-paper-data="{&quot;isPrimaryText&quot;:true}" fill-rule="nonzero">

                                                                    <path d="M84.24295,304.40177v-5.50923h-19.24295v0v25.57856v0h19.24295v-5.46988h-13.10409v-4.56479h10.34948v-5.46988h-10.34948v-4.56479z" data-paper-data="{&quot;glyphName&quot;:&quot;E&quot;,&quot;glyphIndex&quot;:0,&quot;firstGlyphOfWord&quot;:true,&quot;word&quot;:1}"></path>

                                                                    <path d="M109.62475,298.89254v0.03935v-0.03935l-7.35876,14.4814l-7.2407,-14.36335v-0.11805h-6.17821v25.57856h6.17821v-12.94669l5.90275,12.94669h2.67591l6.0208,-13.06474v13.06474h6.13886v-25.57856z" data-paper-data="{&quot;glyphName&quot;:&quot;M&quot;,&quot;glyphIndex&quot;:1,&quot;word&quot;:1}"></path>

                                                                    <path d="M143.1917,308.37628c-0.27546,-4.99766 -3.89581,-9.48374 -9.16893,-9.48374c-3.03008,0 -12.43512,0 -12.43512,0v25.57856h6.25691v-5.43053h5.27312c5.35182,0 9.75921,-4.21062 10.07402,-9.48374c0,-0.19676 0,-0.39352 0,-0.59027c0,-0.19676 0,-0.39352 0,-0.59027zM133.03898,312.78367v0h-5.19442v-7.63422h5.27312c2.08564,0.03935 3.73841,1.73147 3.73841,3.81711c0,2.12499 -1.69212,3.81711 -3.81711,3.81711z" data-paper-data="{&quot;glyphName&quot;:&quot;P&quot;,&quot;glyphIndex&quot;:2,&quot;word&quot;:1}"></path>
                                                                    <path d="M160.58512,298.22356c-7.47681,0 -13.49761,6.06015 -13.49761,13.49761c0,7.43746 6.0208,13.45826 13.49761,13.45826c7.43746,0 13.45826,-6.0208 13.45826,-13.45826c0,-7.43746 -6.0208,-13.49761 -13.45826,-13.49761zM160.58512,319.27669c-4.21062,0 -7.59487,-3.38424 -7.59487,-7.55551c0,-4.17127 3.38424,-7.59487 7.59487,-7.59487c4.17127,0 7.55551,3.42359 7.55551,7.59487c0,4.17127 -3.38424,7.55551 -7.55551,7.55551zM167.98323,289.99907h-11.05781l-2.20369,4.56479h11.01846z" data-paper-data="{&quot;glyphName&quot;:&quot;Ó&quot;,&quot;glyphIndex&quot;:3,&quot;word&quot;:1}"></path>

                                                                    <path d="M202.21915,324.4711l-5.62728,-7.71292c2.71526,-1.45601 4.56479,-4.09257 4.56479,-7.79162c0,-5.58793 -3.93516,-10.07402 -9.16893,-10.07402c-3.03008,0 -12.43512,0 -12.43512,0v25.57856h6.25691v-6.37496h4.48609l4.21062,6.37496zM185.80952,305.1888h5.23377c2.08564,0 3.77776,1.69212 3.77776,3.77776c0,2.12499 -1.73147,3.5023 -3.81711,3.5023v0h-5.19442z" data-paper-data="{&quot;glyphName&quot;:&quot;R&quot;,&quot;glyphIndex&quot;:4,&quot;word&quot;:1}"></path>

                                                                    <path d="M206.74459,298.89254v25.57856h6.13886v-25.57856z" data-paper-data="{&quot;glyphName&quot;:&quot;I&quot;,&quot;glyphIndex&quot;:5,&quot;word&quot;:1}"></path>
                                                                    <path d="M231.81158,298.22356c-7.47681,0 -13.49761,6.06015 -13.49761,13.49761c0,7.43746 6.0208,13.45826 13.49761,13.45826c7.43746,0 13.45826,-6.0208 13.45826,-13.45826c0,-7.43746 -6.0208,-13.49761 -13.45826,-13.49761zM231.81158,319.27669c-4.21062,0 -7.59487,-3.38424 -7.59487,-7.55551c0,-4.17127 3.38424,-7.59487 7.59487,-7.59487c4.17127,0 7.55551,3.42359 7.55551,7.59487c0,4.17127 -3.38424,7.55551 -7.55551,7.55551z" data-paper-data="{&quot;glyphName&quot;:&quot;O&quot;,&quot;glyphIndex&quot;:6,&quot;lastGlyphOfWord&quot;:true,&quot;word&quot;:1}"></path>

                                                                    <path d="M279.26965,298.89254h-12.1203v25.57856h12.1203c7.08329,0 12.78928,-5.74534 12.78928,-12.82863c0,-7.04394 -4.95831,-12.74993 -12.78928,-12.74993zM279.85993,318.33225h-6.57172v-13.30085c0,0 4.91895,0 6.57172,0c3.22683,0 6.06015,2.79397 6.06015,6.61107c0,3.81711 -2.87267,6.57172 -6.06015,6.68978z" data-paper-data="{&quot;glyphName&quot;:&quot;D&quot;,&quot;glyphIndex&quot;:7,&quot;firstGlyphOfWord&quot;:true,&quot;word&quot;:2}"></path>

                                                                    <path d="M313.74168,324.4711h6.80783l-12.23836,-25.57856h-4.64349l-12.71058,25.57856h6.92589l1.73147,-3.5023h12.39577zM302.1723,315.97115l3.62035,-8.22449l3.81711,8.22449z" data-paper-data="{&quot;glyphName&quot;:&quot;A&quot;,&quot;glyphIndex&quot;:8,&quot;lastGlyphOfWord&quot;:true,&quot;word&quot;:2}"></path>
                                                                    <path d="M364.26918,308.37628c-0.27546,-4.99766 -3.89581,-9.48374 -9.16893,-9.48374c-3.03008,0 -12.43512,0 -12.43512,0v25.57856h6.25691v-5.43053h5.27312c5.35182,0 9.75921,-4.21062 10.07402,-9.48374c0,-0.19676 0,-0.39352 0,-0.59027c0,-0.19676 0,-0.39352 0,-0.59027zM354.11646,312.78367v0h-5.19442v-7.63422h5.27312c2.08564,0.03935 3.73841,1.73147 3.73841,3.81711c0,2.12499 -1.69212,3.81711 -3.81711,3.81711z" data-paper-data="{&quot;glyphName&quot;:&quot;P&quot;,&quot;glyphIndex&quot;:9,&quot;firstGlyphOfWord&quot;:true,&quot;word&quot;:3}"></path>

                                                                    <path d="M391.57922,324.4711l-5.62728,-7.71292c2.71526,-1.45601 4.56479,-4.09257 4.56479,-7.79162c0,-5.58793 -3.93516,-10.07402 -9.16893,-10.07402c-3.03008,0 -12.43512,0 -12.43512,0v25.57856h6.25691v-6.37496h4.48609l4.21062,6.37496zM375.16959,305.1888h5.23377c2.08564,0 3.77776,1.69212 3.77776,3.77776c0,2.12499 -1.73147,3.5023 -3.81711,3.5023v0h-5.19442z" data-paper-data="{&quot;glyphName&quot;:&quot;R&quot;,&quot;glyphIndex&quot;:10,&quot;word&quot;:3}"></path>

                                                                    <path d="M416.76426,324.4711h6.80783l-12.23836,-25.57856h-4.64349l-12.71058,25.57856h6.92589l1.73147,-3.5023h12.39577zM405.19488,315.97115l3.62035,-8.22449l3.81711,8.22449z" data-paper-data="{&quot;glyphName&quot;:&quot;A&quot;,&quot;glyphIndex&quot;:11,&quot;word&quot;:3}"></path>

                                                                    <path d="M447.02567,316.67948c-2.00693,1.73147 -3.581,2.55786 -6.13886,2.55786c-4.17127,0 -7.55551,-3.38424 -7.55551,-7.51616c0,-4.17127 3.38424,-7.55551 7.55551,-7.55551c2.55786,0 4.44673,1.02314 6.13886,2.59721l4.64349,-2.99072c-2.4398,-3.30554 -6.37496,-5.46988 -10.78235,-5.46988c-7.39811,0 -13.41891,6.0208 -13.41891,13.41891c0,7.39811 6.0208,13.37956 13.41891,13.37956c4.40738,0 8.34255,-2.12499 10.78235,-5.43053zM446.94697,333.36457h-12.63187v-4.52544h12.63187z" data-paper-data="{&quot;glyphName&quot;:&quot;Ç&quot;,&quot;glyphIndex&quot;:12,&quot;word&quot;:3}"></path>

                                                                    <path d="M478.19217,324.4711h6.80783l-12.23836,-25.57856h-4.64349l-12.71058,25.57856h6.92589l1.73147,-3.5023h12.39577zM466.62279,315.97115l3.62035,-8.22449l3.81711,8.22449z" data-paper-data="{&quot;glyphName&quot;:&quot;A&quot;,&quot;glyphIndex&quot;:13,&quot;lastGlyphOfWord&quot;:true,&quot;word&quot;:3}"></path>
                                                                </g>
                                                                <g data-paper-data="{&quot;isIcon&quot;:&quot;true&quot;,&quot;iconType&quot;:&quot;icon&quot;,&quot;rawIconId&quot;:&quot;1975823&quot;,&quot;selectedEffects&quot;:{&quot;container&quot;:&quot;&quot;,&quot;transformation&quot;:&quot;&quot;,&quot;pattern&quot;:&quot;&quot;},&quot;isDetailed&quot;:false,&quot;fillRule&quot;:&quot;evenodd&quot;,&quot;bounds&quot;:{&quot;x&quot;:196.5555648432975,&quot;y&quot;:126.85910374861041,&quot;width&quot;:156.88887031340502,&quot;height&quot;:136.20447035954956},&quot;iconStyle&quot;:&quot;standalone&quot;,&quot;suitableAsStandaloneIcon&quot;:true}" fill-rule="evenodd">

                                                                    <path d="M268.29599,151.7081l-7.82348,-24.84899l-3.00072,0.94476l7.82348,24.84899zM284.06014,132.16993l-2.8409,-1.35179l-8.78917,18.47016l2.8409,1.35186zM347.15638,178.34631l5.6991,21.27055c1.18606,4.42652 0.56787,9.04966 -1.7382,13.01684c-2.26517,3.89011 -5.88471,6.64921 -10.19011,7.77078l-5.18944,1.34966c0.42315,2.39258 0.01416,4.8355 -1.1955,6.96539c-1.3654,2.40674 -3.57551,4.12449 -6.22134,4.83236l-27.27796,7.30831c-0.87461,0.23595 -1.75393,0.34764 -2.62067,0.34764c-4.54764,0 -8.73505,-3.08314 -9.98246,-7.7346l-15.56673,-58.0984l0.04562,-0.01258l-0.06135,-0.23281c-0.97056,-3.6227 1.4818,-8.02404 5.22718,-9.91168l-0.0991,-0.34921c0,-0.00315 -0.00158,-0.00787 -0.00158,-0.01258l-0.10382,-0.41685l0.01416,-0.00315c-1.34495,-5.90674 2.13618,-11.88741 7.96427,-13.60044c0.13213,-0.55685 0.31303,-1.09326 0.52539,-1.61551c0.00944,-0.0236 0.01258,-0.04562 0.02202,-0.06921l0.00944,0.00315c1.30719,-3.17753 4.01438,-5.63303 7.44674,-6.55168c2.88966,-0.77865 5.90989,-0.37753 8.49909,1.11843c2.2164,1.28045 3.89168,3.23101 4.81505,5.5764c1.81843,-0.47191 3.70135,-0.22022 5.32471,0.71573c1.30877,0.75506 2.29506,1.89708 2.89753,3.25146c0.00787,-0.00472 0.01573,-0.00787 0.02202,-0.01258c0.0409,0.08966 0.0645,0.18562 0.0991,0.27685c0.03461,0.08966 0.08495,0.16989 0.11798,0.26113c1.96157,-0.20607 3.91685,0.20135 5.64876,1.20022c2.1582,1.24584 3.70292,3.25933 4.34786,5.66763c0.92495,3.45596 -0.24224,7.09595 -2.85191,9.40359l0.00944,0.01101c-0.02989,0.02674 -0.06135,0.04562 -0.09124,0.07236c-0.08809,0.07393 -0.18247,0.14 -0.27371,0.21236c-0.11169,0.09124 -0.22495,0.18247 -0.34135,0.26899l1.49124,5.57011l13.60201,-3.64314c0.68113,-0.18247 1.38269,-0.27528 2.08427,-0.27528c3.68876,0 6.9355,2.49483 7.89348,6.06876zM261.11116,152.7647l-18.46945,-8.79184l-1.35296,2.842l18.46945,8.79184zM280.95528,170.0171c-0.58517,-0.58674 -1.0854,-1.24427 -1.52742,-1.9364c-1.83573,0.95326 -3.26719,2.82045 -3.58022,4.61528l5.66921,-1.52112l0.81798,3.0391h-0.00158l3.25775,12.15797c0.10854,0.40113 0.36809,0.73932 0.73461,0.95169c0.36652,0.21236 0.79281,0.26742 1.19079,0.16045c0.40269,-0.10854 0.7409,-0.36809 0.95169,-0.73461c0.21079,-0.36652 0.26899,-0.78966 0.16202,-1.19236l-3.66517,-13.67909l-0.40899,-1.51955l25.78987,-6.92134l0.41528,1.54629c1.01146,3.09573 4.2755,4.91887 7.45774,4.06157c0.90292,-0.24224 1.74449,-0.69528 2.44764,-1.30404c1.76022,-1.52427 2.54831,-3.9609 1.92854,-6.27011c-0.42787,-1.59663 -1.45191,-2.93214 -2.88337,-3.75798c-1.14203,-0.66224 -2.4382,-0.9155 -3.72494,-0.77865c-0.13842,1.22854 -0.59146,2.41303 -1.35753,3.43551l-2.52,-1.88606c0.72517,-0.96898 0.96112,-2.19595 0.64809,-3.36472c-0.55843,-2.08741 -2.71663,-3.33011 -4.80404,-2.77325c-0.3445,0.09281 -0.67483,0.23124 -0.97843,0.41056l-0.43887,0.25955c-0.00158,0.02202 -0.00787,0.04405 -0.00944,0.06607c-0.80539,0.64809 -1.35281,1.59663 -1.45977,2.66l-3.13033,-0.31618c0.18405,-1.81843 1.07281,-3.46225 2.40359,-4.62157c-1.3654,-3.94988 -5.55752,-6.2591 -9.66314,-5.1627c-2.55775,0.68427 -4.54764,2.55932 -5.44426,4.96607c-0.10068,0.27371 -0.19348,0.54899 -0.26427,0.83056c-0.03776,0.14 -0.0645,0.28472 -0.09281,0.42944c-0.23595,1.2018 -0.2155,2.45078 0.10382,3.63843c0.20292,0.7582 0.51595,1.4818 0.92966,2.15191l-2.67573,1.6564c-0.57573,-0.93124 -1.00989,-1.93955 -1.29303,-2.99506c-0.17776,-0.66539 -0.27685,-1.34337 -0.32876,-2.02764c-3.63056,1.67056 -5.65191,5.76044 -4.59011,9.74809l0.00472,0.01573c0.1164,0.42629 0.27371,0.84 0.45146,1.23798c0.41371,0.92495 0.98472,1.7791 1.70517,2.50269zM271.9135,187.07664c0.03461,-0.1164 0.06921,-0.23281 0.0991,-0.35236c0,0 0,-0.00158 0.00158,-0.00315c0,-0.00158 0,-0.00315 0.00158,-0.00472l0.10224,-0.42l-0.01416,-0.00315c1.34337,-5.90516 -2.13303,-11.88269 -7.96427,-13.60044c-0.94224,-3.98449 -3.98607,-7.1573 -8.00202,-8.23168c-2.8928,-0.77865 -5.91146,-0.37753 -8.49909,1.11843c-2.2164,1.27887 -3.89325,3.23259 -4.81663,5.5764c-3.57551,-0.94067 -7.25482,1.0555 -8.45819,4.49258c-4.47842,-0.48135 -8.79325,2.37056 -9.99662,6.86471c-0.90292,3.37573 0.19663,6.9182 2.67888,9.2337l-0.0173,0.01887c0.0645,0.05977 0.13842,0.10854 0.2045,0.16674c0.11326,0.0991 0.23124,0.19348 0.35079,0.28944c0.11169,0.08809 0.2155,0.18405 0.32876,0.26742l-1.48966,5.56224l-13.60044,-3.64314c-0.68269,-0.18247 -1.38427,-0.27528 -2.08584,-0.27528c-3.69033,0 -6.93393,2.4964 -7.8919,6.06876l-5.70067,21.27369c-1.18607,4.42652 -0.56629,9.04809 1.73977,13.0137c2.26517,3.89011 5.88314,6.65078 10.19011,7.77078l5.18944,1.34966c-0.42472,2.39258 -0.01416,4.83393 1.1955,6.96539c1.3654,2.40674 3.57551,4.12449 6.22134,4.83236l27.27796,7.30831c0.87461,0.23438 1.75393,0.34764 2.62067,0.34764c4.54764,0 8.73662,-3.08314 9.98246,-7.7346l15.56673,-58.0984l-0.04719,-0.01258l0.06292,-0.23281c0.96898,-3.6227 -1.48337,-8.0209 -5.23033,-9.90854zM227.4061,183.32968c0.79753,-2.97775 3.64786,-4.84809 6.60989,-4.53348c0.14,1.22697 0.59303,2.40988 1.35753,3.43393l2.52,-1.88606c-0.65753,-0.87775 -0.88876,-1.96629 -0.69843,-3.0328c-0.00315,-0.00158 -0.00472,-0.00472 -0.00787,-0.00629c0.01887,-0.10854 0.02989,-0.21708 0.05821,-0.32562c0.55843,-2.08899 2.71506,-3.33325 4.80247,-2.77325c0.23438,0.06292 0.44832,0.17461 0.66539,0.28c1.21281,0.58517 2.08427,1.74764 2.22112,3.11461l3.13033,-0.31303c-0.18247,-1.82 -1.07281,-3.46539 -2.40517,-4.62472c0.63236,-1.83416 1.85775,-3.3773 3.55348,-4.3573c1.86247,-1.07753 4.03168,-1.36224 6.11281,-0.80539c3.09415,0.82742 5.37505,3.38988 5.86584,6.54382c0.16989,1.10112 0.1164,2.24629 -0.17146,3.32225c-0.20135,0.75663 -0.51438,1.48022 -0.92966,2.15033l2.67573,1.6564c0.57573,-0.93281 1.01146,-1.93955 1.29303,-2.99348c0.17618,-0.66224 0.27843,-1.34337 0.33191,-2.03079c3.63213,1.67371 5.65348,5.77146 4.58381,9.76067c-0.11326,0.42629 -0.27371,0.83843 -0.44989,1.2364c-0.41528,0.92966 -0.98629,1.7854 -1.70832,2.50899l2.22899,2.22112c0.5836,-0.58674 1.08224,-1.24427 1.52584,-1.9364c1.83573,0.95169 3.26719,2.82045 3.5818,4.61842l-5.67078,-1.52112l-0.8164,3.0391l-3.25618,12.15797c-0.10854,0.40269 -0.36809,0.7409 -0.73618,0.95169c-0.36337,0.21079 -0.78809,0.26742 -1.19236,0.16045c-0.40269,-0.10697 -0.7409,-0.36809 -0.95011,-0.73461c-0.21236,-0.36495 -0.26899,-0.78966 -0.16202,-1.19236l3.66674,-13.67909l0.40742,-1.51955c-3.8618,-1.03663 -8.24898,-2.26359 -12.64404,-3.4937c-4.53033,-1.26787 -9.07011,-2.5373 -13.05145,-3.60382l-0.38539,1.43775l-0.01258,-0.00315c-0.89348,3.27506 -4.29123,5.22876 -7.56943,4.34944c-0.94067,-0.25169 -1.80584,-0.73461 -2.52629,-1.38427c-1.69888,-1.53214 -2.45708,-3.92157 -1.84832,-6.19303zM327.50605,230.5128c1.82472,-0.48921 3.35056,-1.67685 4.29752,-3.34584c0.95169,-1.67843 1.20022,-3.63056 0.69685,-5.49932l-1.84045,-6.86629l-0.31618,-1.18292l-7.3791,-27.54537l-0.10697,0.02832l-1.92067,-7.59618l-0.80854,-3.01236l-25.83077,6.91977l-0.81483,-3.0391l25.83077,-6.91977l-0.11169,-0.42472c-0.05821,0.0173 -0.11326,0.0409 -0.17146,0.05663c-0.80224,0.2155 -1.61079,0.31775 -2.40674,0.31775c-3.50157,0 -6.74989,-2.0009 -8.33393,-5.1564l-19.88313,5.3373l3.25933,12.16112c0.32562,1.21438 0.15573,2.48539 -0.47506,3.57865c-0.63079,1.09326 -1.64854,1.87506 -2.86292,2.1991c-0.40269,0.11011 -0.81326,0.1636 -1.22224,0.1636c-0.8164,0 -1.62651,-0.21393 -2.35483,-0.63708c-1.09326,-0.63079 -1.87506,-1.64854 -2.1991,-2.86135l-3.25775,-12.15797l-3.0391,0.8164l15.22224,56.81166c1.03663,3.86337 4.96449,6.17258 8.75078,5.1627zM340.13278,217.3591c3.48899,-0.90764 6.42269,-3.14921 8.26314,-6.30944c1.88292,-3.2373 2.38943,-7.00786 1.42045,-10.61797l-5.6991,-21.27055c-0.70314,-2.61595 -3.4937,-4.26292 -6.12539,-3.57078l-13.60201,3.64314l0.80382,2.99662l10.65257,-2.80786c0.43573,-0.11483 0.87932,-0.17303 1.31663,-0.17303c2.14404,0 3.89483,1.35753 4.45641,3.46067l4.07258,15.24583c2.05124,7.67797 -2.13932,14.96426 -9.96359,17.32381l-1.55416,0.47034l0.79281,2.95415zM336.65009,182.46451l-10.64157,2.80472l7.35393,27.43998l1.45977,-0.44045c6.23078,-1.88135 9.45235,-7.43416 7.8337,-13.50134l-4.07258,-15.24426c-0.23753,-0.88405 -1.00989,-1.3009 -1.93326,-1.05865zM328.07943,217.3237l-8.54912,-31.90724l-3.03878,0.8142l8.54912,31.90724zM317.45216,220.17765l-8.54959,-31.90881l-3.03878,0.8142l8.54959,31.90881zM258.52069,254.51571c-1.03506,3.86337 -4.96607,6.17573 -8.75078,5.1627l-27.27796,-7.30831c-1.82472,-0.48921 -3.35213,-1.67685 -4.29752,-3.34584c-0.95011,-1.67685 -1.20022,-3.63056 -0.69843,-5.49932l1.84988,-6.89932l0.30674,-1.14989l7.38067,-27.54537l0.10697,0.02832l1.92225,-7.60404l0.80539,-3.00449l25.83077,6.91977l0.81483,-3.0391l-25.83077,-6.91977l0.11326,-0.42472c0.05663,0.0173 0.11169,0.0409 0.16989,0.05663c0.80382,0.2155 1.60921,0.31775 2.40674,0.31775c3.56607,0 6.87887,-2.06696 8.42831,-5.32471c3.22157,0.8809 6.68382,1.84832 10.1492,2.8173c3.28921,0.92022 6.57528,1.83888 9.63954,2.67888l-3.2609,12.16898c-0.32562,1.21281 -0.1573,2.48539 0.47506,3.57865c0.63236,1.09326 1.64854,1.87506 2.86135,2.1991c0.40584,0.10854 0.8164,0.1636 1.22382,0.1636c0.81955,0 1.62651,-0.2155 2.3564,-0.63708c1.09326,-0.63079 1.87348,-1.64854 2.1991,-2.86135l3.25618,-12.15797l3.0391,0.8164zM298.26824,191.11839l8.54959,31.90866l-3.03878,0.8142l-8.54959,-31.90866zM287.62305,193.96936l-3.03878,0.8142l8.54943,31.90881l3.03878,-0.8142zM201.60364,232.90538c-1.88292,-3.23573 -2.38786,-7.00471 -1.42045,-10.6164l5.70067,-21.27055c0.58989,-2.20067 2.58606,-3.73752 4.85281,-3.73752c0.42629,0 0.85573,0.05663 1.27258,0.16674l13.60044,3.64314l-0.80224,2.99662l-10.65257,-2.80786c-0.4373,-0.11483 -0.8809,-0.17461 -1.3182,-0.17461c-2.14404,0 -3.89483,1.3591 -4.45641,3.46382l-4.07258,15.24583c-2.05124,7.6764 2.13932,14.96269 9.96359,17.32381l1.55416,0.47034l-0.79124,2.95415l-5.16741,-1.34495c-3.48899,-0.90921 -6.42269,-3.15078 -8.26314,-6.31258zM223.99262,207.12651l-7.35235,27.44156l-1.46135,-0.44045c-6.23392,-1.88135 -9.45393,-7.43416 -7.83213,-13.50134l4.07258,-15.24269c0.23595,-0.88561 1.00517,-1.29932 1.93169,-1.06022zM233.50632,208.09063l-3.03878,-0.8142l-8.54912,31.90724l3.03878,0.8142zM235.59515,242.85435l8.54943,-31.90881l-3.03878,-0.8142l-8.54943,31.90881zM254.78002,213.79602l-8.54912,31.90724l-3.03878,-0.8142l8.54912,-31.90724zM253.82331,247.7405l3.03878,0.8142l8.54959,-31.90866l-3.03878,-0.8142zM293.93579,229.74249l0.8142,3.03862l34.9627,-9.36773l-0.8142,-3.03878zM220.28293,245.27068l34.96113,9.36741l0.8142,-3.03878l-34.96113,-9.36741z" data-paper-data="{&quot;isPathIcon&quot;:true}" style="fill: rgb(255, 255, 255);"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>

                                                <div class="second-tile" style="background-image: url('storage/fotos/photo-03.jpeg'); height: 387.422px; top: 387.422px;">
                                                    <div class="image-clone" style="filter: grayscale(100%) saturate(0%) sepia(0.6) hue-rotate(8deg) saturate(180%) brightness(95%); background-image: url('storage/fotos/photo-03.jpeg');">

                                                    </div>
                                                    <div class="darkening-tile" style="background: rgba(255, 198, 0, 0.2);">

                                                    </div>
                                                </div>

                                                <div class="third-tile" style="background-image: url('storage/fotos/photo-02.jpeg'); height: 387.422px; top: 387.422px;">
                                                    <div class="image-clone" style="filter: grayscale(100%) saturate(0%) sepia(0.6) hue-rotate(8deg) saturate(180%) brightness(95%); background-image: url('storage/fotos/photo-02.jpeg');">

                                                    </div>
                                                    <div class="darkening-tile" style="background: rgba(255, 198, 0, 0.2);">

                                                    </div>
                                                </div>

                                                <div class="scroll-indicator">
                                                    <span class="glyphicon glyphicon-menu-down"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-row typography">
                                            <div class="section-header">
                                                <h2 class="section-title">Tipografia</h2>
                                            </div>
                                            <div class="item limited-width item-fonts">
                                                <div class="font-row primary">
                                                    <div class="font-preview">
                                                        Empório da Praça
                                                    </div>

                                                    <div class="font-description">
                                                        <p>As fontes Sans serif são ao mesmo tempo mínimas e envolventes. São utilizadas por marcas que querem demonstrar uma atitude simples e sem absurdos. Este tipo de letra não tem elementos decorativos que distraem o olhar e transmite sentimentos de simplicidade, confiança e inovação. O visual limpo e moderno dessa fonte faz com que ela seja verdadeiramente versátil.</p>
                                                    </div>
                                                </div>

                                                <div class="font-row secondary">
                                                    <div class="font-preview">
                                                        Empório da Praça.
                                                    </div>

                                                    <div class="font-description">
                                                        <p>As fontes Sans serif são ao mesmo tempo mínimas e envolventes. São utilizadas por marcas que querem demonstrar uma atitude simples e sem absurdos. Este tipo de letra não tem elementos decorativos que distraem o olhar e transmite sentimentos de simplicidade, confiança e inovação. O visual limpo e moderno dessa fonte faz com que ela seja verdadeiramente versátil.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-row dream-big">
                                            <div class="section-header">
                                                <h2 class="section-title">If you can dream it, you can do it</h2>
                                                <p class="section-intro">Dê o primeiro passo em sua nova vida e inicie seus negócios com um logotipo espetacular. Use o código do cupom <strong>DISNEY</strong> para obter um desconto de 10% em todos os pacotes.</p>
                                            </div>

                                            <div class="item-row envision-images">
                                                <div class="section-header">
                                                    <h2 class="section-title">Uma jornada de milhares de quilômetros começa com um simples passo</h2>
                                                </div>

                                                <div class="item item-image-fade slogan-fade">
                                                    <div class="section-header">
                                                        <h2 class="section-title">Viva seus sonhos</h2>
                                                    </div>

                                                    <div id="slider">
                                                        <img class="selected" src="{{ url('storage/fotos/photo-01.jpeg') }}">
                                                        <img src="{{ url('storage/fotos/photo-02.jpeg') }}">
                                                        <img src="{{ url('storage/fotos/photo-03.jpeg') }}">
                                                        <img src="{{ url('storage/fotos/photo-04.jpeg') }}">
                                                        <img src="{{ url('storage/fotos/photo-05.jpeg') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-row store-front">
                                                <div class="section-header">
                                                    <h2 class="section-title">Seja seu próprio chefe</h2>
                                                    <p class="section-intro">O segredo da felicidade é a liberdade, mas o segredo da liberdade é a coragem e, sem dúvida, requer uma boa parte dela para dar o passo para o autoemprego. A beleza do empreendedorismo é que você toma suas próprias decisões todos os dias e determina sua felicidade por si mesmo.</p>
                                                </div>
                                            </div>

                                            <div class="item-row package">
                                                <div class="section-header">
                                                    <h2 class="section-title">
                                                        <strong>Tudo </strong>
                                                        <span class="chain">o que </span>
                                                        <strong>você precisa</strong>
                                                    </h2>
                                                </div>
                                                <ul class="package-list">
                                                    <li>
                                                        <span class="glyphicon glyphicon-ok" style="color: rgb(255, 198, 0);"></span>
                                                        <span class="text">Arquivos Otimizados Para o Seu Site, Assinatura de E-mail e Mídias Sociais</span>
                                                    </li>
                                                    <li>
                                                        <span class="glyphicon glyphicon-ok" style="color: rgb(255, 198, 0);"></span>
                                                        <span class="text">Arquivos PDF para cartões de visita e outros materiais impressos</span>
                                                    </li>
                                                    <li>
                                                        <span class="glyphicon glyphicon-ok" style="color: rgb(255, 198, 0);"></span>
                                                        <span class="text">Use para camisetas e outros itens de publicidade</span>
                                                    </li>
                                                    <li>
                                                        <span class="glyphicon glyphicon-ok" style="color: rgb(255, 198, 0);"></span>
                                                        <span class="text">Animação de logotipo (incluído no PREMIUM)</span>
                                                    </li>
                                                    <li>
                                                        <span class="glyphicon glyphicon-ok" style="color: rgb(255, 198, 0);"></span>
                                                        <span class="text">Garantia de 100% de satisfação</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="item limited-width item-drawing">
                                                <div class="section-header">
                                                    <h2 class="section-title">O segredo de ficar à frente é começar</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
<script>
    let time = 3000,
        currentImageIndex = 0,
        images = document
                .querySelectorAll("#slider img")
        max = images.length;

    function nextImage(){

        images[currentImageIndex]
            .classList.remove("selected")

        currentImageIndex++

        if (currentImageIndex >= max)
            currentImageIndex = 0

        images[currentImageIndex]
            .classList.add("selected")
    }

    function start(){
        setInterval(() => {
            //troca de imagems
            nextImage()
        }, time)
    }
    window.addEventListener("load", start)
</script>
