<?php
function make_table($id, $rows, $columns){
  $table = null;
  $cell_count = 0;
  for($i = 1; $i<=$rows; $i++){
    $table .= '<tr>';
      for($j = 1; $j<=$columns; $j++){
        $table .= "<td>$cell_count</td>";
        $cell_count++;
      }
    $table .= '</tr>';
  }

  return sprintf("<table id='$id'>%s</table>", $table);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Colorful.js: Demonstrations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <link href="prettify.css" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
    <style>
      body {
        padding-top: 30px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!-- <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png"> -->
    

    <style type="text/css">
      #table0 td {
        color: #666;
      }
      table, #div {
        width:100%;
      }
      table tr td {
        width:40px;
        height:40px;

        text-align:center;
        color:white;
        font-family:sans-serif;
        font-size:12px;
      }
      #table2 {
        font-size:15px;
        font-weight:bold;
      }
      .demo-div div{
        width:10%;
        height:25px;
        text-indent:-10000px;
        float:left;
      }
      .pattern-background {
        background:url(img/back_pattern.png) repeat;
        padding:10px;
        box-sizing:border-box;
      }
      #intro {
        font-family: 'Ubuntu', sans-serif;
        box-shadow: inset 0 0 40px 0 rgba(0,0,0,0.6);
        color: #FFF;
        border-radius:15px;
        -webkit-border-radius:15px;

        transition: background 1s;
      }
      pre.prettyprint {
        padding: 10px;
        border: none;
        box-shadow: inset 0 0 10px 0 rgba(0,0,0,0.1);
      }
      #mri {
        background: url(mri_rmommaerts.jpg) no-repeat;
        width:395px;
        height:500px;
      }

      #mri tr td {
        height:7px;
        width:7px;
      }

      #bball .column {
        float:left;
      }

      #bball .heading, #bball .datum {
        height:15px;
        display:block;
        padding:12px 20px;
      }
      #bball .datum {
        text-align: center;
        background: #991C1C;
        /*-webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;    
        box-sizing: border-box;*/        
      }
      #bball .nat-champs {
        border: 2px solid white;
        padding:10px 18px;
      }
      #bball div.colorful-el {
        color: #fff;
        font-weight:bold;
      }
      .bad {
        background-image: url(img/bad.png);
      }
      .nat-champs-message {
        text-align: center;
        margin-top: 10px;
      }
      h2 {
        margin:20px 0;
      }
      #table6 td, #min-max td {
        border: 2px solid whiteSmoke;
        border-radius:3px;
        box-shadow: inset 0 0 10px 0 rgba(0,0,0,0.15);
        color:rgba(255,255,255,0.5);
        /*text-indent:-10000px;*/
      }
      #min-max td {
        border-color: #FFF;
      }
      .colorful {
        font-family: 'Ubuntu', sans-serif;
      }
    /*  h2 > a.colorful:after {
        content: "";
        background:red;
        width:100%;
        height:20px;
        position:relative;
      }
      */
     h2 {
      background: #fff;
     }
     h2[title]::before {
      content: attr(title);
      background: white;
      z-index: 2;
      position: absolute;
      padding-right: 25px;
    }
    h2[title]::after {
     content: "";
     display: block;
     position: relative;
     top: -0.8em;
/*     border-bottom: 1px solid #99B3D8;
*/    }
    ul.features {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    ul.features li {
      padding-bottom:35px;
      margin-bottom:20px;
      border-bottom: 1px solid #E3E3E3;
    }

    </style>
    
  </head>

  <body data-spy="scroll" data-target=".navbar">

   <!--  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">colorful</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Demos</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container">
      <div id="intro" class="hero-unit">
        <h1>Colorful.js</h1>
        <p>Makes Data Beautiful</p>
      </div>
      <div id="navbar" class="navbar subnav">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand colorful" href="#">Colorful.js</a>
            <ul class="nav">
              <li><a href="#about-colorful">About</a></li>
              <li><a href="#features">Features</a></li>
              <li><a href="#demos">Demos</a></li>
              <li><a href="#download">Download</a></li>
              <li><a href="#supporters">Our Supporters</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row" >
        <div class="span12">
          <h2 title="Download Colorful.js" class="colorful" name="download" id="download">Download Colorful.js</h2>
          <ul>
            <li>Minified: <a href="#" title="Download Colorful.min.js">Colorful.min.js</a></li>
            <li>Unminified: <a href="#" title="Download Colorful.js">Colorful.js</a></li>
            <li>GitHub: <a href="https://github.com/ltk/Heat-Chart" title="Colorful.js on GitHub">The Repo</a></li>
        </div>

        <div class="span12">
          <h2 title="Colorful.js Demos" class="colorful" name="demos" id="demos">Colorful.js Demos</h2>
          <div class="row">
            <div class="span12">
              <pre class="prettyprint">$('#college-bball').colorful({theta: 180, reverse: true});</pre>
              <div class="well">
                <h3>College Basketball in the 21st Century</h3>
                <h4>Final AP Poll Rankings by Year</h4>
              <div id="bball" class="clearfix">
                <div class="column">
                  <div class="heading"></div>
                  <div class="heading">Duke</div>
                  <div class="heading">Kansas</div>
                  <div class="heading">Kentucky</div>
                  <div class="heading">UCLA</div>
                  <div class="heading">UNC</div>
                  <div class="heading">Mich State</div>
                  <div class="heading">Connecticut</div>
                  <div class="heading">Syracuse</div>
                </div>
                <div class="column">
                  <div class="heading">2000</div>
                  <div class="datum">1</div>
                  <div class="datum"> </div>
                  <div class="datum">19</div>
                  <div class="datum"> </div>
                  <div class="datum"> </div>
                  <div class="datum nat-champs">2</div>
                  <div class="datum">20</div>
                  <div class="datum">16</div>
                </div>
                <div class="column">
                  <div class="heading">2001</div>
                  <div class="datum nat-champs">1</div>
                  <div class="datum">12</div>
                  <div class="datum">9</div>
                  <div class="datum">15</div>
                  <div class="datum">6</div>
                  <div class="datum">3</div>
                  <div class="datum"></div>
                  <div class="datum">17</div>
                </div>
                <div class="column">
                  <div class="heading">2002</div>
                  <div class="datum">1</div>
                  <div class="datum">2</div>
                  <div class="datum">16</div>
                  <div class="datum"> </div>
                  <div class="datum"> </div>
                  <div class="datum"> </div>
                  <div class="datum">10</div>
                  <div class="datum"> </div>
                </div>
                <div class="column">
                  <div class="heading">2003</div>
                  <div class="datum">7</div>
                  <div class="datum">6</div>
                  <div class="datum">1</div>
                  <div class="datum"> </div>
                  <div class="datum"> </div>
                  <div class="datum"> </div>
                  <div class="datum">23</div>
                  <div class="datum nat-champs">13</div>
                </div>
                <div class="column">
                  <div class="heading">2004</div>
                  <div class="datum">6</div>
                  <div class="datum">16</div>
                  <div class="datum">2</div>
                  <div class="datum"> </div>
                  <div class="datum">18</div>
                  <div class="datum"> </div>
                  <div class="datum nat-champs">7</div>
                  <div class="datum">20</div>
                </div>
                <div class="column">
                  <div class="heading">2005</div>
                  <div class="datum">3</div>
                  <div class="datum">12</div>
                  <div class="datum">7</div>
                  <div class="datum"> </div>
                  <div class="datum nat-champs">2</div>
                  <div class="datum">15</div>
                  <div class="datum">13</div>
                  <div class="datum">11</div>
                </div>
                <div class="column">
                  <div class="heading">2006</div>
                  <div class="datum">1</div>
                  <div class="datum">12</div>
                  <div class="datum"> </div>
                  <div class="datum">7</div>
                  <div class="datum">10</div>
                  <div class="datum"> </div>
                  <div class="datum">2</div>
                  <div class="datum">21</div>
                </div>
                <div class="column">
                  <div class="heading">2007</div>
                  <div class="datum">21</div>
                  <div class="datum">2</div>
                  <div class="datum"> </div>
                  <div class="datum">7</div>
                  <div class="datum">4</div>
                  <div class="datum"> </div>
                  <div class="datum"> </div>
                  <div class="datum"> </div>
                </div>
                <div class="column">
                  <div class="heading">2008</div>
                  <div class="datum">9</div>
                  <div class="datum nat-champs">4</div>
                  <div class="datum"> </div>
                  <div class="datum">3</div>
                  <div class="datum">1</div>
                  <div class="datum">18</div>
                  <div class="datum">16</div>
                  <div class="datum"> </div>
                </div>
                <div class="column">
                  <div class="heading">2009</div>
                  <div class="datum">6</div>
                  <div class="datum">14</div>
                  <div class="datum"> </div>
                  <div class="datum">18</div>
                  <div class="datum nat-champs">2</div>
                  <div class="datum">8</div>
                  <div class="datum">5</div>
                  <div class="datum">13</div>
                </div>
                <div class="column">
                  <div class="heading">2010</div>
                  <div class="datum nat-champs">3</div>
                  <div class="datum">1</div>
                  <div class="datum">2</div>
                  <div class="datum"> </div>
                  <div class="datum"> </div>
                  <div class="datum">13</div>
                  <div class="datum"> </div>
                  <div class="datum">4</div>
                </div>
                <div class="column">
                  <div class="heading">2011</div>
                  <div class="datum">3</div>
                  <div class="datum">2</div>
                  <div class="datum">11</div>
                  <div class="datum"> </div>
                  <div class="datum">7</div>
                  <div class="datum"> </div>
                  <div class="datum nat-champs">9</div>
                  <div class="datum">12</div>
                </div>
                <div class="column">
                  <div class="heading">2012</div>
                  <div class="datum">8</div>
                  <div class="datum nat-champs">6</div>
                  <div class="datum">1</div>
                  <div class="datum"> </div>
                  <div class="datum">4</div>
                  <div class="datum">5</div>
                  <div class="datum"> </div>
                  <div class="datum">2</div>
                </div>
              </div>
              <p class="nat-champs-message">(A white border denotes a national championship win.)</p>
            </div>
              <hr/>
            </div>
            <div class="span12">
              <pre class="prettyprint">$('#web-visits').colorful({theta: 180, reverse: true});</pre>
              <div class="well">
                <h3>Website Visits by Day of Week and Time of Day</h3>
              <table id="table6">
                <tbody><tr>
                  <th></th>
                  <th>0</th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                  <th>8</th>
                  <th>9</th>
                  <th>10</th>
                  <th>11</th>
                  <th>12</th>
                  <th>13</th>
                  <th>14</th>
                  <th>15</th>
                  <th>16</th>
                  <th>17</th>
                  <th>18</th>
                  <th>19</th>
                  <th>20</th>
                  <th>21</th>
                  <th>22</th>
                  <th>23</th>
                </tr>
                  <tr>
                    <th>Sun</th>
                    <td  title="0.38235294117647056 visits">0.38</td>
                    <td  title="0.3088235294117647 visits">0.31</td>
                    <td  title="0.38235294117647056 visits">0.38</td>
                    <td  title="0.3382352941176471 visits">0.34</td>
                    <td  title="0.27941176470588236 visits">0.28</td>
                    <td  title="0.2647058823529412 visits">0.26</td>
                    <td  title="0.27941176470588236 visits">0.28</td>
                    <td  title="0.20588235294117646 visits">0.21</td>
                    <td  title="0.25 visits">0.25</td>
                    <td  title="0.4411764705882353 visits">0.44</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.5441176470588235 visits">0.54</td>
                    <td  title="0.4852941176470588 visits">0.49</td>
                    <td  title="0.4117647058823529 visits">0.41</td>
                    <td  title="0.6323529411764706 visits">0.63</td>
                    <td  title="0.6323529411764706 visits">0.63</td>
                    <td  title="0.6617647058823529 visits">0.66</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.6176470588235294 visits">0.62</td>
                    <td  title="0.7058823529411765 visits">0.71</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.6323529411764706 visits">0.63</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                  </tr>
                  <tr>
                    <th>Mon</th>
                    <td  title="0.5147058823529411 visits">0.51</td>
                    <td  title="0.5 visits">0.5</td>
                    <td  title="0.4117647058823529 visits">0.41</td>
                    <td  title="0.27941176470588236 visits">0.28</td>
                    <td  title="0.2647058823529412 visits">0.26</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.47058823529411764 visits">0.47</td>
                    <td  title="1.0 visits">1.0</td>
                    <td  title="1.5441176470588236 visits">1.54</td>
                    <td  title="2.1029411764705883 visits">2.1</td>
                    <td  title="2.235294117647059 visits">2.24</td>
                    <td  title="2.2058823529411766 visits">2.21</td>
                    <td  title="2.3676470588235294 visits">2.37</td>
                    <td  title="2.5294117647058822 visits">2.53</td>
                    <td  title="2.3823529411764706 visits">2.38</td>
                    <td  title="2.411764705882353 visits">2.41</td>
                    <td  title="1.75 visits">1.75</td>
                    <td  title="1.0588235294117647 visits">1.06</td>
                    <td  title="0.7352941176470589 visits">0.74</td>
                    <td  title="0.5294117647058824 visits">0.53</td>
                    <td  title="1.088235294117647 visits">1.09</td>
                    <td  title="0.6617647058823529 visits">0.66</td>
                    <td  title="0.7352941176470589 visits">0.74</td>
                  </tr>
                  <tr>
                    <th>Tues</th>
                    <td  title="0.44776119402985076 visits">0.45</td>
                    <td  title="0.4925373134328358 visits">0.49</td>
                    <td  title="0.5223880597014925 visits">0.52</td>
                    <td  title="0.3880597014925373 visits">0.39</td>
                    <td  title="0.29850746268656714 visits">0.3</td>
                    <td  title="0.5373134328358209 visits">0.54</td>
                    <td  title="0.3283582089552239 visits">0.33</td>
                    <td  title="0.417910447761194 visits">0.42</td>
                    <td  title="1.328358208955224 visits">1.33</td>
                    <td  title="1.7611940298507462 visits">1.76</td>
                    <td  title="2.343283582089552 visits">2.34</td>
                    <td  title="2.4925373134328357 visits">2.49</td>
                    <td  title="2.298507462686567 visits">2.3</td>
                    <td  title="2.388059701492537 visits">2.39</td>
                    <td  title="2.5522388059701493 visits">2.55</td>
                    <td  title="2.253731343283582 visits">2.25</td>
                    <td  title="2.6417910447761193 visits">2.64</td>
                    <td  title="1.6865671641791045 visits">1.69</td>
                    <td  title="1.0 visits">1.0</td>
                    <td  title="0.7761194029850746 visits">0.78</td>
                    <td  title="0.7761194029850746 visits">0.78</td>
                    <td  title="0.7164179104477612 visits">0.72</td>
                    <td  title="0.6716417910447762 visits">0.67</td>
                    <td  title="0.6865671641791045 visits">0.69</td>
                  </tr>
                  <tr>
                    <th>Wed</th>
                    <td  title="0.7058823529411765 visits">0.71</td>
                    <td  title="0.4411764705882353 visits">0.44</td>
                    <td  title="0.36764705882352944 visits">0.37</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.5294117647058824 visits">0.53</td>
                    <td  title="0.5441176470588235 visits">0.54</td>
                    <td  title="1.338235294117647 visits">1.34</td>
                    <td  title="1.6470588235294117 visits">1.65</td>
                    <td  title="2.6470588235294117 visits">2.65</td>
                    <td  title="2.338235294117647 visits">2.34</td>
                    <td  title="2.1911764705882355 visits">2.19</td>
                    <td  title="1.9558823529411764 visits">1.96</td>
                    <td  title="2.3529411764705883 visits">2.35</td>
                    <td  title="2.3823529411764706 visits">2.38</td>
                    <td  title="2.3823529411764706 visits">2.38</td>
                    <td  title="1.911764705882353 visits">1.91</td>
                    <td  title="0.9852941176470589 visits">0.99</td>
                    <td  title="0.8970588235294118 visits">0.9</td>
                    <td  title="0.8235294117647058 visits">0.82</td>
                    <td  title="0.9411764705882353 visits">0.94</td>
                    <td  title="0.9264705882352942 visits">0.93</td>
                    <td  title="0.6617647058823529 visits">0.66</td>
                  </tr>
                  <tr>
                    <th>Thur</th>
                    <td  title="0.7058823529411765 visits">0.71</td>
                    <td  title="0.6764705882352942 visits">0.68</td>
                    <td  title="0.4264705882352941 visits">0.43</td>
                    <td  title="0.29411764705882354 visits">0.29</td>
                    <td  title="0.5 visits">0.5</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="0.4852941176470588 visits">0.49</td>
                    <td  title="1.2941176470588236 visits">1.29</td>
                    <td  title="1.7058823529411764 visits">1.71</td>
                    <td  title="2.5588235294117645 visits">2.56</td>
                    <td  title="2.426470588235294 visits">2.43</td>
                    <td  title="2.426470588235294 visits">2.43</td>
                    <td  title="2.411764705882353 visits">2.41</td>
                    <td  title="2.3970588235294117 visits">2.4</td>
                    <td  title="2.6911764705882355 visits">2.69</td>
                    <td  title="2.5294117647058822 visits">2.53</td>
                    <td  title="1.661764705882353 visits">1.66</td>
                    <td  title="1.0735294117647058 visits">1.07</td>
                    <td  title="0.9264705882352942 visits">0.93</td>
                    <td  title="0.8676470588235294 visits">0.87</td>
                    <td  title="0.8382352941176471 visits">0.84</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.6176470588235294 visits">0.62</td>
                  </tr>
                  <tr>
                    <th>Fri</th>
                    <td  title="0.5588235294117647 visits">0.56</td>
                    <td  title="0.5735294117647058 visits">0.57</td>
                    <td  title="0.3382352941176471 visits">0.34</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.29411764705882354 visits">0.29</td>
                    <td  title="0.36764705882352944 visits">0.37</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="1.2941176470588236 visits">1.29</td>
                    <td  title="1.7205882352941178 visits">1.72</td>
                    <td  title="2.1470588235294117 visits">2.15</td>
                    <td  title="2.073529411764706 visits">2.07</td>
                    <td  title="1.9558823529411764 visits">1.96</td>
                    <td  title="2.2205882352941178 visits">2.22</td>
                    <td  title="2.264705882352941 visits">2.26</td>
                    <td  title="2.161764705882353 visits">2.16</td>
                    <td  title="1.8823529411764706 visits">1.88</td>
                    <td  title="1.338235294117647 visits">1.34</td>
                    <td  title="0.6176470588235294 visits">0.62</td>
                    <td  title="0.4411764705882353 visits">0.44</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.47058823529411764 visits">0.47</td>
                    <td  title="0.4264705882352941 visits">0.43</td>
                    <td  title="0.38235294117647056 visits">0.38</td>
                  </tr>
                  <tr>
                    <th>Sat</th>
                    <td  title="0.38235294117647056 visits">0.38</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.29411764705882354 visits">0.29</td>
                    <td  title="0.07352941176470588 visits">0.07</td>
                    <td  title="0.20588235294117646 visits">0.21</td>
                    <td  title="0.2647058823529412 visits">0.26</td>
                    <td  title="0.3235294117647059 visits">0.32</td>
                    <td  title="0.4264705882352941 visits">0.43</td>
                    <td  title="0.4117647058823529 visits">0.41</td>
                    <td  title="0.5294117647058824 visits">0.53</td>
                    <td  title="0.5 visits">0.5</td>
                    <td  title="0.6323529411764706 visits">0.63</td>
                    <td  title="0.47058823529411764 visits">0.47</td>
                    <td  title="0.5735294117647058 visits">0.57</td>
                    <td  title="0.7941176470588235 visits">0.79</td>
                    <td  title="0.6176470588235294 visits">0.62</td>
                    <td  title="0.4852941176470588 visits">0.49</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.4117647058823529 visits">0.41</td>
                    <td  title="0.36764705882352944 visits">0.37</td>
                    <td  title="0.29411764705882354 visits">0.29</td>
                    <td  title="0.5294117647058824 visits">0.53</td>
                  </tr>
              </tbody></table>
            </div>
              <hr/>
            </div>
          </div>
        </div>

        <div class="span12">
          <h2 title="Features" class="colorful" name="features" id="features">Features</h2>
          <ul class="features">
            <li>
              <h3>Map Data to Hue, Saturation, Lightness, and/or Alpha</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> An array containing one or more of the following strings: 'h', 's', 'l', 'a' (e.g. ['h', 's'] or ['a'])</p>
              <p><span class="label label-info">Defaults</span> ['h']</p>
              <pre class="prettyprint">$('#some-element').colorful({mapDataTo:['h','s']});</pre>
            </li>

            <li>
              <h3>Color Only the Right Elements</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> Any valid jQuery selector string.</p>
              <p><span class="label label-info">Defaults</span> "td"</p>
              <pre class="prettyprint">$('#some-element').colorful({elementSelector:".data", preventionSelector:".label"});</pre>
            </li>

            <li>
              <h3>Color What You Want</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> "background", "color", "border-color"</p>
              <p><span class="label label-info">Defaults</span> "background"</p>
              <pre class="prettyprint">$('#some-element').colorful({attributeToColor: "color"});</pre>
            </li>

            <li>
              <h3>Pull Data from Content or Data Attributes</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> "html" or any valid HTML attribute (e.g. "title", "data-val", etc.)</p>
              <p><span class="label label-info">Defaults</span> "html"</p>
              <pre class="prettyprint">$('#some-element').colorful({dataAttribute:"data-value"});</pre>
            </li>

            <li>
              <h3>Choose Your Scale</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> "linear", "log"</p>
              <p><span class="label label-info">Defaults</span> "linear"</p>
              <pre class="prettyprint">$('#some-element').colorful({scale:"log"});</pre>
              <table id="table1point5">
                <tr>
                  <td>0</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                  <td>8</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>11</td>
                  <td>12</td>
                  <td>13</td>
                  <td>14</td>
                  <td>15</td>
                  <td>16</td>
                  <td>17</td>
                  <td>18</td>
                  <td>19</td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>21</td>
                  <td>22</td>
                  <td>23</td>
                  <td>24</td>
                  <td>25</td>
                  <td>26</td>
                  <td>27</td>
                  <td>28</td>
                  <td>29</td>
                </tr>
                <tr>
                  <td>30</td>
                  <td>31</td>
                  <td>32</td>
                  <td>33</td>
                  <td>34</td>
                  <td>35</td>
                  <td>36</td>
                  <td>37</td>
                  <td>38</td>
                  <td>39</td>
                </tr>
                <tr>
                  <td>40</td>
                  <td>41</td>
                  <td>42</td>
                  <td>43</td>
                  <td>44</td>
                  <td>45</td>
                  <td>46</td>
                  <td>47</td>
                  <td>48</td>
                  <td>49</td>
                </tr>
                <tr>
                  <td>50</td>
                  <td>51</td>
                  <td>52</td>
                  <td>53</td>
                  <td>54</td>
                  <td>55</td>
                  <td>56</td>
                  <td>57</td>
                  <td>58</td>
                  <td>59</td>
                </tr>
              </table>
              <br/>
              <table id="table1point6">
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                  <td>8</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>20</td>
                  <td>30</td>
                  <td>40</td>
                  <td>50</td>
                  <td>60</td>
                  <td>70</td>
                  <td>80</td>
                  <td>90</td>
                </tr>
                <tr>
                  <td>100</td>
                  <td>200</td>
                  <td>300</td>
                  <td>400</td>
                  <td>500</td>
                  <td>600</td>
                  <td>700</td>
                  <td>800</td>
                  <td>900</td>
                </tr>
                <tr>
                  <td>1000</td>
                  <td>2000</td>
                  <td>3000</td>
                  <td>4000</td>
                  <td>5000</td>
                  <td>6000</td>
                  <td>7000</td>
                  <td>8000</td>
                  <td>9000</td>
                </tr>
                <tr>
                  <td>10000</td>
                  <td>20000</td>
                  <td>30000</td>
                  <td>40000</td>
                  <td>50000</td>
                  <td>60000</td>
                  <td>70000</td>
                  <td>80000</td>
                  <td>90000</td>
                </tr>
                <tr>
                  <td>100000</td>
                  <td>200000</td>
                  <td>300000</td>
                  <td>400000</td>
                  <td>500000</td>
                  <td>600000</td>
                  <td>700000</td>
                  <td>800000</td>
                  <td>900000</td>
                </tr>
              </table>
            </li>

            <li>
              <h3>Focus on the Important Things</h3>
              <p>Don't waste precious gradient space on values you don't care about. Zero in on the important data by defining a minimum and/or a maximum value for coloring. Elements with associated values that don't qualify will be totally ignored.</p>
              <p><span class="label">Options</span> Any numerical value.</p>
              <p><span class="label label-info">Defaults</span> There is no default min/max value.</p>
              <pre class="prettyprint">$('#some-element').colorful({min_val: 0.5, max_val: 2});</pre>
              <table id="min-max">
                <tbody><tr>
                  <th></th>
                  <th>0</th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                  <th>8</th>
                  <th>9</th>
                  <th>10</th>
                  <th>11</th>
                  <th>12</th>
                  <th>13</th>
                  <th>14</th>
                  <th>15</th>
                  <th>16</th>
                  <th>17</th>
                  <th>18</th>
                  <th>19</th>
                  <th>20</th>
                  <th>21</th>
                  <th>22</th>
                  <th>23</th>
                </tr>
                  <tr>
                    <th>Sun</th>
                    <td  title="0.38235294117647056 visits">0.38</td>
                    <td  title="0.3088235294117647 visits">0.31</td>
                    <td  title="0.38235294117647056 visits">0.38</td>
                    <td  title="0.3382352941176471 visits">0.34</td>
                    <td  title="0.27941176470588236 visits">0.28</td>
                    <td  title="0.2647058823529412 visits">0.26</td>
                    <td  title="0.27941176470588236 visits">0.28</td>
                    <td  title="0.20588235294117646 visits">0.21</td>
                    <td  title="0.25 visits">0.25</td>
                    <td  title="0.4411764705882353 visits">0.44</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.5441176470588235 visits">0.54</td>
                    <td  title="0.4852941176470588 visits">0.49</td>
                    <td  title="0.4117647058823529 visits">0.41</td>
                    <td  title="0.6323529411764706 visits">0.63</td>
                    <td  title="0.6323529411764706 visits">0.63</td>
                    <td  title="0.6617647058823529 visits">0.66</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.6176470588235294 visits">0.62</td>
                    <td  title="0.7058823529411765 visits">0.71</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.6323529411764706 visits">0.63</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                  </tr>
                  <tr>
                    <th>Mon</th>
                    <td  title="0.5147058823529411 visits">0.51</td>
                    <td  title="0.5 visits">0.5</td>
                    <td  title="0.4117647058823529 visits">0.41</td>
                    <td  title="0.27941176470588236 visits">0.28</td>
                    <td  title="0.2647058823529412 visits">0.26</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.47058823529411764 visits">0.47</td>
                    <td  title="1.0 visits">1.0</td>
                    <td  title="1.5441176470588236 visits">1.54</td>
                    <td  title="2.1029411764705883 visits">2.1</td>
                    <td  title="2.235294117647059 visits">2.24</td>
                    <td  title="2.2058823529411766 visits">2.21</td>
                    <td  title="2.3676470588235294 visits">2.37</td>
                    <td  title="2.5294117647058822 visits">2.53</td>
                    <td  title="2.3823529411764706 visits">2.38</td>
                    <td  title="2.411764705882353 visits">2.41</td>
                    <td  title="1.75 visits">1.75</td>
                    <td  title="1.0588235294117647 visits">1.06</td>
                    <td  title="0.7352941176470589 visits">0.74</td>
                    <td  title="0.5294117647058824 visits">0.53</td>
                    <td  title="1.088235294117647 visits">1.09</td>
                    <td  title="0.6617647058823529 visits">0.66</td>
                    <td  title="0.7352941176470589 visits">0.74</td>
                  </tr>
                  <tr>
                    <th>Tues</th>
                    <td  title="0.44776119402985076 visits">0.45</td>
                    <td  title="0.4925373134328358 visits">0.49</td>
                    <td  title="0.5223880597014925 visits">0.52</td>
                    <td  title="0.3880597014925373 visits">0.39</td>
                    <td  title="0.29850746268656714 visits">0.3</td>
                    <td  title="0.5373134328358209 visits">0.54</td>
                    <td  title="0.3283582089552239 visits">0.33</td>
                    <td  title="0.417910447761194 visits">0.42</td>
                    <td  title="1.328358208955224 visits">1.33</td>
                    <td  title="1.7611940298507462 visits">1.76</td>
                    <td  title="2.343283582089552 visits">2.34</td>
                    <td  title="2.4925373134328357 visits">2.49</td>
                    <td  title="2.298507462686567 visits">2.3</td>
                    <td  title="2.388059701492537 visits">2.39</td>
                    <td  title="2.5522388059701493 visits">2.55</td>
                    <td  title="2.253731343283582 visits">2.25</td>
                    <td  title="2.6417910447761193 visits">2.64</td>
                    <td  title="1.6865671641791045 visits">1.69</td>
                    <td  title="1.0 visits">1.0</td>
                    <td  title="0.7761194029850746 visits">0.78</td>
                    <td  title="0.7761194029850746 visits">0.78</td>
                    <td  title="0.7164179104477612 visits">0.72</td>
                    <td  title="0.6716417910447762 visits">0.67</td>
                    <td  title="0.6865671641791045 visits">0.69</td>
                  </tr>
                  <tr>
                    <th>Wed</th>
                    <td  title="0.7058823529411765 visits">0.71</td>
                    <td  title="0.4411764705882353 visits">0.44</td>
                    <td  title="0.36764705882352944 visits">0.37</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.5294117647058824 visits">0.53</td>
                    <td  title="0.5441176470588235 visits">0.54</td>
                    <td  title="1.338235294117647 visits">1.34</td>
                    <td  title="1.6470588235294117 visits">1.65</td>
                    <td  title="2.6470588235294117 visits">2.65</td>
                    <td  title="2.338235294117647 visits">2.34</td>
                    <td  title="2.1911764705882355 visits">2.19</td>
                    <td  title="1.9558823529411764 visits">1.96</td>
                    <td  title="2.3529411764705883 visits">2.35</td>
                    <td  title="2.3823529411764706 visits">2.38</td>
                    <td  title="2.3823529411764706 visits">2.38</td>
                    <td  title="1.911764705882353 visits">1.91</td>
                    <td  title="0.9852941176470589 visits">0.99</td>
                    <td  title="0.8970588235294118 visits">0.9</td>
                    <td  title="0.8235294117647058 visits">0.82</td>
                    <td  title="0.9411764705882353 visits">0.94</td>
                    <td  title="0.9264705882352942 visits">0.93</td>
                    <td  title="0.6617647058823529 visits">0.66</td>
                  </tr>
                  <tr>
                    <th>Thur</th>
                    <td  title="0.7058823529411765 visits">0.71</td>
                    <td  title="0.6764705882352942 visits">0.68</td>
                    <td  title="0.4264705882352941 visits">0.43</td>
                    <td  title="0.29411764705882354 visits">0.29</td>
                    <td  title="0.5 visits">0.5</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="0.4852941176470588 visits">0.49</td>
                    <td  title="1.2941176470588236 visits">1.29</td>
                    <td  title="1.7058823529411764 visits">1.71</td>
                    <td  title="2.5588235294117645 visits">2.56</td>
                    <td  title="2.426470588235294 visits">2.43</td>
                    <td  title="2.426470588235294 visits">2.43</td>
                    <td  title="2.411764705882353 visits">2.41</td>
                    <td  title="2.3970588235294117 visits">2.4</td>
                    <td  title="2.6911764705882355 visits">2.69</td>
                    <td  title="2.5294117647058822 visits">2.53</td>
                    <td  title="1.661764705882353 visits">1.66</td>
                    <td  title="1.0735294117647058 visits">1.07</td>
                    <td  title="0.9264705882352942 visits">0.93</td>
                    <td  title="0.8676470588235294 visits">0.87</td>
                    <td  title="0.8382352941176471 visits">0.84</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.6176470588235294 visits">0.62</td>
                  </tr>
                  <tr>
                    <th>Fri</th>
                    <td  title="0.5588235294117647 visits">0.56</td>
                    <td  title="0.5735294117647058 visits">0.57</td>
                    <td  title="0.3382352941176471 visits">0.34</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.29411764705882354 visits">0.29</td>
                    <td  title="0.36764705882352944 visits">0.37</td>
                    <td  title="0.39705882352941174 visits">0.4</td>
                    <td  title="1.2941176470588236 visits">1.29</td>
                    <td  title="1.7205882352941178 visits">1.72</td>
                    <td  title="2.1470588235294117 visits">2.15</td>
                    <td  title="2.073529411764706 visits">2.07</td>
                    <td  title="1.9558823529411764 visits">1.96</td>
                    <td  title="2.2205882352941178 visits">2.22</td>
                    <td  title="2.264705882352941 visits">2.26</td>
                    <td  title="2.161764705882353 visits">2.16</td>
                    <td  title="1.8823529411764706 visits">1.88</td>
                    <td  title="1.338235294117647 visits">1.34</td>
                    <td  title="0.6176470588235294 visits">0.62</td>
                    <td  title="0.4411764705882353 visits">0.44</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.47058823529411764 visits">0.47</td>
                    <td  title="0.4264705882352941 visits">0.43</td>
                    <td  title="0.38235294117647056 visits">0.38</td>
                  </tr>
                  <tr>
                    <th>Sat</th>
                    <td  title="0.38235294117647056 visits">0.38</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.35294117647058826 visits">0.35</td>
                    <td  title="0.29411764705882354 visits">0.29</td>
                    <td  title="0.07352941176470588 visits">0.07</td>
                    <td  title="0.20588235294117646 visits">0.21</td>
                    <td  title="0.2647058823529412 visits">0.26</td>
                    <td  title="0.3235294117647059 visits">0.32</td>
                    <td  title="0.4264705882352941 visits">0.43</td>
                    <td  title="0.4117647058823529 visits">0.41</td>
                    <td  title="0.5294117647058824 visits">0.53</td>
                    <td  title="0.5 visits">0.5</td>
                    <td  title="0.6323529411764706 visits">0.63</td>
                    <td  title="0.47058823529411764 visits">0.47</td>
                    <td  title="0.5735294117647058 visits">0.57</td>
                    <td  title="0.7941176470588235 visits">0.79</td>
                    <td  title="0.6176470588235294 visits">0.62</td>
                    <td  title="0.4852941176470588 visits">0.49</td>
                    <td  title="0.6029411764705882 visits">0.6</td>
                    <td  title="0.45588235294117646 visits">0.46</td>
                    <td  title="0.4117647058823529 visits">0.41</td>
                    <td  title="0.36764705882352944 visits">0.37</td>
                    <td  title="0.29411764705882354 visits">0.29</td>
                    <td  title="0.5294117647058824 visits">0.53</td>
                  </tr>
              </tbody></table>
            </li>

            <li>
              <h3>Custom Classes on Colored Elements</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> A string containing any valid CSS class name.</p>
              <p><span class="label label-info">Defaults</span> "js-colorful"</p>
              <pre class="prettyprint">$('#some-element').colorful({addedClass:"colored-data"});</pre>
            </li>

            <li>
              <h3>Stepwise Coloring</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> stepwise: boolean true or false, steps: any integer > 0</p>
              <p><span class="label label-info">Defaults</span> stepwise: false, steps: 10</p>
              <pre class="prettyprint">$('#some-element').colorful({stepwise: true, steps: 4});</pre>
            </li>

            <li>
              <h3>Custom Defined Hues</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> An array of integers between 0 and 359.</p>
              <p><span class="label label-info">Defaults</span> There is no default value for custom colors.</p>
              <pre class="prettyprint">$('#some-element').colorful({colors: [0,100,200]});</pre>
            </li>

            <li>
              <h3>Reversable</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> boolean true or false</p>
              <p><span class="label label-info">Defaults</span> false</p>
              <pre class="prettyprint">$('#some-element').colorful({reverse: true});</pre>
            </li>

            <li>
              <h3>Choose Your Color Output</h3>
              <p>Some text goes here.</p>
              <p><span class="label">Options</span> 'hsla', 'rgb', 'grayscale'</p>
              <p><span class="label label-info">Defaults</span> 'hsla'</p>
              <pre class="prettyprint">$('#some-element').colorful({colorModel: 'grayscale'});</pre>
            </li>
          </ul>
        </div>

        

        <div class="span12">
          <h2 title="About Colorful.js" class="colorful" name="about-colorful" id="about-colorful">About Colorful.js</a></h2>
          
          <h3>What is it?</h3>
          <p>Colorful is a data-visualization jQuery plugin. It assigns color values to each element of dataset based on the relationship between the elements. It's easy to use, a cinch to customize, and best of all, it makes your data beautiful.</p>
         
          <h3>How does it work?</h3>
          <p>
          <ol>
            <li>Colorful.js extracts numerical values from HTML elements to build a dataset.</li>
            <li>The data is run through a feature-scaling algorithm.</li>
            <li>An HSLA color gradient is constructed.</li>
            <li>Each datum is assigned a position along the gradient.</li>
            <li>The element associate with each datum recieves the color.</li>
          </ol>

          <h3>How about browser compatibility?</h3>

          <p>Since Colorful.js computes color values in HSL colorspace, it adds HSLA color values to elements by default. Certain nasty browsers (IE) don't play nicely with HSL or HSLA. If you are misfortunate enough to be using one of these browsers, Colorful.js can convert its HSL color values to output the same pretty colors in RGB (minus any alpha). Just be sure to set your colorModel property to 'rgb'.</p>
          <pre class="prettyprint">$('#ie-is-the-worst').colorful({colorModel: 'rgb'});</pre>
          <p>Why do we use HSL colorspace? Get your dose of color theory below.</p>


          <h3>Where can I download it?</h3>
          <p>That's easy. <a href="#download" title="Go to the Download section.">Go grab it right here.</a></p>
          
        </div>
        <div class="span12">
          <h3>A Dose of Color Theory</h3>
          <p>HSL and RGB are two popluar color models (mathematical models that describe all possible colors). A quick comparison between the <a href="http://www.spotimaging.com/images/hsl_solid.jpg" title="HSL Color Model" target="_blank">HSL Color Model</a> and the <a href="http://learn.colorotate.org/media.colorotate.org/c/rgb.jpg" title="RGB Color Model" target="_blank">RGB Color Model</a> will demonstrate that the two are very different. The cylindrical nature of HSL color space is quite conducive to radial hue traversal (like traveling across the rainbow by spinning the color model). This makes it extremely easy to construct color gradients composed of attractive colors. Simple traversal of RGB colorspace typically results in a gradient that is mostly composed of, well, disgusting shades of in between.</p>

          <div class="well">
          <span class="label label-success">Good</span><h4>HSL Color Computation</h4>
          <p>Colorful.js bases color computations on axial rotation through Hue-Saturation-Lightness (HSL) colorspace.</p>
          <p>If you would like to experiment with HSL colorspace, checkout Brandon Mathis' excellent <a href="http://hslpicker.com/#001A57" title="HSL Color Picker" target="_blank">HSL Color Picker</a>. (This is also a helpful tool for picking your color ranges and offsets.)</p>
          <table id="table0">
            <tr>
              <td data-number="9">0</td>
              <td data-number="8">1</td>
              <td data-number="7">2</td>
              <td data-number="6">3</td>
              <td data-number="5">4</td>
              <td data-number="4">5</td>
              <td data-number="3">6</td>
              <td data-number="2">7</td>
              <td data-number="1">8</td>
              <td data-number="0">9</td>
            </tr>
            <tr>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
              <td>19</td>
            </tr>
            <tr>
              <td>20</td>
              <td>21</td>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
              <td>27</td>
              <td>28</td>
              <td>29</td>
            </tr>
            <tr>
              <td>30</td>
              <td>31</td>
              <td>32</td>
              <td>33</td>
              <td>34</td>
              <td>35</td>
              <td>36</td>
              <td>37</td>
              <td>38</td>
              <td>39</td>
            </tr>
            <tr>
              <td>40</td>
              <td>41</td>
              <td>42</td>
              <td>43</td>
              <td>44</td>
              <td>45</td>
              <td>46</td>
              <td>47</td>
              <td>48</td>
              <td>49</td>
            </tr>
          </table>
        </div>
          <br/>
          
          <div class="well bad">
          <span class="label label-important">Bad</span>
          <h4>RGB Color Computation</h4>
          <p>Colorful.js does NOT use point-to-point traversal of RGB colorspace, and will never output something this heinous.</p>
          <table id="rgb-sample">
            <tr>
              <td data-value="0">0</td>
              <td data-value="0.02">1</td>
              <td data-value="0.04">2</td>
              <td data-value="0.06">3</td>
              <td data-value="0.08">4</td>
              <td data-value="0.1">5</td>
              <td data-value="0.12">6</td>
              <td data-value="0.14">7</td>
              <td data-value="0.16">8</td>
              <td data-value="0.18">9</td>
            </tr>
            <tr>
              <td data-value="0.2">10</td>
              <td data-value="0.22">11</td>
              <td data-value="0.24">12</td>
              <td data-value="0.26">13</td>
              <td data-value="0.28">14</td>
              <td data-value="0.3">15</td>
              <td data-value="0.32">16</td>
              <td data-value="0.34">17</td>
              <td data-value="0.36">18</td>
              <td data-value="0.38">19</td>
            </tr>
            <tr>
              <td data-value="0.4">20</td>
              <td data-value="0.42">21</td>
              <td data-value="0.44">22</td>
              <td data-value="0.46">23</td>
              <td data-value="0.48">24</td>
              <td data-value="0.5">25</td>
              <td data-value="0.52">26</td>
              <td data-value="0.54">27</td>
              <td data-value="0.56">28</td>
              <td data-value="0.58">29</td>
            </tr>
            <tr>
              <td data-value="0.6">30</td>
              <td data-value="0.62">31</td>
              <td data-value="0.64">32</td>
              <td data-value="0.66">33</td>
              <td data-value="0.68">34</td>
              <td data-value="0.7">35</td>
              <td data-value="0.72">36</td>
              <td data-value="0.74">37</td>
              <td data-value="0.76">38</td>
              <td data-value="0.78">39</td>
            </tr>
            <tr>
              <td data-value="0.8">40</td>
              <td data-value="0.82">41</td>
              <td data-value="0.84">42</td>
              <td data-value="0.86">43</td>
              <td data-value="0.88">44</td>
              <td data-value="0.9">45</td>
              <td data-value="0.92">46</td>
              <td data-value="0.94">47</td>
              <td data-value="0.96">48</td>
              <td data-value="0.98">49</td>
            </tr>
          </table>
        </div>
          <hr/>
        </div>
        <div class="span12">
          <h3>Browser Compatibility</h3>
          <p>Since Colorful.js computes color values in HSL colorspace, it adds HSLA color values to elements by default. Certain nasty browsers don't play nicely with HSL or HSLA. If you are misfortunate enough to be using one of these browsers, Colorful.js can convert its HSL color values to output the same pretty colors in RGB.</p>
          <pre class="prettyprint">$('#table0').colorful({theta: 90, colorModel: 'rgb'});</pre>
          <hr />
        </div>
        <div class="span12">
          <h3>Discrete Color Steps</h3>
          <p>If you don't want a full gradient, you can pass your desired number of color steps. Also compatible with grayscale colorspace.</p>
          <pre class="prettyprint">$('#table1').colorful({theta: 90, discrete: true, steps: 3});</pre>
          <table id="table1">
            <tr>
              <td>0</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <td>7</td>
              <td>8</td>
              <td>9</td>
            </tr>
            <tr>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
              <td>19</td>
            </tr>
            <tr>
              <td>20</td>
              <td>21</td>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
              <td>27</td>
              <td>28</td>
              <td>29</td>
            </tr>
            <tr>
              <td>30</td>
              <td>31</td>
              <td>32</td>
              <td>33</td>
              <td>34</td>
              <td>35</td>
              <td>36</td>
              <td>37</td>
              <td>38</td>
              <td>39</td>
            </tr>
            <tr>
              <td>40</td>
              <td>41</td>
              <td>42</td>
              <td>43</td>
              <td>44</td>
              <td>45</td>
              <td>46</td>
              <td>47</td>
              <td>48</td>
              <td>49</td>
            </tr>
            <tr>
              <td>50</td>
              <td>51</td>
              <td>52</td>
              <td>53</td>
              <td>54</td>
              <td>55</td>
              <td>56</td>
              <td>57</td>
              <td>58</td>
              <td>59</td>
            </tr>
          </table>
          <hr/>
        </div>
        <div class="span12">
          <h3>Choose Your Scale</h3>
          <p>Default is linear, but if you're feeling fancy, why not go logarithmic?</p>
          <pre class="prettyprint">$('#table1point5, #table1point6').colorful({theta: 90, scale: 'log'});</pre>
          <table id="table1point5">
            <tr>
              <td>0</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <td>7</td>
              <td>8</td>
              <td>9</td>
            </tr>
            <tr>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
              <td>19</td>
            </tr>
            <tr>
              <td>20</td>
              <td>21</td>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
              <td>27</td>
              <td>28</td>
              <td>29</td>
            </tr>
            <tr>
              <td>30</td>
              <td>31</td>
              <td>32</td>
              <td>33</td>
              <td>34</td>
              <td>35</td>
              <td>36</td>
              <td>37</td>
              <td>38</td>
              <td>39</td>
            </tr>
            <tr>
              <td>40</td>
              <td>41</td>
              <td>42</td>
              <td>43</td>
              <td>44</td>
              <td>45</td>
              <td>46</td>
              <td>47</td>
              <td>48</td>
              <td>49</td>
            </tr>
            <tr>
              <td>50</td>
              <td>51</td>
              <td>52</td>
              <td>53</td>
              <td>54</td>
              <td>55</td>
              <td>56</td>
              <td>57</td>
              <td>58</td>
              <td>59</td>
            </tr>
          </table>
          <br/>
          <table id="table1point6">
            <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
              <td>7</td>
              <td>8</td>
              <td>9</td>
            </tr>
            <tr>
              <td>10</td>
              <td>20</td>
              <td>30</td>
              <td>40</td>
              <td>50</td>
              <td>60</td>
              <td>70</td>
              <td>80</td>
              <td>90</td>
            </tr>
            <tr>
              <td>100</td>
              <td>200</td>
              <td>300</td>
              <td>400</td>
              <td>500</td>
              <td>600</td>
              <td>700</td>
              <td>800</td>
              <td>900</td>
            </tr>
            <tr>
              <td>1000</td>
              <td>2000</td>
              <td>3000</td>
              <td>4000</td>
              <td>5000</td>
              <td>6000</td>
              <td>7000</td>
              <td>8000</td>
              <td>9000</td>
            </tr>
            <tr>
              <td>10000</td>
              <td>20000</td>
              <td>30000</td>
              <td>40000</td>
              <td>50000</td>
              <td>60000</td>
              <td>70000</td>
              <td>80000</td>
              <td>90000</td>
            </tr>
            <tr>
              <td>100000</td>
              <td>200000</td>
              <td>300000</td>
              <td>400000</td>
              <td>500000</td>
              <td>600000</td>
              <td>700000</td>
              <td>800000</td>
              <td>900000</td>
            </tr>
          </table>
          <hr/>
        </div>
        <div class="span12">
          <h3>Color What You Want</h3>
          <p>If you don't want to apply the coloring to element backrounds, pass your desired alternative CSS attribute.</p>
                  <pre class="prettyprint">$('#table2').colorful({theta: 90, attributeToColor: 'color'});</pre>
                  <table id="table2">
                    <tr>
                      <td>0</td>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>9</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>11</td>
                      <td>12</td>
                      <td>13</td>
                      <td>14</td>
                      <td>15</td>
                      <td>16</td>
                      <td>17</td>
                      <td>18</td>
                      <td>19</td>
                    </tr>
                    <tr>
                      <td>20</td>
                      <td>21</td>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                      <td>29</td>
                    </tr>
                    <tr>
                      <td>30</td>
                      <td>31</td>
                      <td>32</td>
                      <td>33</td>
                      <td>34</td>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                      <td>39</td>
                    </tr>
                    <tr>
                      <td>40</td>
                      <td>41</td>
                      <td>42</td>
                      <td>43</td>
                      <td>44</td>
                      <td>45</td>
                      <td>46</td>
                      <td>47</td>
                      <td>48</td>
                      <td>49</td>
                    </tr>
                    <tr>
                      <td>50</td>
                      <td>51</td>
                      <td>52</td>
                      <td>53</td>
                      <td>54</td>
                      <td>55</td>
                      <td>56</td>
                      <td>57</td>
                      <td>58</td>
                      <td>59</td>
                    </tr>
                  </table>
                  <hr/>
                </div>
                <div class="span12">
                  <h3>Size of the Spectrum</h3>
                  <p>Choose the spectrum width by specifying how many degrees around the color wheel you would like to travel.</p>
                  <pre class="prettyprint">$('#table3').colorful({theta: 180});</pre>
                  <table id="table3">
                    <tr>
                      <td>0</td>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>9</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>11</td>
                      <td>12</td>
                      <td>13</td>
                      <td>14</td>
                      <td>15</td>
                      <td>16</td>
                      <td>17</td>
                      <td>18</td>
                      <td>19</td>
                    </tr>
                    <tr>
                      <td>20</td>
                      <td>21</td>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                      <td>29</td>
                    </tr>
                    <tr>
                      <td>30</td>
                      <td>31</td>
                      <td>32</td>
                      <td>33</td>
                      <td>34</td>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                      <td>39</td>
                    </tr>
                    <tr>
                      <td>40</td>
                      <td>41</td>
                      <td>42</td>
                      <td>43</td>
                      <td>44</td>
                      <td>45</td>
                      <td>46</td>
                      <td>47</td>
                      <td>48</td>
                      <td>49</td>
                    </tr>
                    <tr>
                      <td>50</td>
                      <td>51</td>
                      <td>52</td>
                      <td>53</td>
                      <td>54</td>
                      <td>55</td>
                      <td>56</td>
                      <td>57</td>
                      <td>58</td>
                      <td>59</td>
                    </tr>
                  </table>
                  <hr/>
                </div>
                <div class="span12">
                  <h3>Fast Forward</h3>
                  <p>If you would like to use a particular portion of the spectrum, define an offset (in degrees) for the start of your theta region.</p>
                  <pre class="prettyprint">$('#table4').colorful({theta: 180, offset: 180});</pre>
                  <table id="table4">
                    <tr>
                      <td>0</td>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>9</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>11</td>
                      <td>12</td>
                      <td>13</td>
                      <td>14</td>
                      <td>15</td>
                      <td>16</td>
                      <td>17</td>
                      <td>18</td>
                      <td>19</td>
                    </tr>
                    <tr>
                      <td>20</td>
                      <td>21</td>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                      <td>29</td>
                    </tr>
                    <tr>
                      <td>30</td>
                      <td>31</td>
                      <td>32</td>
                      <td>33</td>
                      <td>34</td>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                      <td>39</td>
                    </tr>
                    <tr>
                      <td>40</td>
                      <td>41</td>
                      <td>42</td>
                      <td>43</td>
                      <td>44</td>
                      <td>45</td>
                      <td>46</td>
                      <td>47</td>
                      <td>48</td>
                      <td>49</td>
                    </tr>
                    <tr>
                      <td>50</td>
                      <td>51</td>
                      <td>52</td>
                      <td>53</td>
                      <td>54</td>
                      <td>55</td>
                      <td>56</td>
                      <td>57</td>
                      <td>58</td>
                      <td>59</td>
                    </tr>
                  </table>
                  <hr/>
                </div>
                <div class="span12">
                  <h3>Reverse! Reverse!</h3>
                  <p>Optionally travel around the color spectrum in reverse.</p>
                  <pre class="prettyprint">$('#table5').colorful({theta: 180, offset: 180, reverse: true});</pre>
                  <table id="table5">
                    <tr>
                      <td>0</td>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                      <td>4</td>
                      <td>5</td>
                      <td>6</td>
                      <td>7</td>
                      <td>8</td>
                      <td>9</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>11</td>
                      <td>12</td>
                      <td>13</td>
                      <td>14</td>
                      <td>15</td>
                      <td>16</td>
                      <td>17</td>
                      <td>18</td>
                      <td>19</td>
                    </tr>
                    <tr>
                      <td>20</td>
                      <td>21</td>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                      <td>29</td>
                    </tr>
                    <tr>
                      <td>30</td>
                      <td>31</td>
                      <td>32</td>
                      <td>33</td>
                      <td>34</td>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                      <td>39</td>
                    </tr>
                    <tr>
                      <td>40</td>
                      <td>41</td>
                      <td>42</td>
                      <td>43</td>
                      <td>44</td>
                      <td>45</td>
                      <td>46</td>
                      <td>47</td>
                      <td>48</td>
                      <td>49</td>
                    </tr>
                    <tr>
                      <td>50</td>
                      <td>51</td>
                      <td>52</td>
                      <td>53</td>
                      <td>54</td>
                      <td>55</td>
                      <td>56</td>
                      <td>57</td>
                      <td>58</td>
                      <td>59</td>
                    </tr>
                  </table>
                  <hr/>
                </div>
                <div class="span12">
                  <h3>Please don't make me use tables...</h3>
                  <p>Use whatever you want. Simply specify which type of HTML tag should be parsed for numerical values.</p>
                  <pre class="prettyprint">$('#div1').colorful({theta: 360, elementSelector: 'div'});</pre>
                  <div id="div1" class="demo-div clearfix">
                    <div>0</div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div>
                    <div>8</div>
                    <div>9</div>
                  </div>
                  <hr/>
                </div>
                <div class="span12">
                  <h3>Going Grey (or Gray)</h3>
                  <p>Hate color? Go grayscale.</p>
                  <pre class="prettyprint">$('#div2').colorful({colorModel: 'grayscale', elementSelector: 'div'});</pre>
                  <div id="div2" class="demo-div clearfix">
                    <div>0</div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div>
                    <div>8</div>
                    <div>9</div>
                  </div>
                  <hr/>
                </div>

                <div class="span12">
                  <pre class="prettyprint">$('#div3').colorful({colorModel: 'grayscale', discrete: true, steps:3, elementSelector: 'div'});</pre>
                  <div id="div3" class="demo-div clearfix">
                    <div>0</div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div>
                    <div>8</div>
                    <div>9</div>
                  </div>
                  <hr/>
                </div>

                <div class="span12">
                  <pre class="prettyprint">$('#div4').colorful({colorModel: 'grayscale', discrete: true, steps:5, elementSelector: 'div'});</pre>
                  <div id="div4" class="demo-div clearfix">
                    <div>0</div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                    <div>7</div>
                    <div>8</div>
                    <div>9</div>
                  </div>
                  <hr/>
                </div>

                <div class="span12">
                  <h3>Smart Parsing</h3>
                  <p>We're totally cool with floats. Furthermore, values in your elements needn't even need to be entirely numeric. We'll do our best to pull out the right numbers.</p>
                  <pre class="prettyprint">$('#div5').colorful({theta: 220, elementSelector: 'a', attributeToColor: 'color'});</pre>
                  <div id="div5" class="demo-div clearfix">
                    <p><a href="#" title="1 Widget">1 Widget</a> | <a href="#" title="2 Widgets">2 Widgets</a> | <a href="#" title="3 Widgets">3 Widgets</a> | <a href="#" title="4 Widgets">4 Widgets</a> | <a href="#" title="5 Widgets">5 Widgets</a> | <a href="#" title="6 Widgets">6 Widgets</a> | <a href="#" title="7 Widgets">7 Widgets</a> | <a href="#" title="8 Widgets">8 Widgets</a> | <a href="#" title="9 Widgets">9 Widgets</a> | <a href="#" title="10 Widgets">10 Widgets</a></p>
                  </div>
                  <hr/>
                </div>

                
                <div class="span12">
                  <h3>Customize Lightness and Saturation (and Apha Too)</h3>
                  <p>colorful assigns hues to data in HSL colorspace. The S and the L (and the alpha) are up to you. No alpha for you if you are using RGB colorspace. RGB should only be used for compatibility with the browsers that shall not be named.</p>
                  <pre class="prettyprint">$('#table7').colorful({theta: 180, reverse: true, alpha:0.5, saturation:90, lightness:40});</pre>
                  <table id="table7" class="pattern-background">
                    <tbody><tr>
                      <th></th>
                      <th>0</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>5</th>
                      <th>6</th>
                      <th>7</th>
                      <th>8</th>
                      <th>9</th>
                      <th>10</th>
                      <th>11</th>
                      <th>12</th>
                      <th>13</th>
                      <th>14</th>
                      <th>15</th>
                      <th>16</th>
                      <th>17</th>
                      <th>18</th>
                      <th>19</th>
                      <th>20</th>
                      <th>21</th>
                      <th>22</th>
                      <th>23</th>
                    </tr>
                      <tr>
                        <th>Sun</th>
                        <td  title="0.38235294117647056 visits">0.38</td>
                        <td  title="0.3088235294117647 visits">0.31</td>
                        <td  title="0.38235294117647056 visits">0.38</td>
                        <td  title="0.3382352941176471 visits">0.34</td>
                        <td  title="0.27941176470588236 visits">0.28</td>
                        <td  title="0.2647058823529412 visits">0.26</td>
                        <td  title="0.27941176470588236 visits">0.28</td>
                        <td  title="0.20588235294117646 visits">0.21</td>
                        <td  title="0.25 visits">0.25</td>
                        <td  title="0.4411764705882353 visits">0.44</td>
                        <td  title="0.6029411764705882 visits">0.6</td>
                        <td  title="0.5441176470588235 visits">0.54</td>
                        <td  title="0.4852941176470588 visits">0.49</td>
                        <td  title="0.4117647058823529 visits">0.41</td>
                        <td  title="0.6323529411764706 visits">0.63</td>
                        <td  title="0.6323529411764706 visits">0.63</td>
                        <td  title="0.6617647058823529 visits">0.66</td>
                        <td  title="0.45588235294117646 visits">0.46</td>
                        <td  title="0.6029411764705882 visits">0.6</td>
                        <td  title="0.6176470588235294 visits">0.62</td>
                        <td  title="0.7058823529411765 visits">0.71</td>
                        <td  title="0.6029411764705882 visits">0.6</td>
                        <td  title="0.6323529411764706 visits">0.63</td>
                        <td  title="0.45588235294117646 visits">0.46</td>
                      </tr>
                      <tr>
                        <th>Mon</th>
                        <td  title="0.5147058823529411 visits">0.51</td>
                        <td  title="0.5 visits">0.5</td>
                        <td  title="0.4117647058823529 visits">0.41</td>
                        <td  title="0.27941176470588236 visits">0.28</td>
                        <td  title="0.2647058823529412 visits">0.26</td>
                        <td  title="0.45588235294117646 visits">0.46</td>
                        <td  title="0.35294117647058826 visits">0.35</td>
                        <td  title="0.47058823529411764 visits">0.47</td>
                        <td  title="1.0 visits">1.0</td>
                        <td  title="1.5441176470588236 visits">1.54</td>
                        <td  title="2.1029411764705883 visits">2.1</td>
                        <td  title="2.235294117647059 visits">2.24</td>
                        <td  title="2.2058823529411766 visits">2.21</td>
                        <td  title="2.3676470588235294 visits">2.37</td>
                        <td  title="2.5294117647058822 visits">2.53</td>
                        <td  title="2.3823529411764706 visits">2.38</td>
                        <td  title="2.411764705882353 visits">2.41</td>
                        <td  title="1.75 visits">1.75</td>
                        <td  title="1.0588235294117647 visits">1.06</td>
                        <td  title="0.7352941176470589 visits">0.74</td>
                        <td  title="0.5294117647058824 visits">0.53</td>
                        <td  title="1.088235294117647 visits">1.09</td>
                        <td  title="0.6617647058823529 visits">0.66</td>
                        <td  title="0.7352941176470589 visits">0.74</td>
                      </tr>
                      <tr>
                        <th>Tues</th>
                        <td  title="0.44776119402985076 visits">0.45</td>
                        <td  title="0.4925373134328358 visits">0.49</td>
                        <td  title="0.5223880597014925 visits">0.52</td>
                        <td  title="0.3880597014925373 visits">0.39</td>
                        <td  title="0.29850746268656714 visits">0.3</td>
                        <td  title="0.5373134328358209 visits">0.54</td>
                        <td  title="0.3283582089552239 visits">0.33</td>
                        <td  title="0.417910447761194 visits">0.42</td>
                        <td  title="1.328358208955224 visits">1.33</td>
                        <td  title="1.7611940298507462 visits">1.76</td>
                        <td  title="2.343283582089552 visits">2.34</td>
                        <td  title="2.4925373134328357 visits">2.49</td>
                        <td  title="2.298507462686567 visits">2.3</td>
                        <td  title="2.388059701492537 visits">2.39</td>
                        <td  title="2.5522388059701493 visits">2.55</td>
                        <td  title="2.253731343283582 visits">2.25</td>
                        <td  title="2.6417910447761193 visits">2.64</td>
                        <td  title="1.6865671641791045 visits">1.69</td>
                        <td  title="1.0 visits">1.0</td>
                        <td  title="0.7761194029850746 visits">0.78</td>
                        <td  title="0.7761194029850746 visits">0.78</td>
                        <td  title="0.7164179104477612 visits">0.72</td>
                        <td  title="0.6716417910447762 visits">0.67</td>
                        <td  title="0.6865671641791045 visits">0.69</td>
                      </tr>
                      <tr>
                        <th>Wed</th>
                        <td  title="0.7058823529411765 visits">0.71</td>
                        <td  title="0.4411764705882353 visits">0.44</td>
                        <td  title="0.36764705882352944 visits">0.37</td>
                        <td  title="0.39705882352941174 visits">0.4</td>
                        <td  title="0.45588235294117646 visits">0.46</td>
                        <td  title="0.35294117647058826 visits">0.35</td>
                        <td  title="0.5294117647058824 visits">0.53</td>
                        <td  title="0.5441176470588235 visits">0.54</td>
                        <td  title="1.338235294117647 visits">1.34</td>
                        <td  title="1.6470588235294117 visits">1.65</td>
                        <td  title="2.6470588235294117 visits">2.65</td>
                        <td  title="2.338235294117647 visits">2.34</td>
                        <td  title="2.1911764705882355 visits">2.19</td>
                        <td  title="1.9558823529411764 visits">1.96</td>
                        <td  title="2.3529411764705883 visits">2.35</td>
                        <td  title="2.3823529411764706 visits">2.38</td>
                        <td  title="2.3823529411764706 visits">2.38</td>
                        <td  title="1.911764705882353 visits">1.91</td>
                        <td  title="0.9852941176470589 visits">0.99</td>
                        <td  title="0.8970588235294118 visits">0.9</td>
                        <td  title="0.8235294117647058 visits">0.82</td>
                        <td  title="0.9411764705882353 visits">0.94</td>
                        <td  title="0.9264705882352942 visits">0.93</td>
                        <td  title="0.6617647058823529 visits">0.66</td>
                      </tr>
                      <tr>
                        <th>Thur</th>
                        <td  title="0.7058823529411765 visits">0.71</td>
                        <td  title="0.6764705882352942 visits">0.68</td>
                        <td  title="0.4264705882352941 visits">0.43</td>
                        <td  title="0.29411764705882354 visits">0.29</td>
                        <td  title="0.5 visits">0.5</td>
                        <td  title="0.39705882352941174 visits">0.4</td>
                        <td  title="0.39705882352941174 visits">0.4</td>
                        <td  title="0.4852941176470588 visits">0.49</td>
                        <td  title="1.2941176470588236 visits">1.29</td>
                        <td  title="1.7058823529411764 visits">1.71</td>
                        <td  title="2.5588235294117645 visits">2.56</td>
                        <td  title="2.426470588235294 visits">2.43</td>
                        <td  title="2.426470588235294 visits">2.43</td>
                        <td  title="2.411764705882353 visits">2.41</td>
                        <td  title="2.3970588235294117 visits">2.4</td>
                        <td  title="2.6911764705882355 visits">2.69</td>
                        <td  title="2.5294117647058822 visits">2.53</td>
                        <td  title="1.661764705882353 visits">1.66</td>
                        <td  title="1.0735294117647058 visits">1.07</td>
                        <td  title="0.9264705882352942 visits">0.93</td>
                        <td  title="0.8676470588235294 visits">0.87</td>
                        <td  title="0.8382352941176471 visits">0.84</td>
                        <td  title="0.6029411764705882 visits">0.6</td>
                        <td  title="0.6176470588235294 visits">0.62</td>
                      </tr>
                      <tr>
                        <th>Fri</th>
                        <td  title="0.5588235294117647 visits">0.56</td>
                        <td  title="0.5735294117647058 visits">0.57</td>
                        <td  title="0.3382352941176471 visits">0.34</td>
                        <td  title="0.39705882352941174 visits">0.4</td>
                        <td  title="0.35294117647058826 visits">0.35</td>
                        <td  title="0.29411764705882354 visits">0.29</td>
                        <td  title="0.36764705882352944 visits">0.37</td>
                        <td  title="0.39705882352941174 visits">0.4</td>
                        <td  title="1.2941176470588236 visits">1.29</td>
                        <td  title="1.7205882352941178 visits">1.72</td>
                        <td  title="2.1470588235294117 visits">2.15</td>
                        <td  title="2.073529411764706 visits">2.07</td>
                        <td  title="1.9558823529411764 visits">1.96</td>
                        <td  title="2.2205882352941178 visits">2.22</td>
                        <td  title="2.264705882352941 visits">2.26</td>
                        <td  title="2.161764705882353 visits">2.16</td>
                        <td  title="1.8823529411764706 visits">1.88</td>
                        <td  title="1.338235294117647 visits">1.34</td>
                        <td  title="0.6176470588235294 visits">0.62</td>
                        <td  title="0.4411764705882353 visits">0.44</td>
                        <td  title="0.45588235294117646 visits">0.46</td>
                        <td  title="0.47058823529411764 visits">0.47</td>
                        <td  title="0.4264705882352941 visits">0.43</td>
                        <td  title="0.38235294117647056 visits">0.38</td>
                      </tr>
                      <tr>
                        <th>Sat</th>
                        <td  title="0.38235294117647056 visits">0.38</td>
                        <td  title="0.35294117647058826 visits">0.35</td>
                        <td  title="0.35294117647058826 visits">0.35</td>
                        <td  title="0.29411764705882354 visits">0.29</td>
                        <td  title="0.07352941176470588 visits">0.07</td>
                        <td  title="0.20588235294117646 visits">0.21</td>
                        <td  title="0.2647058823529412 visits">0.26</td>
                        <td  title="0.3235294117647059 visits">0.32</td>
                        <td  title="0.4264705882352941 visits">0.43</td>
                        <td  title="0.4117647058823529 visits">0.41</td>
                        <td  title="0.5294117647058824 visits">0.53</td>
                        <td  title="0.5 visits">0.5</td>
                        <td  title="0.6323529411764706 visits">0.63</td>
                        <td  title="0.47058823529411764 visits">0.47</td>
                        <td  title="0.5735294117647058 visits">0.57</td>
                        <td  title="0.7941176470588235 visits">0.79</td>
                        <td  title="0.6176470588235294 visits">0.62</td>
                        <td  title="0.4852941176470588 visits">0.49</td>
                        <td  title="0.6029411764705882 visits">0.6</td>
                        <td  title="0.45588235294117646 visits">0.46</td>
                        <td  title="0.4117647058823529 visits">0.41</td>
                        <td  title="0.36764705882352944 visits">0.37</td>
                        <td  title="0.29411764705882354 visits">0.29</td>
                        <td  title="0.5294117647058824 visits">0.53</td>
                      </tr>
                  </tbody></table>
                  <hr/>
                </div>
                <div class="span12">
                  <h3>Customize Lightness and Saturation (and Apha Too)</h3>
                  <p>colorful assigns hues to data in HSL colorspace. The S and the L (and the alpha) are up to you. No alpha for you if you are using RGB colorspace. RGB should only be used for compatibility with the browsers that shall not be named.</p>
                  <pre class="prettyprint">$('#mri').colorful({theta: 180, reverse: true, alpha:0.5, saturation:90, lightness:40});</pre>
                  
                </div>
                <div class="span12">
                  <h2 title="Supporters" class="colorful" name="supporters" id="supporters">Supporters</h2>
                  <h3>Contributors</h3>
                  <p>Colorful.js was developed by <a href="http://twitter.com/lawsonkurtz" title="Find Lawson Kurtz on Twitter" target="_blank">@lawsonkurtz</a>. Have a feature suggestion? <a href="https://github.com/ltk/Heat-Chart" title="Fork me on GitHub">Fork me on GitHub.</a></p>

                  <h3>Supported by The Jake Group</h3>
                  <p><a href="http://www.thejakegroup.com/" title="The Jake Group" target="_blank">The Jake Group</a> is proud to support several open source initiatives, including Colorful.js. If require assistance with your web project, or think you have what it takes to to work at Jake, <a href="http://www.thejakegroup.com/contact/contact/" title="The Jake Group" target="_blank">get in touch</a>.</p>
                </div>

      </div>
      
    </div> <!-- /container -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./heatChart.js"></script>
  <script src="./prettify.js"></script>
  <script type="text/javascript">
  function nasty_rgb_gradient( el ) {
    var r, g, b, val;
    val = $(el).attr('data-value');
    console.log(val);
    r = Math.round(255 * val);
    g = Math.round(255 * (1 - val));
    $(el).css('background', 'rgb(' + r + ', ' + g + ',0)');
  }

  $(function(){

    $('#rgb-sample').find('td').each(function(){
      window.nasty_rgb_gradient($(this));
    });

    $('#table0').colorful({portion: 0.25, reverse: true, saturation: 100});
    $('#table1').colorful({portion: 0.25, discrete: true, steps: 3});
    $('#table1point5, #table1point6').colorful({portion: 0.25, scale: 'log'});
    $('#table2').colorful({portion: 0.25, attributeToColor: 'color'});
    $('#table3').colorful({portion: 0.5});
    $('#table4').colorful({portion: 0.5, offset: 180});
    $('#table5').colorful({portion: 0.5, offset: 180, reverse: true});
    $('#div1').colorful({portion: 1, elementSelector: 'div'});
    $('#div2').colorful({colorModel: 'grayscale', elementSelector: 'div'});
    $('#div3').colorful({colorModel: 'grayscale', discrete: true, steps:3, elementSelector: 'div'});
    $('#div4').colorful({colorModel: 'grayscale', discrete: true, steps:5, elementSelector: 'div'});
    $('#div5').colorful({theta: 220, elementSelector: 'a', attributeToColor: 'color'});
    $('#table6').colorful({portion: 0.5, reverse: true});
    $('#min-max').colorful({portion: 0.5, reverse: true, min_val: 0.5, max_val: 2});
    $('#table7').colorful({portion: 0.5, reverse: true, alpha:0.5, saturation:90, lightness: 40});
    $('#mri').colorful({portion: 0.25, reverse: true, alpha:0.5, saturation:100, dataAttribute: 'data-val'});
    $('#bball').colorful({portion: 0.25, reverse: true, saturation: 85, lightness: 50, elementSelector: 'div.datum'});

    prettyPrint();

    var color_index = 0;
    var int=self.setInterval(function(){color_change()},50);

    function color_change(){
        color_val = ((color_index * 360) + 200) % 360;
        $('.hero-unit').css('background', 'hsl(' + color_val + ', 60%, 50%)');
        $('pre').css('background', 'hsla(' + color_val + ', 100%, 50%, 0.03)');
        $('h2.colorful').css({'color' : 'hsl(' + color_val + ', 60%, 50%)', 'background' : 'hsl(' + color_val + ', 60%, 50%)'});
        $('a.colorful').css({'color' : 'hsl(' + color_val + ', 60%, 50%)'});

        color_index += 0.001;
        if( color_index > 1 ){ color_index = 0; }
    }
    $(document).scroll(function(){
      var elem = $('.subnav');
      if (!elem.attr('data-top')) {
          if (elem.hasClass('navbar-fixed-top'))
              return;
          var offset = elem.offset();
          elem.attr('data-top', offset.top);
      }
      if (elem.attr('data-top') - elem.outerHeight() <= $(this).scrollTop()){
          elem.addClass('navbar-fixed-top');
      } else {
          elem.removeClass('navbar-fixed-top');
      }
    });
        
        
    //});​

  });

  </script>
  </body>
</html>
