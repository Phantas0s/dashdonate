
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>Bootstrap TLDR</title>
    <meta name="description" content="All Bootstrap's components in one page. Briefly presented with their own CSS selectors.">
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="{{ asset('ui_kit/opensans.css') }}">
	<link rel="stylesheet" href="{{ asset('ui_kit/fonts/fontawesome.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui_kit/styles_1.css') }}">
	<link rel="stylesheet" href="{{ asset('ui_kit/styles_main.css') }}">
	<script defer src="{{ asset('js/jquery.js') }}"></script>
    <script defer src="{{ asset('ui_kit/modernizr.js') }}"></script>
  </head>
  <body data-spy="scroll" data-target="#sidebar">
    <!--[if lt IE 10]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-static-top">
 	 <div class="container">
 	   <div class="navbar-header">
 		 <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" type="button">
 		   <span class="icon-bar"></span>
 		   <span class="icon-bar"></span>
 		   <span class="icon-bar"></span>
 		 </button>
 		 <a class="navbar-brand" href="{{ route('ui_kit') }}">Theme</a>
 		 <a class="navbar-brand" href="{{ route('ui_kit_fontawesome_cheatsheet') }}">Font Awesome Cheatsheet</a>
 	   </div>
 	   <div class="collapse navbar-collapse" id="navbar-collapse">
 		 <ul class="nav navbar-nav">
 		   <li><a href="#css">CSS</a></li>
 		   <li><a href="#components">Components</a></li>
 		   <li><a href="#javascript">Javascript</a></li>
 		 </ul>
 	   </div><!--/.nav-collapse -->
 	 </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p><strong>.container .row .col-md-9</strong></p>

<blockquote>
  <p>Bootstrap TLDR</p>
  <footer>
    <span class="fas fa-heart"></span>
    <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> v3.3.0
  </footer>
  <footer>
    <span class="fas fa-star"></span>
    All Bootstrap's components in one page
  </footer>
  <footer>
    <span class="fas fa-bolt"></span>
    Briefly presented with their own CSS selectors
  </footer>
</blockquote>

<h1 class="page-header" id="css">CSS</h1>

<h2 id="typography">Typography</h2>
<!-- Headings -->
<div class="media js-html-inspector" data-replace-target="> div">
  <div class="media-left media-middle">
    <h1>
      h1 <small>small</small>
    </h1>
  </div>
  <div class="media-left media-middle">
    <div class="h2">
      .h2 <small>small</small>
    </div>
  </div>
  <div class="media-left media-middle">
    <h3>
      h3 <small>small</small>
    </h3>
  </div>
  <div class="media-left media-middle">
    <div class="h4">
      .h4 <small>small</small>
    </div>
  </div>
  <div class="media-left media-middle">
    <h5>
      h5 <small>small</small>
    </h5>
  </div>
  <div class="media-left media-middle">
    <div class="h6">
      .h6 <small>small</small>
    </div>
  </div>
</div>

<div class="row js-html-inspector" data-replace-target="> div" data-remove-target="br">
  <div class="col-sm-2 col-xs-4">
    <!-- Lead body copy -->
    <span class="lead">.lead</span><br>
    <!-- Bold -->
    <b>b (bold)</b><br>
    <strong>strong</strong>
  </div>

  <div class="col-sm-2 col-xs-4">
    <!-- Small text -->
    <small>small</small><br>
    <span class="small">.small</span>
  </div>

  <div class="col-sm-2 col-xs-4">
    <!-- Italics -->
    <em>em</em><br>
    <i>i (italic)</i>
  </div>

  <!-- Inline text elements -->
  <div class="col-sm-2 col-xs-4">
    <!-- Deleted text -->
    <del>del</del><br>
    <!-- Strikethrough text -->
    <s>s (strikethrough)</s><br>
    <!-- Inserted text -->
    <ins>ins</ins><br>
    <!-- Underlined text -->
    <u>u (underline)</u>
  </div>

  <div class="col-sm-2 col-xs-4">
    <!-- Inline code -->
    <code>code</code><br>
    <!-- Variables -->
    <var>var</var><br>
    <!-- Sample output from a program -->
    <samp>samp</samp>
  </div>

  <div class="col-sm-2 col-xs-4">
    <!-- Marked text -->
    <mark>mark</mark><br>
    <!-- User input -->
    <kbd>kbd</kbd>
  </div>
</div><br>

<!-- Alignment classes -->
<div class="row js-html-inspector" data-replace-target="> div">
  <div class="col-xs-4">
    <p class="text-left">.text-left</p>
  </div>
  <div class="col-xs-4">
    <p class="text-center">.text-center</p>
  </div>
  <div class="col-xs-4">
    <p class="text-right">.text-right</p>
  </div>
  <div class="col-xs-12">
    <div class="text-justify">.text-justify</div>
  </div>
</div><br>

<!-- Transformation classes -->
<div class="js-html-inspector">
  <span class="text-lowercase">.text-lowercase</span>
  <span class="text-uppercase">.text-uppercase</span>
  <span class="text-capitalize">.text-capitalize</span>
</div><br>

<!-- Abbreviations -->
<div class="js-html-inspector">
  <abbr title="abbreviation">abbr</abbr>
  <abbr class="initialism" title="abbreviation.initialism">
    .initialism
  </abbr>
</div><br>

<!-- Addresses -->
<div class="js-html-inspector">
  <address>
    <strong>address strong</strong><br>
    address<br>
    <a href="mailto:#">first.last@example.com</a>
  </address>
</div>

<!-- Blockquotes -->
<div class="row">
  <div class="col-sm-6 js-html-inspector">
    <blockquote>
      <p>blockquote p</p>
      <footer>
        footer
        <cite title="Cite">cite</cite>
      </footer>
    </blockquote>
  </div>
  <div class="col-sm-6 js-html-inspector">
    <blockquote class="blockquote-reverse">
      <p>blockquote.blockquote-reverse p</p>
      <footer>
        Someone famous in
        <cite title="Source Title">Source Title</cite>
      </footer>
    </blockquote>
  </div>
</div>

<div class="row">
  <!-- Unordered list -->
  <div class="col-sm-4 col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>ul</strong></p>
    <ul>
      <li>li</li>
      <li>
        List item
        <ul>
          <li>ul li</li>
          <li>List item</li>
        </ul>
      </li>
      <li>List item</li>
    </ul>
  </div>

  <!-- Ordered list -->
  <div class="col-sm-4 col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>ol</strong></p>
    <ol>
      <li>List item</li>
      <li>
        List item
        <ol>
          <li>List item</li>
          <li>List item</li>
        </ol>
      </li>
      <li>List item</li>
    </ol>
  </div>

  <!-- Unstyled list -->
  <div class="col-sm-4 col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>ul.list-unstyled</strong></p>
    <ul class="list-unstyled">
      <li>List item</li>
      <li>
        List item
        <ul>
          <li>List item</li>
          <li>List item</li>
        </ul>
      </li>
      <li>List item</li>
    </ul>
  </div>

  <!-- Inline list -->
  <div class="col-sm-4 col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>ul.list-inline</strong></p>
    <ul class="list-inline">
      <li>List item</li>
      <li>List item</li>
      <li>List item</li>
    </ul>
  </div>
</div>

<div class="row">
  <!-- Description -->
  <div class="col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>dl</strong></p>
    <dl>
      <dt>dt</dt>
      <dd>dd</dd>
      <dt>Term</dt>
      <dd>Description<br>Description</dd>
    </dl>
  </div>

  <!-- Horizontal description -->
  <div class="col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>dl.dl-horizontal</strong></p>
    <dl class="dl-horizontal">
      <dt>Term</dt>
      <dd>Description</dd>
      <dt>Long term will be truncated</dt>
      <dd>Description<br>Description</dd>
    </dl>
  </div>
</div>


<h2 id="tables">Tables</h2>
<!-- Basic example -->
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>table.table</strong></p>
  <table class="table">
    <thead>
      <tr>
        <th>thead tr th</th>
        <th>th</th><th>Header</th><th>Header</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>tbody tr td</td>
        <td>td</td><td>Data</td><td>Data</td>
      </tr>
      <tr><td>Data</td><td>Data</td><td>Data</td><td>Data</td></tr>
    </tbody>
  </table>
</div>

<div class="row">
  <!-- Striped rows -->
  <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.table-striped</strong></p>
    <table class="table table-striped">
      <thead>
        <tr><th>Header</th><th>Header</th></tr>
      </thead>
      <tbody>
        <tr><td>Data</td><td>Data</td></tr>
        <tr><td>Data</td><td>Data</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Bordered table -->
  <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.table-bordered</strong></p>
    <table class="table table-bordered">
      <thead>
        <tr><th>Header</th><th>Header</th></tr>
      </thead>
      <tbody>
        <tr><td>Data</td><td>Data</td></tr>
        <tr><td>Data</td><td>Data</td></tr>
      </tbody>
    </table>
  </div>
</div>

<div class="row">
  <!-- Hover rows -->
  <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.table-hover</strong></p>
    <table class="table table-hover">
      <thead>
        <tr><th>Header</th><th>Header</th></tr>
      </thead>
      <tbody>
        <tr><td>Data</td><td>Data</td></tr>
        <tr><td>Data</td><td>Data</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Condensed table -->
  <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.table-condensed</strong></p>
    <table class="table table-condensed">
      <thead>
        <tr><th>Header</th><th>Header</th></tr>
      </thead>
      <tbody>
        <tr><td>Data</td><td>Data</td></tr>
        <tr><td>Data</td><td>Data</td></tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Responsive tables and Contextual classes -->
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>div.table-responsive table.table</strong></p>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Header</th>
          <th>Header</th><th>Header</th><th>Header</th><th>Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="active">td.active</td>
          <td class="success">td.success</td>
          <td class="info">td.info</td>
          <td class="warning">td.warning</td>
          <td class="danger">td.danger</td>
        </tr>
        <tr class="active">
          <td>tr.active td</td>
          <td colspan="4">
            Applies the hover color to a particular row or cell
          </td>
        </tr>
        <tr class="success">
          <td>tr.success td</td>
          <td colspan="4">
            Indicates a successful or positive action
          </td>
        </tr>
        <tr class="info">
          <td>tr.info td</td>
          <td colspan="4">
            Indicates a neutral informative change or action
          </td>
        </tr>
        <tr class="warning">
          <td>tr.warning td</td>
          <td colspan="4">
            Indicates a warning that might need attention
          </td>
        </tr>
        <tr class="danger">
          <td>tr.danger td</td>
          <td colspan="4">
            Indicates a dangerous or potentially negative action
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<h2 id="forms">Forms</h2>
<!-- Basic example -->
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>form</strong></p>
  <form>
    <!-- Inputs with different sizes -->
    <div class="form-group">
      <input class="form-control" type="text" placeholder="input.form-control">
    </div>
    <div class="form-group">
      <input class="form-control input-lg" type="text" placeholder=".input-lg">
    </div>
    <div class="form-group">
      <input class="form-control input-sm" type="text" placeholder=".input-sm">
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <textarea class="form-control" rows="3">textarea.form-control</textarea>
    </div>

    <!-- File input -->
    <div class="form-group">
      <label for="example-file-input">input[type="file"]</label>
      <input id="example-file-input" type="file">
      <span class="help-block">
        .help-block: Wrap labels and controls in
        <code>.form-group</code>
        for optimum spacing.
      </span>
    </div>

    <!-- Button -->
    <div class="form-group">
      <button class="btn btn-default" type="submit">Submit</button>
    </div>
  </form>
</div>

<!-- Inline form -->
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>form.form-inline</strong></p>
  <form class="form-inline">
    <div class="form-group">
      <input class="form-control" id="example-text-input-inline" type="text" placeholder="input.form-control">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox">
        .checkbox input[type="checkbox"]
      </label>
    </div>
    <button class="btn btn-default" type="submit">Submit</button>
  </form>
</div>
<br>

<!-- Horizontal form -->
<div class="js-html-inspector" data-remove-target='["p:not([class])","br"]'>
  <p><strong>form.form-horizontal</strong></p>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-3 control-label" for="example-text-input-horizontal">
        label.control-label
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="example-text-input-horizontal" type="text" placeholder="input.form-control">
      </div>
    </div>
    <div class="form-group form-group-lg">
      <label class="col-sm-3 control-label" for="example-text-input-horizontal-lg">
        label.control-label
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="example-text-input-horizontal-lg" type="text" placeholder=".form-group-lg input.form-control">
      </div>
    </div>
    <div class="form-group form-group-sm">
      <label class="col-sm-3 control-label" for="example-text-input-horizontal-sm">
        label.control-label
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="example-text-input-horizontal-sm" type="text" placeholder=".form-group-sm input.form-control">
      </div>
    </div>

      <!-- Checkbox -->
      <div class="form-group">
        <label class="col-sm-3 control-label">Checkboxes</label>
        <div class="col-sm-9">
          <div class="checkbox">
            <label>
              <input type="checkbox">
              .checkbox input[type="checkbox"]
            </label>
          </div>
        </div>
      </div>
      <!-- Inline checkboxes -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <label class="checkbox-inline">
            <input type="checkbox" value="option1">
            label.checkbox-inline Checkbox #1
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" value="option2">
            Checkbox #2
          </label>
          <label class="checkbox-inline disabled">
            <input type="checkbox" value="option3" disabled>
            Disabled checkbox #3
          </label>
        </div>
      </div>

      <!-- Radio -->
      <div class="form-group">
        <label class="col-sm-3 control-label">Radios</label>
        <div class="col-sm-9">
          <div class="radio">
            <label>
              <input name="optionsRadios" type="radio" value="option1" checked>
              .radio input[type="radio"]
            </label>
          </div>
        </div>
      </div>
      <!-- Inline radios -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <label class="radio-inline">
            <input name="optionsRadios2" type="radio" value="option1" checked>
            label.radio-inline Radio #1
          </label>
          <label class="radio-inline">
            <input name="optionsRadios2" type="radio" value="option2">
            Radio #2
          </label>
          <label class="radio-inline disabled">
            <input name="optionsRadios2" type="radio" value="option3" disabled>
            Disabled radio #3
          </label>
        </div>
      </div>

      <!-- Select -->
      <div class="form-group">
        <label class="col-sm-3 control-label">select.form-control</label>
        <div class="col-sm-4">
          <select class="form-control">
            <option>option</option>
            <option>Option #2</option>
            <option>Option #3</option>
          </select>
          <br>
          <select class="form-control" disabled>
            <option>select[disabled]</option>
          </select>
        </div>
        <div class="col-sm-5">
          <br class="visible-xs">
          <p><strong>select.form-control[multiple]</strong></p>
          <select class="form-control" multiple>
            <option>Option #1</option>
            <option selected>option[selected]</option>
            <option>Option #3</option>
            <option selected>Selected option #4</option>
            <option>Option #5</option>
          </select>
        </div>
      </div>

      <!-- Static control -->
      <div class="form-group">
        <label class="col-sm-3 control-label">Static control</label>
        <div class="col-sm-9">
          <p class="form-control-static">p.form-control-static</p>
        </div>
      </div>

      <!-- Disabled input -->
      <div class="form-group">
        <label class="col-sm-3 control-label">Disabled input</label>
        <div class="col-sm-9">
          <input class="form-control" type="text" placeholder="input.form-control[disabled]" disabled>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button class="btn btn-default" type="submit">Submit</button>
        </div>
      </div>
  </form>
</div>

<!-- Validation states -->
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>Validation styles on form controls</strong></p>
  <form class="form-horizontal">
    <!-- Success state -->
    <div class="form-group has-success">
      <label class="col-sm-3 control-label" for="input-success">
        .has-success
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="input-success" type="text" placeholder="input.form-control">
      </div>
    </div>
    <div class="form-group has-success has-feedback">
      <label class="col-sm-3 control-label" for="input-success-2">
        .has-feedback
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="input-success-2" type="text" placeholder=".form-control-feedback">
        <span class="fas fa-check-circle form-control-feedback"></span>
      </div>
    </div>

    <!-- Warning state -->
    <div class="form-group has-warning">
      <label class="col-sm-3 control-label" for="input-warning">
        .has-warning
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="input-warning" type="text" placeholder="input.form-control">
      </div>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="col-sm-3 control-label" for="input-warning-2">
        .has-feedback
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="input-warning-2" type="text" placeholder=".form-control-feedback">
        <span class="fas fa-exclamation-triangle form-control-feedback"></span>
      </div>
    </div>

    <!-- Error state -->
    <div class="form-group has-error">
      <label class="col-sm-3 control-label" for="input-error">
        .has-error
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="input-error" type="text" placeholder="input.form-control">
      </div>
    </div>
    <div class="form-group has-error has-feedback">
      <label class="col-sm-3 control-label" for="input-error-2">
        .has-feedback
      </label>
      <div class="col-sm-9">
        <input class="form-control" id="input-error-2" type="text" placeholder=".form-control-feedback">
        <span class="fas fa-times form-control-feedback"></span>
      </div>
    </div>
  </form>
</div>


<h2 id="buttons">Buttons</h2>
<!-- Styled buttons -->
<p class="bse-buttons js-html-inspector">
  <button class="btn btn-default" type="button">
    button.btn.btn-default
  </button>
  <button class="btn btn-primary" type="button">.btn-primary</button>
  <button class="btn btn-success" type="button">.btn-success</button>
  <button class="btn btn-info" type="button">.btn-info</button>
  <button class="btn btn-warning" type="button">.btn-warning</button>
  <button class="btn btn-danger" type="button">.btn-danger</button>
  <button class="btn btn-link" type="button">.btn-link</button>
</p>

<!-- Button sizes -->
<p class="bse-buttons js-html-inspector">
  <button class="btn btn-default btn-lg" type="button">.btn-lg</button>
  <button class="btn btn-default" type="button">Default button size</button>
  <button class="btn btn-default btn-sm" type="button">.btn-sm</button>
  <button class="btn btn-default btn-xs" type="button">.btn-xs</button>
</p>

<!-- Block level buttons -->
<p class="js-html-inspector">
  <button class="btn btn-primary btn-block" type="button">.btn-block</button>
  <button class="btn btn-default btn-block" type="button">.btn-block</button>
</p>

<!-- Button tags -->
<p class="bse-buttons js-html-inspector">
  <a class="btn btn-default" href="#">a</a>
  <button class="btn btn-default" type="button">button</button>
  <input class="btn btn-default" type="button" value="input[type='button']">
  <input class="btn btn-default" type="submit" value="input[type='submit']">
</p>

<p class="bse-buttons js-html-inspector">
  <!-- Active state -->
  <a class="btn btn-default active" href="#">a.active</a>
  <button class="btn btn-default active" type="button">button.active</button>
  <!-- Disabled state -->
  <a class="btn btn-default disabled" href="#">a.disabled</a>
  <button class="btn btn-default" type="button" disabled="disabled">button[disabled]</button>
</p>


<h2 id="images">Images</h2>
<div class="row bs-thumbnails js-html-inspector" data-remove-target="p" data-replace-target="> div">
  <div class="col-sm-3 col-xs-6">
    <p><strong>.img-rounded</strong></p>
    <img class="img-rounded" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt=".img-rounded">
  </div>
  <div class="col-sm-3 col-xs-6">
    <p><strong>.img-circle</strong></p>
    <img class="img-circle" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt=".img-circle">
  </div>
  <div class="col-sm-3 col-xs-6">
    <p><strong>.img-thumbnail</strong></p>
    <img class="img-thumbnail" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt=".img-thumbnail">
  </div>
  <div class="col-sm-3 col-xs-6">
    <p><strong>.img-responsive</strong></p>
    <img class="img-responsive" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt=".img-responsive">
  </div>
</div>


<h2 id="helper-classes">Helper classes</h2>
<!-- Contextual colors -->
<p class="js-html-inspector">
  <span class="text-muted">.text-muted</span>
  <span class="text-primary">.text-primary</span>
  <span class="text-success">.text-success</span>
  <span class="text-info">.text-info</span>
  <span class="text-warning">.text-warning</span>
  <span class="text-danger">.text-danger</span>
</p>

<!-- Contextual backgrounds -->
<p class="js-html-inspector">
  <span class="bg-primary">.bg-primary</span>
  <span class="bg-success">.bg-success</span>
  <span class="bg-info">.bg-info</span>
  <span class="bg-warning">.bg-warning</span>
  <span class="bg-danger">.bg-danger</span>
</p>

<!-- Close icon -->
<p class="js-html-inspector">
  button.close &rarr; <button class="close" type="button">&times;</button>
</p>

<!-- Carets -->
<p class="js-html-inspector">
  .caret <span class="caret"></span>
</p>

<!-- Clearfix and floats -->
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.clearfix</strong></p>
  <div class="clearfix">
    <div class="pull-left">.pull-left</div>
    <div class="pull-right">.pull-right</div>
  </div>
</div>
<br>

<p>
  <!-- Center content blocks -->
  <code>.center-block</code>: Set an element to <code>display: block</code> and center via <code>margin</code>.<br>
</p>

<p>
  <!-- Showing and hiding content -->
  <code>.show</code> and <code>.hidden</code>: Showing and hiding content.<br>
  <code>.invisible</code>: Toggle only the visibility of an element.<br>
</p>

<p>
  <!-- Screen reader content -->
  <code>.sr-only</code>: Hide an element to all devices <b>except screen readers</b>.<br>
</p>

<p>
  <!-- Image replacement -->
  <code>.text-hide</code>: Replace an element's text content with a background image.
</p>

<h1 id="components">Components</h1>


<h2 id="fontawesome">Font Awesome</h2>
<p>
  <a href="http://fontawesome.com/" target="_blank">Font Awesome</a> classes:
  <code>far fa-*</code>, <code>fas fa-*</code> or <code>fab fa-*</code>.
  <p>All Font Awesome icons (for version 5.2) can be found in <a href='{{ route('ui_kit_fontawesome_cheatsheet') }}'>this cheatsheet</a>.</p>
</p>



<h2 id="dropdowns">Dropdowns</h2>
<div class="clearfix js-html-inspector" data-remove-target="p:first">
  <p><strong>.dropdown ul.dropdown-menu</strong></p>
  <div class="dropdown">
    <!-- Only use inline style for static display -->
    <ul class="dropdown-menu" style="display: block; position: static;">
      <li class="dropdown-header">li.dropdown-header</li>
      <li><a href="#">li a</a></li>
      <li><a href="#">Another link</a></li>
      <li class="disabled"><a href="#">li.disabled a</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Dropdown header</li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div>
</div>


<h2 id="button-groups">Button groups</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.btn-group</strong></p>
  <div class="btn-group">
    <button class="btn btn-default" type="button">#1</button>
    <button class="btn btn-default" type="button">#2</button>
    <button class="btn btn-default" type="button">#3</button>
  </div>
</div><br>

<div class="js-html-inspector" data-remove-target="p:first" data-remove-class-target="div.bse-buttons">
  <p><strong>.btn-toolbar .btn-group</strong></p>
  <div class="btn-toolbar bse-buttons">
    <!-- Large button group -->
    <div class="btn-group btn-group-lg">
      <button class="btn btn-default" type="button">.btn-group-lg #1</button>
      <button class="btn btn-default" type="button">#2</button>
      <button class="btn btn-default" type="button">#3</button>
    </div>

    <!-- Small button group -->
    <div class="btn-group btn-group-sm">
      <button class="btn btn-default" type="button">.btn-group-sm #1</button>
      <button class="btn btn-default" type="button">#2</button>
      <button class="btn btn-default" type="button">#3</button>
    </div>

    <!-- Extra small button group -->
    <div class="btn-group btn-group-xs">
      <button class="btn btn-default" type="button">.btn-group-xs #1</button>
      <button class="btn btn-default" type="button">#2</button>
      <button class="btn btn-default" type="button">#3</button>
    </div>
  </div>
</div><br>

<div class="btn-toolbar bse-buttons js-html-inspector">
  <!-- Button group with dropdown -->
  <div class="btn-group">
    <button class="btn btn-default" type="button">#1</button>
    <button class="btn btn-default" type="button">#2</button>
    <div class="btn-group">
      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
        button.dropdown-toggle
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Link #1</a></li>
        <li><a href="#">Link #2</a></li>
      </ul>
    </div>
  </div>

  &nbsp;<!-- Only .btn-group has left padding inside .btn-toolbar -->

  <!-- Vertical button group with dropdown -->
  <div class="btn-group-vertical">
    <button class="btn btn-default" type="button">.btn-group-vertical button</button>
    <div class="btn-group">
      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Link #1</a></li>
        <li><a href="#">Link #2</a></li>
      </ul>
    </div>
    <button class="btn btn-default" type="button">#3</button>
  </div>
</div><br>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.btn-group.btn-group-justified</strong></p>
  <div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-default">#1</a>
    <a href="#" class="btn btn-default">#2</a>
    <a href="#" class="btn btn-default">#3</a>
  </div>
</div><br>

<div class="js-html-inspector" data-remove-target="p:first" data-remove-class-target="div.bse-buttons">
  <p><strong>.btn-group.dropup</strong></p>
  <!-- Split button dropup -->
  <div class="btn-group dropup bse-buttons">
    <button class="btn btn-default" type="button">.dropdown-menu &rarr;</button>
    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#">Link #1</a></li>
      <li><a href="#">Link #2</a></li>
    </ul>
  </div>

  <!-- Split button right dropup -->
  <div class="btn-group dropup">
    <button class="btn btn-default" type="button">.dropdown-menu-right &rarr;</button>
    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="#">Link #1</a></li>
      <li><a href="#">Link #2</a></li>
    </ul>
  </div>
</div>


<h2 id="input-groups">Input groups</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.input-group</strong></p>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon">.input-group-addon</span>
      <input class="form-control" type="text" placeholder="input.form-control">
      <span class="input-group-addon">
        <input type="checkbox">
      </span>
      <span class="input-group-addon">
        <input type="radio">
      </span>
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <input class="form-control" type="text" placeholder="input.form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">
          .input-group-btn button
        </button>
      </span>
    </div>
  </div>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.input-group-lg</strong></p>
  <div class="form-group">
    <div class="input-group input-group-lg">
      <span class="input-group-addon">Addon</span>
      <input class="form-control input-lg" type="text" placeholder=".input-lg">
      <span class="input-group-addon">Addon</span>
    </div>
  </div>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.input-group-sm</strong></p>
  <div class="form-group">
    <div class="input-group input-group-sm">
      <span class="input-group-addon">Addon</span>
      <input class="form-control input-sm" type="text" placeholder=".input-sm">
      <span class="input-group-addon">Addon</span>
    </div>
  </div>
</div>


<h2 id="navs">Navs</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>ul.nav.nav-tabs</strong></p>
  <ul class="nav nav-tabs">
    <li class="active">
      <a href="#">li.active a</a>
    </li>
    <li class="disabled">
      <a href="#">li.disabled a</a>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        li.dropdown <span class="caret"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="#">Link #1</a></li>
        <li><a href="#">Link #2</a></li>
      </ul>
    </li>
  </ul>
</div>

<div class="js-html-inspector" data-remove-target='["p:first","br"]'>
  <br><p><strong>ul.nav.nav-pills</strong></p>
  <ul class="nav nav-pills">
    <li class="active">
      <a href="#">li.active a</a>
    </li>
    <li class="disabled">
      <a href="#">li.disabled a</a>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        li.dropdown <span class="caret"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="#">Link #1</a></li>
        <li><a href="#">Link #2</a></li>
      </ul>
    </li>
  </ul>
</div>

<div class="js-html-inspector" data-remove-target='["p:first","br"]'>
  <br><p><strong>ul.nav.nav-pills.nav-stacked</strong></p>
  <ul class="nav nav-pills nav-stacked">
    <li class="active">
      <a href="#">
        li.active a
        <span class="badge pull-right">.badge.pull-right</span>
      </a>
    </li>
    <li class="disabled">
      <a href="#">li.disabled a</a>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        li.dropdown <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="#">Link #1</a></li>
        <li><a href="#">Link #2</a></li>
      </ul>
    </li>
  </ul>
</div>

<div class="js-html-inspector" data-remove-target='["p:first","br"]'>
  <br><p><strong>ul.nav.nav-tabs.nav-justified</strong></p>
  <ul class="nav nav-tabs nav-justified">
    <li class="active">
      <a href="#">
        li.active a
        <span class="badge">.badge</span>
      </a>
    </li>
    <li><a href="#">Link #2</a></li>
    <li><a href="#">Link #3</a></li>
  </ul>
</div>

<div class="js-html-inspector" data-remove-target='["p:first","br"]'>
  <br><p><strong>ul.nav.nav-pills.nav-justified</strong></p>
  <ul class="nav nav-pills nav-justified">
    <li class="active">
      <a href="#">
        li.active a
        <span class="badge">.badge</span>
      </a>
    </li>
    <li><a href="#">Link #2</a></li>
    <li><a href="#">Link #3</a></li>
  </ul>
</div>


<h2 id="navbar">Navbar</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.navbar.navbar-default .container-fluid</strong></p>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">.navbar-header .navbar-brand</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#">ul.nav.navbar-nav li.active a</a>
        </li>
        <li><a href="#">Link #2</a></li>
      </ul>
    </div>
  </nav>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.navbar.navbar-inverse .container-fluid</strong></p>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Brand</a>
      </div>
      <p class="navbar-text">
        p.navbar-text
        <a href="#" class="navbar-link">a.navbar-link</a>
      </p>

      <!-- Add the .navbar-btn class to <button> elements not residing
      in a <form> to vertically center them in the navbar. -->
      <button class="btn btn-default navbar-btn" type="button">.navbar-btn</button>
      <button class="btn btn-default navbar-btn btn-sm" type="button">.btn-sm</button>
      <button class="btn btn-default navbar-btn btn-xs" type="button">.btn-xs</button>
    </div>
  </nav>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
  <p>Complex navbar with <code>navbar-left</code>, <code>navbar-right</code> and <code>navbar-collapse</code>.</p>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2" type="button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-2">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              Dropdown <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Link #1</a></li>
              <li><a href="#">Link #2</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input class="form-control" type="text" placeholder=".navbar-form.navbar-left">
          </div>
          <button class="btn btn-default" type="submit">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              .navbar-right Dropdown <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Link #1</a></li>
              <li><a href="#">Link #2</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
</div>


<h2 id="breadcrumbs">Breadcrumbs</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>ol.breadcrumb</strong></p>
  <ol class="breadcrumb">
    <li><a href="#">li a</a></li>
    <li><a href="#">Link #2</a></li>
    <li class="active">li.active</li>
  </ol>
</div>


<h2 id="pagination">Pagination</h2>
<div class="js-html-inspector" data-remove-target="div:first">
  <div><strong>ul.pagination</strong></div>
  <ul class="pagination">
    <li><a href="#">&laquo;</a></li>
    <li><a href="#">li a</a></li>
    <li class="active"><a href="#">li.active a</a></li>
    <li class="disabled"><a href="#">li.disabled a</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>
</div>

<div class="js-html-inspector" data-remove-target="div:first">
  <div><strong>ul.pagination.pagination-lg</strong></div>
  <ul class="pagination pagination-lg">
    <li><a href="#">&laquo;</a></li>
    <li><a href="#">#1</a></li>
    <li class="active"><a href="#">#2</a></li>
    <li><a href="#">#3</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>
</div>

<div class="js-html-inspector" data-remove-target="div:first">
  <div><strong>ul.pagination.pagination-sm</strong></div>
  <ul class="pagination pagination-sm">
    <li><a href="#">&laquo;</a></li>
    <li><a href="#">#1</a></li>
    <li class="active"><a href="#">#2</a></li>
    <li><a href="#">#3</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>
</div>

<div class="js-html-inspector" data-remove-target="div:first">
  <div><strong>ul.pager</strong></div>
  <!-- Default pager -->
  <ul class="pager">
    <li><a href="#">li a "Previous"</a></li>
    <li><a href="#">li a "Next"</a></li>
  </ul>

  <!-- Aligned pager links -->
  <ul class="pager">
    <li class="previous"><a href="#">li.previous a "&larr; Older"</a></li>
    <li class="next"><a href="#">li.next a "Newer &rarr;"</a></li>
  </ul>
</div>


<h2 id="labels">Labels</h2>
<p class="js-html-inspector" data-remove-target="p:first">
  <span class="label label-default">.label.label-default</span>
  <span class="label label-primary">.label.label-primary</span>
  <span class="label label-success">.label.label-success</span>
  <span class="label label-info">.label.label-info</span>
  <span class="label label-warning">.label.label-warning</span>
  <span class="label label-danger">.label.label-danger</span>
</p>


<h2 id="jumbotron">Jumbotron</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.jumbotron</strong></p>
  <div class="jumbotron">
    <h1>Heading</h1>
    <p>Paragraph</p>
    <p><a class="btn btn-primary">Button</a></p>
  </div>
</div>


<h2 id="page-header">Page header</h2>
<div class="js-html-inspector">
  <div class="page-header">
    <h3>
      .page-header h3
      <small>small</small>
    </h3>
  </div>
</div>


<h2 id="thumbnails">Thumbnails</h2>
<!-- @TODO: Use 200x200 images instead of style="width: 100%" -->
<div class="row">
  <div class="col-sm-3 col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.thumbnail</strong></p>
    <div class="thumbnail">
      <img style="width: 100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="thumbnail">
      <div class="caption">
        <h3>.caption h3</h3>
        <p>Paragraph</p>
        <p><a class="btn btn-default" href="#">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.thumbnail</strong></p>
    <div class="thumbnail">
      <img style="width: 100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="thumbnail">
      <div class="caption">
        <h3>Caption</h3>
        <p>Paragraph</p>
        <p><a class="btn btn-default" href="#">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.thumbnail</strong></p>
    <div class="thumbnail">
      <img style="width: 100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="thumbnail">
      <div class="caption">
        <h3>Caption</h3>
        <p>Paragraph</p>
        <p><a class="btn btn-default" href="#">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xs-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.thumbnail</strong></p>
    <div class="thumbnail">
      <img style="width: 100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" alt="thumbnail">
      <div class="caption">
        <h3>Caption</h3>
        <p>Paragraph</p>
        <p><a class="btn btn-default" href="#">Button</a></p>
      </div>
    </div>
  </div>
</div>


<h2 id="alerts">Alerts</h2>
<!-- Alerts -->
<div class="js-html-inspector">
  <!-- The misspelled .alert-dismissable was deprecated in 3.2.0. -->
  <div class="alert alert-dismissible">
    <button class="close" data-dismiss="alert" type="button">&times;</button>
    .alert.alert-dismissible
  </div>
</div>

<div class="row js-html-inspector" data-replace-target="> div">
  <div class="col-sm-6">
    <div class="alert alert-success">
      .alert.alert-success
      <a class="alert-link" href="#">a.alert-link</a>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="alert alert-info">
      .alert.alert-info
      <a class="alert-link" href="#">a.alert-link</a>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="alert alert-warning">
      .alert.alert-warning
      <a class="alert-link" href="#">a.alert-link</a>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="alert alert-danger">
      .alert.alert-danger
      <a class="alert-link" href="#">a.alert-link</a>
    </div>
  </div>
</div>


<h2 id="progress-bars">Progress bars</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.progress</strong></p>
  <div class="progress">
    <div class="progress-bar" style="width: 80%;">
      <span>.progress-bar</span>
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 80%;">
      <span>.progress-bar.progress-bar-success</span>
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-info" style="width: 80%;">
      <span>.progress-bar.progress-bar-info</span>
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" style="width: 80%;">
      <span>.progress-bar.progress-bar-warning</span>
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" style="width: 80%;">
      <span>.progress-bar.progress-bar-danger</span>
    </div>
  </div>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.progress .progress-bar.progress-bar-striped</strong></p>
  <div class="progress">
    <div class="progress-bar progress-bar-striped" style="width: 17%;"></div>
    <div class="progress-bar progress-bar-striped progress-bar-success" style="width: 17%;"></div>
    <div class="progress-bar progress-bar-striped progress-bar-info" style="width: 17%;"></div>
    <div class="progress-bar progress-bar-striped progress-bar-warning" style="width: 17%;"></div>
    <div class="progress-bar progress-bar-striped progress-bar-danger" style="width: 17%;"></div>
  </div>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.progress.active .progress-bar.progress-bar-striped</strong></p>
  <div class="progress active">
    <div class="progress-bar progress-bar-striped" style="width: 17%;"></div>
    <div class="progress-bar progress-bar-striped progress-bar-success" style="width: 17%;"></div>
    <div class="progress-bar progress-bar-striped progress-bar-info" style="width: 17%;"></div>
    <div class="progress-bar progress-bar-striped progress-bar-warning" style="width: 17%;"></div>
    <div class="progress-bar progress-bar-striped progress-bar-danger" style="width: 17%;"></div>
  </div>
</div>


<h2 id="media-object">Media object</h2>
<div class="js-html-inspector" data-remove-target="strong:first">
  <strong>.media</strong>
  <div class="media">
    <a class="media-left" href="#">
      <img class="media-object" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" alt=".media-object">
    </a>
    <div class="media-body">
      <h4 class="media-heading">.media-body h4.media-heading</h4>
      &larr; a.media-left img.media-object
    </div>
  </div>
</div><br>

<div class="js-html-inspector" data-remove-target="p:first">
  <strong>.media</strong>
  <div class="media">
    <a class="media-left media-middle" href="#">
      <img class="media-object" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" alt=".media-object">
    </a>
    <div class="media-body">
      <h4 class="media-heading">.media-body h4.media-heading</h4>
      &larr; a.media-left.<u>media-middle</u> img.media-object
      <div class="media">
        <a class="media-left" href="#">
          <img class="media-object" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" alt=".media-object">
        </a>
        <div class="media-body">
          <h4 class="media-heading">.media .media-body h4.media-heading</h4>
          &larr; a.media-left img.media-object
        </div>
      </div>
    </div>
  </div>
</div><br>

<div class="js-html-inspector" data-remove-target="p:first">
  <strong>ul.media-list</strong>
  <ul class="media-list">
    <li class="media">
      <a class="media-left media-bottom" href="#">
        <img class="media-object" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" alt=".media-object">
      </a>
      <div class="media-body">
        <h4 class="media-heading">li.media .media-body h4.media-heading</h4>
        &larr; a.media-left.<u>media-bottom</u> img.media-object
        <div class="media">
          <a class="media-left" href="#">
            <img class="media-object" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" alt=".media-object">
          </a>
          <div class="media-body">
            <h4 class="media-heading">.media .media-body h4.media-heading</h4>
            &larr; a.media-left img.media-object
          </div>
        </div>
      </div>
    </li>
    <li class="media">
      <div class="media-body">
        <h4 class="media-heading">li.media .media-body h4.media-heading</h4>
        a.media-right img.media-object &rarr;
      </div>
      <a class="media-right" href="#">
        <img class="media-object" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" alt=".media-object">
      </a>
    </li>
  </ul>
</div>


<h2 id="list-group">List group</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>ul.list-group</strong></p>
  <ul class="list-group">
    <li class="list-group-item">li.list-group-item</li>
    <li class="list-group-item">
      List item #2
      <span class="badge">.badge</span>
    </li>
    <li class="list-group-item">List item #3</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>div.list-group</strong></p>
    <div class="list-group">
      <a class="list-group-item" href="#">
        a.list-group-item
      </a>
      <a class="list-group-item list-group-item-success" href="#">
        a.list-group-item.list-group-item-success
      </a>
      <a class="list-group-item list-group-item-info" href="#">
        a.list-group-item.list-group-item-info
      </a>
      <a class="list-group-item list-group-item-warning" href="#">
        a.list-group-item.list-group-item-warning
      </a>
      <a class="list-group-item list-group-item-danger" href="#">
        a.list-group-item.list-group-item-danger
      </a>
    </div>
  </div>
  <div class="col-md-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>div.list-group</strong></p>
    <div class="list-group">
      <a class="list-group-item active" href="#">
        a.list-group-item.active
      </a>
      <a class="list-group-item list-group-item-success active" href="#">
        a.list-group-item.list-group-item-success.active
      </a>
      <a class="list-group-item list-group-item-info active" href="#">
        a.list-group-item.list-group-item-info.active
      </a>
      <a class="list-group-item list-group-item-warning active" href="#">
        a.list-group-item.list-group-item-warning.active
      </a>
      <a class="list-group-item list-group-item-danger active" href="#">
        a.list-group-item.list-group-item-danger.active
      </a>
    </div>
  </div>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>div.list-group</strong></p>
  <div class="list-group">
    <a class="list-group-item active" href="#">
      <h4 class="list-group-item-heading">h4.list-group-item-heading</h4>
      <p class="list-group-item-text">p.list-group-item-text</p>
    </a>
    <a class="list-group-item" href="#">
      <h4 class="list-group-item-heading">List group item heading</h4>
      <p class="list-group-item-text">Paragraph</p>
    </a>
  </div>
</div>


<h2 id="panels">Panels</h2>
<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.panel.panel-default</strong></p>
  <div class="panel panel-default">
    <div class="panel-heading">.panel-heading</div>
    <div class="panel-heading">
      <h3 class="panel-title">
        .panel-heading h3.panel-title
      </h3>
    </div>
    <div class="panel-body">.panel-body</div>
    <div class="panel-footer">.panel-footer</div>
  </div>
</div>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.panel.panel-primary</strong></p>
  <div class="panel panel-primary">
    <div class="panel-heading">.panel-heading</div>
    <div class="panel-body">.panel-body</div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.panel.panel-success</strong></p>
    <div class="panel panel-success">
      <div class="panel-heading">.panel-heading</div>
      <div class="panel-body">.panel-body</div>
    </div>
  </div>
  <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.panel.panel-info</strong></p>
    <div class="panel panel-info">
      <div class="panel-heading">.panel-heading</div>
      <div class="panel-body">.panel-body</div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.panel.panel-warning (with table)</strong></p>
    <div class="panel panel-warning">
      <div class="panel-heading">.panel-heading</div>
      <table class="table">
        <thead>
          <tr><th>Header</th><th>Header</th><th>Header</th></tr>
        </thead>
        <tbody>
          <tr><td>Data</td><td>Data</td><td>Data</td></tr>
          <tr><td>Data</td><td>Data</td><td>Data</td></tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-sm-6 js-html-inspector" data-remove-target="p:first">
    <p><strong>.panel.panel-danger (with list group)</strong></p>
    <div class="panel panel-danger">
      <div class="panel-heading">.panel-heading</div>
      <ul class="list-group">
        <li class="list-group-item">List item</li>
        <li class="list-group-item">List item</li>
        <li class="list-group-item">List item</li>
      </ul>
    </div>
  </div>
</div>


<h2 id="wells">Wells</h2>
<div class="row js-html-inspector" data-replace-target="> div">
  <div class="col-sm-4">
    <div class="well well-lg">.well.well-lg</div>
  </div>
  <div class="col-sm-4">
    <div class="well">.well</div>
  </div>
  <div class="col-sm-4">
    <div class="well well-sm">.well.well-sm</div>
  </div>
</div>


<h1 class="page-header" id="javascript">Javascript</h1>

<h2 id="js-modals">Modals</h2>
<p class="bse-buttons">
  Via data attributes: <code>data-toggle="modal"</code> <code>data-target="#modal"</code>
  <a class="btn btn-primary" data-toggle="modal" href="#modal">Launch modal</a>
</p>
<p class="bse-buttons">
  Via Javascript: <code>$('#modal').modal()</code>
  <a class="btn btn-primary" href="#" onclick="$('#modal').modal(); return false;">Launch modal</a>
</p>
<div>
  <a class="btn btn-primary" data-toggle="modal" href="#modal-lg">Large modal</a>
  <a class="btn btn-primary" data-toggle="modal" href="#modal-sm">Small modal</a>
</div>

<!-- Static modal example -->
<div class="js-html-inspector" data-remove-target='["p:first","span"]'>
  <!-- Only use inline style for static display -->
  <div class="modal" style="display: block; position: static; overflow: hidden;">
    <div class="modal-dialog">
      <p><strong>.modal .modal-dialog .modal-content</strong></p>
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button">&times;</button>
          <h4 class="modal-title">.modal-header h4.modal-title</h4>
        </div>
        <div class="modal-body">
          .modal-body
        </div>
        <div class="modal-footer">
          <span>.modal-footer</span>
          <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
          <button class="btn btn-primary" type="button">Button</button>
      </div>
      </div>
    </div>
  </div>
</div>
<p>Options: <code>backdrop: true|false|'static'</code> <code>keyboard: true|false</code> <code>show: true|false</code> <code>remote: false|path</code></p>
<p>Methods: <code>.modal('toggle')</code> <code>.modal('show')</code> <code>.modal('hide')</code></p>
<p>Events: <code>show.bs.modal</code> <code>shown.bs.modal</code> <code>hide.bs.modal</code> <code>hidden.bs.modal</code> <code>loaded.bs.modal</code></p>

<!-- Default modal -->
<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" type="button">&times;</button>
        <h4 class="modal-title">.modal-title</h4>
      </div>
      <div class="modal-body">
        .modal-body
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
        <button class="btn btn-primary" type="button">Button</button>
      </div>
    </div>
  </div>
</div>
<!-- Optional sizes -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" type="button">&times;</button>
        <h4 class="modal-title">.modal-title</h4>
      </div>
      <div class="modal-body">
        .modal-body
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
        <button class="btn btn-primary" type="button">Button</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-sm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" type="button">&times;</button>
        <h4 class="modal-title">.modal-title</h4>
      </div>
      <div class="modal-body">
        .modal-body
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
        <button class="btn btn-primary" type="button">Button</button>
      </div>
    </div>
  </div>
</div>


<h2 id="js-dropdowns">Dropdowns</h2>
<p>Via data attributes: <code>data-toggle="dropdown"</code></p>

<div class="js-html-inspector">
  <div class="dropdown">
    <a class="btn btn-primary" data-toggle="dropdown" href="#">
      Dropdown trigger
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">Link #1</a></li>
      <li><a href="#">Link #2</a></li>
    </ul>
  </div>
</div>

<p><br>Via Javascript: <code>$('.dropdown-toggle').dropdown()</code>(<code>data-toggle="dropdown"</code> still required)</p>
<p>Methods: <code>.dropdown('toggle')</code></p>
<p>Events: <code>show.bs.dropdown</code> <code>shown.bs.dropdown</code> <code>hide.bs.dropdown</code> <code>hidden.bs.dropdown</code></p>


<h2 id="js-tabs">Tabs</h2>
<p>Via data attributes: <code>data-toggle="tab"</code></p>

<div class="js-html-inspector">
  <ul class="nav nav-tabs">
    <li class="active">
      <a data-toggle="tab" href="#js-tab-pane1">Tab #1</a>
    </li>
    <li>
      <a data-toggle="tab" href="#js-tab-pane2">Tab #2</a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="js-tab-pane1">
      <p>Content #1: .table-content .tab-pane.active</p>
    </div>
    <div class="tab-pane" id="js-tab-pane2">
      <p>Content #2: .table-content .tab-pane</p>
    </div>
  </div>
</div>

<p>Via Javascript: <code>$(this).tab('show')</code></p>

<div class="js-html-inspector">
  <ul class="nav nav-tabs">
    <li class="active">
      <a href="#js-tab-pane3" onclick="$(this).tab('show'); return false;">Tab #1</a>
    </li>
    <li>
      <a href="#js-tab-pane4" onclick="$(this).tab('show'); return false;">Tab #2</a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane fade in active" id="js-tab-pane3">
      <p>Content #1: .table-content .tab-pane.fade.in.active</p>
    </div>
    <div class="tab-pane fade" id="js-tab-pane4">
      <p>Content #2: .table-content .tab-pane.fade</p>
    </div>
  </div>
</div>

<p>Events: <code>show.bs.tab</code> <code>shown.bs.tab</code></p>


<h2 id="js-tooltips">Tooltips</h2>
<p>Usage: <code>$('[data-toggle="tooltip"]').tooltip()</code></p>

<div class="text-center js-html-inspector">
  <button class="btn btn-primary" data-toggle="tooltip" data-placement="left" type="button" title="[title]">
    Left
  </button>
  <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" type="button" title="[title]">
    Top
  </button>
  <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" type="button" title="[title]">
    Bottom
  </button>
  <button class="btn btn-primary" data-toggle="tooltip" data-placement="right" type="button" title="[title]">
    Right
  </button>
</div>

<div class="text-center js-html-inspector">
  <!-- Static tooltip -->
  <div class="tooltip bottom" style="display: inline-block; position: relative; opacity: 1; filter: alpha(opacity=100); z-index: 1000;">
    <div class="tooltip-inner">You must initialize them yourself</div>
    <div class="tooltip-arrow"></div>
  </div>
</div>

<p>
  Options: <code>animation: true|false</code> <code>html: false|true</code> <code>selector: false|string</code><br>
  <code>title: ''|function</code> <code>container: false|string</code><br>
  <code>placement: top|location|auto|function</code><br>
  <code>trigger: hover focus|click|manual</code><br>
  <code>delay: 0|{show:500, hide:100}</code>
</p>
<p>Methods: <code>.tooltip('show')</code> <code>.tooltip('hide')</code> <code>.tooltip('toggle')</code> <code>.tooltip('destroy')</code></p>
<p>Events: <code>show.bs.tooltip</code> <code>shown.bs.tooltip</code> <code>hide.bs.tooltip</code> <code>hidden.bs.tooltip</code></p>


<h2 id="js-popovers">Popovers</h2>
<p>Usage: <code>$('[data-toggle="popover"]').popover()</code></p>

<div class="text-center js-html-inspector">
  <button class="btn btn-primary" data-toggle="popover" data-placement="left" data-content="[data-content]" type="button" title="[title]">
    Left
  </button>
  <button class="btn btn-primary" data-toggle="popover" data-placement="top" data-content="[data-content]" type="button" title="[title]">
    Top
  </button>
  <button class="btn btn-primary" data-toggle="popover" data-placement="bottom" data-content="[data-content]" type="button" title="[title]">
    Bottom
  </button>
  <button class="btn btn-primary" data-toggle="popover" data-placement="right" data-content="[data-content]" type="button" title="[title]">
    Right
  </button>
</div>

<div class="text-center js-html-inspector">
  <!-- Static popover -->
  <div class="popover bottom" style="display: inline-block; position: relative; z-index: 1000;">
    <div class="arrow"></div>
    <h3 class="popover-title">Popover</h3>
    <div class="popover-content">
      <p>You must initialize them yourself</p>
    </div>
  </div>
</div>

<p><br>
  Options: <code>animation: true|false</code> <code>html: false|true</code> <code>selector: false|string</code><br>
  <code>title: ''|function</code> <code>content: ''|function</code> <code>container: false|string</code><br>
  <code>placement: right|location|auto|function</code><br>
  <code>trigger: click|hover|focus|manual</code><br>
  <code>delay: 0|{show:500, hide:100}</code>
</p>
<p>Methods: <code>.popover('show')</code> <code>.popover('hide')</code> <code>.popover('toggle')</code> <code>.popover('destroy')</code></p>
<p>Events: <code>show.bs.popover</code> <code>shown.bs.popover</code> <code>hide.bs.popover</code> <code>hidden.bs.popover</code></p>


<h2 id="js-alerts">Alerts</h2>
<p>Via data attributes (close button): <code>data-dismiss="alert"</code></p>

<div class="js-html-inspector">
  <div class="alert alert-danger fade in">
    <button class="close" data-dismiss="alert" type="button">&times;</button>
    .alert.alert-danger.fade.in
  </div>
</div>

<p>Via Javascript: <code>$('.alert').alert()</code></p>
<p>Methods: <code>.alert('close')</code></p>
<p>Events: <code>close.bs.alert</code> <code>closed.bs.alert</code></p>


<h2 id="js-buttons">Buttons</h2>
<p>Stateful button: <code>data-loading-text="Loading..."</code> <code>data-complete-text="Completed"</code></p>

<div class="bse-buttons js-html-inspector">
  <button class="btn btn-primary" id="stateful" data-loading-text="Loading..." data-complete-text="Completed" type="button" onclick="$(this).button('loading').siblings().prop('disabled', false);">
    $('#stateful').button('loading')
  </button>
  <button class="btn btn-primary" type="button" onclick="$(this).prop('disabled', true); $('#stateful').button('complete');" disabled>
    $('#stateful').button('complete')
  </button>
  <button class="btn btn-primary" type="button" onclick="$('#stateful').button('reset').siblings().prop('disabled', true);" disabled>
    $('#stateful').button('reset')
  </button>
</div><br>

<div class="js-html-inspector">
  Single toggle: <button class="btn btn-primary" data-toggle="button" type="button">
    [data-toggle="button"]
  </button>
</div><br>

<div class="bse-buttons js-html-inspector">
  Checkbox: <code>data-toggle="buttons"</code>
  <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-primary">
      <input type="checkbox"> #1
    </label>
    <label class="btn btn-primary">
      <input type="checkbox"> #2
    </label>
    <label class="btn btn-primary disabled">
      <input type="checkbox"> Disabled
    </label>
    <label class="btn btn-primary">
      <input type="checkbox"> #4
    </label>
  </div>
</div><br>

<div class="bse-buttons js-html-inspector">
  Radio: <code>data-toggle="buttons"</code>
  <div class="btn-group" data-toggle="buttons">
    <label class="btn btn-primary">
      <input name="optionsRadiosJS" type="radio" value="option1" checked> #1
    </label>
    <label class="btn btn-primary">
      <input name="optionsRadiosJS" type="radio" value="option2"> #2
    </label>
    <label class="btn btn-primary disabled">
      <input name="optionsRadiosJS" type="radio" value="option3"> Disabled
    </label>
    <label class="btn btn-primary">
      <input name="optionsRadiosJS" type="radio" value="option2"> #4
    </label>
  </div>
</div><br>

<p>Methods: <code>.button('toggle')</code> <code>.button('loading')</code> <code>.button('reset')</code> <code>.button(string)</code></p>


<h2 id="js-collapse">Collapse</h2>
<p>Via data attributes: <code>data-toggle="collapse"</code></p>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>#accordion.panel-group</strong></p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
            data-toggle="collapse" data-parent="#accordion" href="#collapse-1"
          </a>
        </h4>
      </div>
      <div class="panel-collapse collapse in" id="collapse-1">
        <div class="panel-body">#collapse-1.collapse.in</div>
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
            data-toggle="collapse" data-parent="#accordion" href="#collapse-2"
          </a>
        </h4>
      </div>
      <div class="panel-collapse collapse" id="collapse-2">
        <div class="panel-body">#collapse-2.collapse</div>
      </div>
    </div>
  </div>
</div>

<p>Via Javascript: <code>$(".collapse").collapse()</code></p>
<p>Options: <code>parent: false|selector</code> <code>toggle: true|false</code></p>
<p>Methods: <code>.collapse('toggle')</code> <code>.collapse('show')</code> <code>.collapse('hide')</code></p>
<p>Events: <code>show.bs.collapse</code> <code>shown.bs.collapse</code> <code>hide.bs.collapse</code> <code>hidden.bs.collapse</code></p>


<h2 id="js-carousel">Carousel</h2>
<p>Via data attributes: <code>data-target="#carousel"</code> <code>data-slide</code> <code>data-slide-to</code> <code>data-ride</code></p>
<p>Via Javascript: <code>$('.carousel').carousel()</code></p>

<div class="js-html-inspector" data-remove-target="p:first">
  <p><strong>.carousel.slide</strong></p>
  <div class="carousel slide" id="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#carousel"></li>
      <li data-slide-to="1" data-target="#carousel"></li>
      <li data-slide-to="2" data-target="#carousel"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNTU1O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+" alt="First slide">
        <div class="carousel-caption">
          <h3>.carousel-caption h3</h3>
          <p>Paragraph</p>
        </div>
      </div>
      <div class="item">
        <a href="#">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==" alt="Second slide">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojMzMzO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+" alt="Third slide">
        </a>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" data-slide="prev" href="#carousel">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" data-slide="next" href="#carousel">
      <span class="icon-next"></span>
    </a>
  </div>
</div><br>

<p>Options: <code>interval: 5000</code> <code>pause: hover</code> <code>wrap: true|false</code></p>
<p>Methods: <code>.carousel('cycle')</code> <code>.carousel('pause')</code> <code>.carousel(number)</code> <code>.carousel('prev')</code> <code>.carousel('next')</code></p>
<p>Events: <code>slide.bs.carousel</code> <code>slid.bs.carousel</code></p>

        </div>
        <div class="col-md-3">
          <div data-spy="affix">
<div class="sidebar hidden-print" id="sidebar">
  <ul class="nav sidenav">
    <li class="active">
      <a href="#css">CSS</a>
      <ul class="nav">
        <li><a href="#typography">Typography</a></li>
        <li><a href="#tables">Tables</a></li>
        <li><a href="#forms">Forms</a></li>
        <li><a href="#buttons">Buttons</a></li>
        <li><a href="#images">Images</a></li>
        <li><a href="#helper-classes">Helper classes</a></li>
      </ul>
    </li>
    <li>
      <a href="#components">Components</a>
      <ul class="nav">
        <li>
		  <a href="#fontawesome">Font Awesome</a>
		  <ul class="nav">
			<li><a href="#fontawesome_regular">Regular Icons</a></li>
			<li><a href="#fontawesome_solid">Solid Icons</a></li>
			<li><a href="#fontawesome_brand">Brand Icons</a></li>
		  </ul>
		</li>
        <li><a href="#dropdowns">Dropdowns</a></li>
        <li><a href="#button-groups">Button groups</a></li>
        <li><a href="#input-groups">Input groups</a></li>
        <li><a href="#navs">Navs</a></li>
        <li><a href="#navbar">Navbar</a></li>
        <li><a href="#breadcrumbs">Breadcrumbs</a></li>
        <li><a href="#pagination">Pagination</a></li>
        <li><a href="#labels">Labels</a></li>
        <li><a href="#jumbotron">Jumbotron</a></li>
        <li><a href="#page-header">Page header</a></li>
        <li><a href="#thumbnails">Thumbnails</a></li>
        <li><a href="#alerts">Alerts</a></li>
        <li><a href="#progress-bars">Progress bars</a></li>
        <li><a href="#media-object">Media object</a></li>
        <li><a href="#list-group">List group</a></li>
        <li><a href="#panels">Panels</a></li>
        <li><a href="#wells">Wells</a></li>
      </ul>
    </li>
    <li>
      <a href="#javascript">Javascript</a>
      <ul class="nav">
        <li><a href="#js-modals">Modals</a></li>
        <li><a href="#js-dropdowns">Dropdowns</a></li>
        <li><a href="#js-tabs">Tabs</a></li>
        <li><a href="#js-tooltips">Tooltips</a></li>
        <li><a href="#js-popovers">Popovers</a></li>
        <li><a href="#js-alerts">Alerts</a></li>
        <li><a href="#js-buttons">Buttons</a></li>
        <li><a href="#js-collapse">Collapse</a></li>
        <li><a href="#js-carousel">Carousel</a></li>
      </ul>
    </li>
  </ul>
  <a class="back-to-top" href="#top">Back to top</a>
</div>

          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="dialog-html-inspector">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">&times;</button>
            <h4 class="modal-title">Source Code</h4>
          </div>
          <div class="modal-body">
            <pre><code></code></pre>
          </div>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="container">

<div class="footer-content">
  <!-- @TODO: Use extra CSS for 'dist' footer -->
  <div style="margin-bottom: 5px;">
    <a target="_blank" href="http://www.opensource.org/licenses/mit-license.php">MIT</a>
    © <a href="https://github.com/anvoz" target="_blank">anvoz</a>
    v1.2.1 - Nov 03 2014
  </div>
  <div>
  </div>
</div>

      </div>
    </div>

    <script defer src="{{ asset('ui_kit/vendor.js') }}"></script>

    <script defer src="{{ asset('ui_kit/plugins.js') }}"></script>

    <script defer src="{{ asset('ui_kit/main.js') }}"></script>
  </body>
</html>
