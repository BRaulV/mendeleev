<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
/*        table {
            width: 50%;
            height: 450px;
        }
        td {
            border: 1px solid black;
            text-align: center;
            min-width: 50px;
        }
        .td-left-b-red { border-left: 2px solid red; }
        .td-up-right-b-red { 
            border-top: 2px solid red;
            border-right: 2px solid red;
        }
        .td-yellow { background-color: yellow; }
        .td-orange { background-color: orange; }
        .td-lightblue { background-color: lightblue; }
        .td-lightcyan { background-color: lightcyan; }
        .l-greenyellow { color: greenyellow }
        .td-no-b { border: 0; }
        .l-small { font-size: 10px; }*/
        body{ 
            text-align: center;
        }
        .details { display: inline-flex; border: 1px solid red;}
        .table { 
            display: block;
            border: 1px solid green;
            width: 51%;
            margin-left: 24.5%;
        }
        .row {
            height: 70px;
            display: flex;
        }
        .box {
            width: 5.55%;
            border-top: 1px solid grey;
            border-left: 1px solid grey;
        } 
        .box:last-child { border: 1px solid grey; }
        .box-header span,
        .box span { display: block; }
        .box-yellow { background-color: yellow; }
        .box-orange { background-color: orange; }
        .box-lightblue { background-color: lightblue; }
        .box-lightcyan { background-color: lightcyan; }
        .box-orangered { background-color: orangered; }
        .box-header { padding-top: 8px; }
        /*.box.box-empty { border: 0; }*/
        .small { font-size: 10px; }
        .span-bold-r {
            font-weight: bold;
            color: red;
            font-size: 25px;
        }
        .span-bold-b {
            font-weight: bold;
            color: black;
            font-size: 25px;
        }
        .span-bold-g {
            font-weight: bold;
            color: greenyellow;
            font-size: 25px;
        }
    </style>
    <body>
        <div>
            <h2 class="title">TABELUL PERIODIC AL ELEMENTELOR</h2>
            <div class="details">
                <div style="text-align: right; margin-right: 15px;">Denumirea </br> elementului </br> Simbol(stare solida, </br> <span class="span-red">lichida</span>, <span class="span-green">gazoase</span>)</div>
                <div class="box-header box-lightblue">
                    <span class="small">hidrogen</span>
                    <span class="small">1</span>
                    <span class="span-red span-bold-r">H</span>
                    <span class="small">1,0079</span>
                </div>
                <div style="text-align: left; margin-left: 15px;">Numarul atomic </br></br></br>Masa atomica</div>
            </div>
            <div class="table">
                <div class="row">
                    <div class="box box-lightcyan">
                        <span class="small">heliu</span>
                        <span class="small">2</span>
                        <span class="span-red span-bold-r">He</span>
                        <span class="small">4,0026</span>
                    </div>
                </div>
                <div class="row">
                    <div class="box box-yellow">
                        <span class="small">litiu</span>
                        <span class="small">3</span>
                        <span class="span-red span-bold-b">Li</span>
                        <span class="small">6,941</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">litiu</span>
                        <span class="small">3</span>
                        <span class="span-red span-bold-b">Li</span>
                        <span class="small">6,941</span>
                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-lightblue">
                        <span class="small">bor</span>
                        <span class="small">5</span>
                        <span class="span-red span-bold-b">B</span>
                        <span class="small">10,811</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">carbon</span>
                        <span class="small">6</span>
                        <span class="span-red span-bold-b">C</span>
                        <span class="small">12,011</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">azot</span>
                        <span class="small">3</span>
                        <span class="span-red span-bold-r">N</span>
                        <span class="small">14,007</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">oxigen</span>
                        <span class="small">8</span>
                        <span class="span-red span-bold-r">O</span>
                        <span class="small">15,999</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">flour</span>
                        <span class="small">9</span>
                        <span class="span-red span-bold-r">F</span>
                        <span class="small">6,941</span>
                    </div>
                    <div class="box box-lightcyan">
                        <span class="small">neon</span>
                        <span class="small">10</span>
                        <span class="span-red span-bold-r">Ne</span>
                        <span class="small">20,180</span>
                    </div>
                </div>
                <div class="row">
                    <div class="box box-yellow">
                        <span class="small">sodiu</span>
                        <span class="small">11</span>
                        <span class="span-red span-bold-b">Na</span>
                        <span class="small">22,990</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">magneziu</span>
                        <span class="small">12</span>
                        <span class="span-red span-bold-b">Mg</span>
                        <span class="small">24,305</span>
                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-yellow">
                        <span class="small">aluminiu</span>
                        <span class="small">13</span>
                        <span class="span-red span-bold-b">Al</span>
                        <span class="small">26,982</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">siliciu</span>
                        <span class="small">14</span>
                        <span class="span-red span-bold-b">Si</span>
                        <span class="small">28,086</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">fosfor</span>
                        <span class="small">15</span>
                        <span class="span-red span-bold-b">P</span>
                        <span class="small">30,974</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">sulf</span>
                        <span class="small">16</span>
                        <span class="span-red span-bold-b">S</span>
                        <span class="small">32,065</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">clor</span>
                        <span class="small">17</span>
                        <span class="span-red span-bold-r">Cl</span>
                        <span class="small">35,453</span>
                    </div>
                    <div class="box box-lightcyan">
                        <span class="small">argon</span>
                        <span class="small">18</span>
                        <span class="span-red span-bold-r">Ar</span>
                        <span class="small">39,948</span>
                    </div>
                </div>
                <div class="row">
                    <div class="box box-yellow">
                        <span class="small">potasiu</span>
                        <span class="small">19</span>
                        <span class="span-red span-bold-b">K</span>
                        <span class="small">39,098</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">calciu</span>
                        <span class="small">20</span>
                        <span class="span-red span-bold-b">Ca</span>
                        <span class="small">40,078</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">scadiu</span>
                        <span class="small">21</span>
                        <span class="span-red span-bold-b">Sc</span>
                        <span class="small">44,956</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">titan</span>
                        <span class="small">22</span>
                        <span class="span-red span-bold-b">Ti</span>
                        <span class="small">47,867</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">vanadiu</span>
                        <span class="small">23</span>
                        <span class="span-red span-bold-b">V</span>
                        <span class="small">50,942</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">crom</span>
                        <span class="small">24</span>
                        <span class="span-red span-bold-b">Cr</span>
                        <span class="small">51,996</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">mangan</span>
                        <span class="small">25</span>
                        <span class="span-red span-bold-b">Mn</span>
                        <span class="small">54,938</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">fier</span>
                        <span class="small">26</span>
                        <span class="span-red span-bold-b">Fe</span>
                        <span class="small">55,845</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">cobalt</span>
                        <span class="small">27</span>
                        <span class="span-red span-bold-b">Co</span>
                        <span class="small">58,933</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">nichel</span>
                        <span class="small">28</span>
                        <span class="span-red span-bold-b">Ni</span>
                        <span class="small">58,693</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">cupru</span>
                        <span class="small">29</span>
                        <span class="span-red span-bold-b">Cu</span>
                        <span class="small">63,546</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">zinc</span>
                        <span class="small">30</span>
                        <span class="span-red span-bold-b">Zn</span>
                        <span class="small">65,38</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">galiu</span>
                        <span class="small">31</span>
                        <span class="span-red span-bold-b">Ga</span>
                        <span class="small">72,64</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">germaniu</span>
                        <span class="small">32</span>
                        <span class="span-red span-bold-b">Ge</span>
                        <span class="small">72,64</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">arsen</span>
                        <span class="small">33</span>
                        <span class="span-red span-bold-b">As</span>
                        <span class="small">74,922</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">selenium</span>
                        <span class="small">34</span>
                        <span class="span-red span-bold-b">Se</span>
                        <span class="small">78,96</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">brom</span>
                        <span class="small">35</span>
                        <span class="span-red span-bold-g">Br</span>
                        <span class="small">79,904</span>
                    </div>
                    <div class="box box-lightcyan">
                        <span class="small">kripton</span>
                        <span class="small">36</span>
                        <span class="span-red span-bold-r">Kr</span>
                        <span class="small">83,798</span>
                    </div>
                </div>
                <div class="row">
                    <div class="box box-yellow">
                        <span class="small">rubidiu</span>
                        <span class="small">137</span>
                        <span class="span-red span-bold-b">Rb</span>
                        <span class="small">39,098</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">calciu</span>
                        <span class="small">20</span>
                        <span class="span-red span-bold-b">Sr</span>
                        <span class="small">40,078</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">scadiu</span>
                        <span class="small">21</span>
                        <span class="span-red span-bold-b">Y</span>
                        <span class="small">44,956</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">titan</span>
                        <span class="small">22</span>
                        <span class="span-red span-bold-b">Zr</span>
                        <span class="small">47,867</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">vanadiu</span>
                        <span class="small">23</span>
                        <span class="span-red span-bold-b">Nb</span>
                        <span class="small">50,942</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">crom</span>
                        <span class="small">24</span>
                        <span class="span-red span-bold-b">Mo</span>
                        <span class="small">51,996</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">mangan</span>
                        <span class="small">25</span>
                        <span class="span-red span-bold-b">Tc</span>
                        <span class="small">54,938</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">fier</span>
                        <span class="small">26</span>
                        <span class="span-red span-bold-b">Ru</span>
                        <span class="small">55,845</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">cobalt</span>
                        <span class="small">27</span>
                        <span class="span-red span-bold-b">Rh</span>
                        <span class="small">58,933</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">nichel</span>
                        <span class="small">28</span>
                        <span class="span-red span-bold-b">Pd</span>
                        <span class="small">58,693</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">cupru</span>
                        <span class="small">29</span>
                        <span class="span-red span-bold-b">Ag</span>
                        <span class="small">63,546</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">zinc</span>
                        <span class="small">30</span>
                        <span class="span-red span-bold-b">Cd</span>
                        <span class="small">65,38</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">galiu</span>
                        <span class="small">31</span>
                        <span class="span-red span-bold-b">In</span>
                        <span class="small">72,64</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">germaniu</span>
                        <span class="small">32</span>
                        <span class="span-red span-bold-b">Sn</span>
                        <span class="small">72,64</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">arsen</span>
                        <span class="small">33</span>
                        <span class="span-red span-bold-b">Sb</span>
                        <span class="small">74,922</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">selenium</span>
                        <span class="small">34</span>
                        <span class="span-red span-bold-b">Te</span>
                        <span class="small">78,96</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">brom</span>
                        <span class="small">35</span>
                        <span class="span-red span-bold-b">I</span>
                        <span class="small">79,904</span>
                    </div>
                    <div class="box box-lightcyan">
                        <span class="small">kripton</span>
                        <span class="small">36</span>
                        <span class="span-red span-bold-r">Xe</span>
                        <span class="small">83,798</span>
                    </div>
                </div>
                <div class="row">
                    <div class="box box-yellow">
                        <span class="small">potasiu</span>
                        <span class="small">19</span>
                        <span class="span-red span-bold-b">Cs</span>
                        <span class="small">39,098</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">calciu</span>
                        <span class="small">20</span>
                        <span class="span-red span-bold-b">Ba</span>
                        <span class="small">40,078</span>
                    </div>
                    <div class="box box-orangered">
                        <span class="small"></span>
                        <span class="small"></span>
                        <span class="span-red span-bold-b"></span>
                        <span class="small"></span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">vanadiu</span>
                        <span class="small">23</span>
                        <span class="span-red span-bold-b">Hf</span>
                        <span class="small">50,942</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">vanadiu</span>
                        <span class="small">23</span>
                        <span class="span-red span-bold-b">Ta</span>
                        <span class="small">50,942</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">crom</span>
                        <span class="small">24</span>
                        <span class="span-red span-bold-b">W</span>
                        <span class="small">51,996</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">mangan</span>
                        <span class="small">25</span>
                        <span class="span-red span-bold-b">Re</span>
                        <span class="small">54,938</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">fier</span>
                        <span class="small">26</span>
                        <span class="span-red span-bold-b">Os</span>
                        <span class="small">55,845</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">cobalt</span>
                        <span class="small">27</span>
                        <span class="span-red span-bold-b">Ir</span>
                        <span class="small">58,933</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">nichel</span>
                        <span class="small">28</span>
                        <span class="span-red span-bold-b">Pt</span>
                        <span class="small">58,693</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">cupru</span>
                        <span class="small">29</span>
                        <span class="span-red span-bold-b">Au</span>
                        <span class="small">63,546</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">zinc</span>
                        <span class="small">30</span>
                        <span class="span-red span-bold-b">Hg</span>
                        <span class="small">65,38</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">galiu</span>
                        <span class="small">31</span>
                        <span class="span-red span-bold-g">Ti</span>
                        <span class="small">72,64</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">germaniu</span>
                        <span class="small">32</span>
                        <span class="span-red span-bold-b">Pb</span>
                        <span class="small">72,64</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">arsen</span>
                        <span class="small">33</span>
                        <span class="span-red span-bold-b">Bi</span>
                        <span class="small">74,922</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">selenium</span>
                        <span class="small">34</span>
                        <span class="span-red span-bold-b">Po</span>
                        <span class="small">78,96</span>
                    </div>
                    <div class="box box-lightblue">
                        <span class="small">brom</span>
                        <span class="small">35</span>
                        <span class="span-red span-bold-b">At</span>
                        <span class="small">79,904</span>
                    </div>
                    <div class="box box-lightcyan">
                        <span class="small">kripton</span>
                        <span class="small">36</span>
                        <span class="span-red span-bold-r">Rn</span>
                        <span class="small">83,798</span>
                    </div>
                </div>
                <div class="row">
                    <div class="box box-yellow">
                        <span class="small">potasiu</span>
                        <span class="small">19</span>
                        <span class="span-red span-bold-b">Fr</span>
                        <span class="small">39,098</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">calciu</span>
                        <span class="small">20</span>
                        <span class="span-red span-bold-b">Ra</span>
                        <span class="small">40,078</span>
                    </div>
                    <div class="box box-orangered">
                        <span class="small"></span>
                        <span class="small"></span>
                        <span class="span-red span-bold-b"></span>
                        <span class="small"></span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">titan</span>
                        <span class="small">22</span>
                        <span class="span-red span-bold-b">Rf</span>
                        <span class="small">47,867</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">vanadiu</span>
                        <span class="small">23</span>
                        <span class="span-red span-bold-b">Db</span>
                        <span class="small">50,942</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">crom</span>
                        <span class="small">24</span>
                        <span class="span-red span-bold-b">Sg</span>
                        <span class="small">51,996</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">mangan</span>
                        <span class="small">25</span>
                        <span class="span-red span-bold-b">Bh</span>
                        <span class="small">54,938</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">fier</span>
                        <span class="small">26</span>
                        <span class="span-red span-bold-b">Hs</span>
                        <span class="small">55,845</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">cobalt</span>
                        <span class="small">27</span>
                        <span class="span-red span-bold-b">Mt</span>
                        <span class="small">58,933</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">nichel</span>
                        <span class="small">28</span>
                        <span class="span-red span-bold-b">Ds</span>
                        <span class="small">58,693</span>
                    </div>
                    <div class="box box-yellow">
                        <span class="small">cupru</span>
                        <span class="small">29</span>
                        <span class="span-red span-bold-b">Rg</span>
                        <span class="small">63,546</span>
                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                    <div class="box box-empty">

                    </div>
                </div>
            </div>
        </div>
<!--            <table>
                <thead>
                    <tr>
                        
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td colspan="17" class="td-no-b"></td>
                    <td class="td-lightcyan">
                        <span class="l-small">litiu</span>
                        <span class="l-small">3</span>
                        <span>He</span>
                    </td>
                </tr>
                <tr>
                    <td class="td-yellow">
                        <label>Li</label>
                    </td>
                    <td class="td-yellow">
                        <label>Be</label>
                    </td>
                    <td colspan="10" class="td-no-b"></td>
                    <td class="td-lightblue td-left-b-red">
                        <label>B</label>
                    </td>
                    <td class="td-lightblue">
                        <label>C</label>
                    </td>
                    <td class="td-lightblue">
                        <label>N</label>
                    </td>
                    <td class="td-lightblue">
                        <label>O</label>
                    </td>
                    <td class="td-lightblue">
                        <label>F</label>
                    </td>
                    <td class="td-lightcyan">
                        <label>Ne</label>
                    </td>
                </tr>
                <tr id="r">
                    <td class="td-yellow">
                        <label>Ne</label>
                    </td>
                    <td class="td-yellow">
                        <label>Mg</label>
                    </td>
                    <td colspan="10" class="td-no-b"></td>
                    <td class="td-yellow td-up-right-b-red">
                        <label>Ai</label>
                    </td>
                    <td class="td-lightblue">
                        <label>Si</label>
                    </td>
                    <td class="td-lightblue">
                        <label>P</label>
                    </td>
                    <td class="td-lightblue">
                        <label>S</label>
                    </td>
                    <td class="td-lightblue">
                        <label>Ci</label>
                    </td>
                    <td class="td-lightcyan">
                        <label>Ar</label>
                    </td>
                </tr>
                <tr id="o">
                    <td class="td-yellow">
                        <label>K</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ca</label>
                    </td>
                    <td class="td-yellow">
                        <label>Sc</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ti</label>
                    </td>
                    <td class="td-yellow">
                        <label>V</label>
                    </td>
                    <td class="td-yellow">
                        <label>Cr</label>
                    </td>
                    <td class="td-yellow">
                        <label>Mn</label>
                    </td>
                    <td class="td-yellow">
                        <label>Fe</label>
                    </td>
                    <td class="td-yellow">
                        <label>Co</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ni</label>
                    </td>
                    <td class="td-yellow">
                        <label>Cu</label>
                    </td>
                    <td class="td-yellow">
                        <label>Zn</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ga</label>
                    </td>
                    <td class="td-yellow td-up-right-b-red">
                        <label>Ge</label>
                    </td>
                    <td class="td-lightblue">
                        <label>As</label>
                    </td>
                    <td class="td-lightblue">
                        <label>Se</label>
                    </td>
                    <td class="td-lightblue">
                        <label>Br</label>
                    </td>
                    <td class="td-lightcyan">
                        <label>Kr</label>
                    </td>
                </tr>
                <tr id="a">
                    <td class="td-yellow">
                        <label>Rb</label>
                    </td>
                    <td class="td-yellow">
                        <label>Sr</label>
                    </td>
                    <td class="td-yellow">
                        <label>Y</label>
                    </td>
                    <td class="td-yellow">
                        <label>Zr</label>
                    </td>
                    <td class="td-yellow">
                        <label>Nb</label>
                    </td>
                    <td class="td-yellow">
                        <label>Mo</label>
                    </td>
                    <td class="td-yellow">
                        <label>Tc</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ru</label>
                    </td>
                    <td class="td-yellow">
                        <label>Rh</label>
                    </td>
                    <td class="td-yellow">
                        <label>Pd</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ag</label>
                    </td>
                    <td class="td-yellow">
                        <label>Cd</label>
                    </td>
                    <td class="td-yellow">
                        <label>In</label>
                    </td>
                    <td class="td-yellow">
                        <label>Sn</label>
                    </td>
                    <td class="td-yellow td-up-right-b-red">
                        <label>Sb</label>
                    </td>
                    <td class="td-lightblue">
                        <label>Te</label>
                    </td>
                    <td class="td-lightblue">
                        <label>I</label>
                    </td>
                    <td class="td-lightcyan">
                        <label>Xe</label>
                    </td>
                </tr>
                <tr id="d">
                    <td class="td-yellow">
                        <label>Cs</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ba</label>
                    </td>
                    <td class="td-orange">
                        <label>...</label>
                    </td>
                    <td class="td-yellow">
                        <label>Hf</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ta</label>
                    </td>
                    <td class="td-yellow">
                        <label>W</label>
                    </td>
                    <td class="td-yellow">
                        <label>Re</label>
                    </td>
                    <td class="td-yellow">
                        <label>Os</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ir</label>
                    </td>
                    <td class="td-yellow">
                        <label>Pt</label>
                    </td>
                    <td class="td-yellow">
                        <label>Au</label>
                    </td>
                    <td class="td-yellow">
                        <label class="l-greenyellow">Hg</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ti</label>
                    </td>
                    <td class="td-yellow">
                        <label>Pb</label>
                    </td>
                    <td class="td-yellow">
                        <label>Bi</label>
                    </td>
                    <td class="td-yellow td-up-right-b-red">
                        <label>Po</label>
                    </td>
                    <td class="td-lightblue">
                        <label>At</label>
                    </td>
                    <td class="td-lightcyan">
                        <label>Rn</label>
                    </td>
                </tr>
                <tr id="a">
                    <td class="td-yellow">
                        <label>Fr</label>
                    </td>
                    <td class="td-yellow">
                        <label>Ra</label>
                    </td>
                    <td class="td-orange">
                        <label>...</label>
                    </td>
                    <td class="td-yellow">
                        <label>Rf</label>
                    </td>
                    <td class="td-yellow">
                        <label>Db</label>
                    </td>
                    <td class="td-yellow">
                        <label>Sg</label>
                    </td>
                    <td class="td-yellow">
                        <label>Bh</label>
                    </td>
                    <td class="td-yellow">
                        <label>Hs</label>
                    </td>
                    <td class="td-yellow">
                        <label>Mt</label>
                    </td>
                </tr>
                <tr>
                    <td rowspan="1" class="td-no-b">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="td-no-b"></td>
                    <td class="td-orange">
                        <label>La</label>
                    </td>
                    <td class="td-orange">
                        <label>Ce</label>
                    </td>
                    <td class="td-orange">
                        <label>Pr</label>
                    </td>
                    <td class="td-orange">
                        <label>Nd</label>
                    </td>
                    <td class="td-orange">
                        <label>Pm</label>
                    </td>
                    <td class="td-orange">
                        <label>Sm</label>
                    </td>
                    <td class="td-orange">
                        <label>Eu</label>
                    </td>
                    <td class="td-orange">
                        <label>Gd</label>
                    </td>
                    <td class="td-orange">
                        <label>Tb</label>
                    </td>
                    <td class="td-orange">
                        <label>Dy</label>
                    </td>
                    <td class="td-orange">
                        <label>He</label>
                    </td>
                    <td class="td-orange">
                        <label>Er</label>
                    </td>
                    <td class="td-orange">
                        <label>Tm</label>
                    </td>
                    <td class="td-orange">
                        <label>Yb</label>
                    </td>
                    <td class="td-orange">
                        <label>Lu</label>
                    </td>
                    <td class="td-no-b"></td>
                </tr>
                <tr>
                    <td colspan="2" class="td-no-b"></td>
                    <td class="td-orange">
                        <label>Ac</label>
                    </td>
                    <td class="td-orange">
                        <label>Th</label>
                    </td>
                    <td class="td-orange">
                        <label>Pa</label>
                    </td>
                    <td class="td-orange">
                        <label>U</label>
                    </td>
                    <td class="td-orange">
                        <label>Np</label>
                    </td>
                    <td class="td-orange">
                        <label>Pu</label>
                    </td>
                    <td class="td-orange">
                        <label>Am</label>
                    </td>
                    <td class="td-orange">
                        <label>Cm</label>
                    </td>
                    <td class="td-orange">
                        <label>Bk</label>
                    </td>
                    <td class="td-orange">
                        <label>Cf</label>
                    </td>
                    <td class="td-orange">
                        <label>Es</label>
                    </td>
                    <td class="td-orange">
                        <label>Fm</label>
                    </td>
                    <td class="td-orange">
                        <label>Md</label>
                    </td>
                    <td class="td-orange">
                        <label>Ne</label>
                    </td>
                    <td class="td-orange">
                        <label>Lr</label>
                    </td>
                    <td class="td-no-b"></td>
                </tr>
            </tbody>
        </table>-->
    </body>
</html>
