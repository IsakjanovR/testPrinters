<!DOCTYPE html>
<html lang="en">
<head>
    <title>Триколор СПБ</title>
<?php
require_once "header.php";

?>
    <script>function calcul() {

            tbkprice = a1 / a2 * document.CalcForm.T4.value / 5;
            tccprice = a3 / a4 * document.CalcForm.T1.value / 5;
            tcmprice = a3 / a4 * document.CalcForm.T2.value / 5;
            tcyprice = a3 / a4 * document.CalcForm.T3.value / 5;
            epbprice = a5 / a6;
            epcprice = a7 / a8 * 3;
            bltprice = a9 / a10;
            fsrprice = a11 / a12;
            tbwprice = a1 / a2 * document.CalcForm.T5.value / 5;

            fnlcprice = tbkprice + tccprice + tcmprice + tcyprice + epbprice + epcprice + bltprice + fsrprice;
            fnlbprice = tbwprice + epbprice + bltprice + fsrprice;

            document.CalcForm.resultc.value = fnlcprice;
            document.CalcForm.resultb.value = fnlbprice;

            return false;
            console.log(fnlcprice);
        }
        function calctotal() {
            if (fnlcprice == 0) {
                alert("Сначала произведите рассчёт стоимости оттиска!");
                return false;
            }
            clrtotal = document.TotalForm.T1.value * fnlcprice * 12
            blktotal = document.TotalForm.T3.value * fnlbprice * 12
            alltotal = clrtotal + blktotal
            document.TotalForm.T6.value = alltotal
            return false;
        }

        function mtoday() {
            document.TotalForm.T2.value = document.TotalForm.T1.value / document.TotalForm.T5.value;
            document.TotalForm.T4.value = document.TotalForm.T3.value / document.TotalForm.T5.value;
            direction = 1
            return false;
        }

        function daytom() {
            document.TotalForm.T1.value = document.TotalForm.T2.value * document.TotalForm.T5.value;
            document.TotalForm.T3.value = document.TotalForm.T4.value * document.TotalForm.T5.value;
            direction = 2
            return false;
        }
        function daysm() {
            if (direction == 1) {
                mtoday();
            }
            else {
                daytom();
            }

            return false;
        }
        function poliset() {
            document.CalcForm.T1.value = 15;
            document.CalcForm.T2.value = 15;
            document.CalcForm.T3.value = 15;
            document.CalcForm.T4.value = 10;
            return false;
        }
        function setfoto() {
            document.CalcForm.T1.value = 32.4;
            document.CalcForm.T2.value = 40.8;
            document.CalcForm.T3.value = 44.8;
            document.CalcForm.T4.value = 6.6;
            return false;
        }
        function setvisit() {
            document.CalcForm.T1.value = 13;
            document.CalcForm.T2.value = 15;
            document.CalcForm.T3.value = 18;
            document.CalcForm.T4.value = 3;
            return false;
        }
        function setmemo() {
            document.CalcForm.T1.value = 1.8;
            document.CalcForm.T2.value = 2.1;
            document.CalcForm.T3.value = 1.4;
            document.CalcForm.T4.value = 1.1;
            return false;
        }
        function setgraph() {
            document.CalcForm.T1.value = 11.1;
            document.CalcForm.T2.value = 8.9;
            document.CalcForm.T3.value = 9.8;
            document.CalcForm.T4.value = 0.1;
            return false;
        }
        function setweb() {
            document.CalcForm.T1.value = 18.1;
            document.CalcForm.T2.value = 10.7;
            document.CalcForm.T3.value = 6.8;
            document.CalcForm.T4.value = 0.3;
            return false;
        }
        function setpres() {
            document.CalcForm.T1.value = 2.8;
            document.CalcForm.T2.value = 1.3;
            document.CalcForm.T3.value = 0.7;
            document.CalcForm.T4.value = 1.3;
            return false;
        }
        function setdoc() {
            document.CalcForm.T5.value = 7.5;
            return false;
        }
        function prices() {
            sind = document.CalcForm.PrnSelect.selectedIndex + 1;
            document.CalcForm.T6.value = printer[sind][1];
            document.CalcForm.T7.value = printer[sind][3];
            return false;
        }
        function setprice() {
            sind = document.CalcForm.PrnSelect.selectedIndex + 1;
            printer[sind][1] = document.CalcForm.T6.value;
            printer[sind][3] = document.CalcForm.T7.value;
            return false;
        }

        function validatet1() {
            prcnt = document.CalcForm.T1.value;
            if (prcnt < 0) {
                document.CalcForm.T1.value = 0
            }
            if (prcnt > 100) {
                document.CalcForm.T1.value = 100
            }
            return false;
        }

        function MM_openBrWindow(theURL,winName,features) { //v2.0
            window.open(theURL,winName,features);
        }
        function validatet2() {
            prcnt = document.CalcForm.T2.value;
            if (prcnt < 0) {
                document.CalcForm.T2.value = 0
            }
            if (prcnt > 100) {
                document.CalcForm.T2.value = 100
            }
            return false;
        }

        function validatet3() {
            prcnt = document.CalcForm.T3.value;
            if (prcnt < 0) {
                document.CalcForm.T3.value = 0
            }
            if (prcnt > 100) {
                document.CalcForm.T3.value = 100
            }
            return false;
        }

        function validatet4() {
            prcnt = document.CalcForm.T4.value;
            if (prcnt < 0) {
                document.CalcForm.T4.value = 0
            }
            if (prcnt > 100) {
                document.CalcForm.T4.value = 100
            }
            return false;
        }
        function validatet5() {
            prcnt = document.CalcForm.T5.value;
            if (prcnt < 0) {
                document.CalcForm.T5.value = 0
            }
            if (prcnt > 100) {
                document.CalcForm.T5.value = 100
            }
            return false;
        }
        function allreset() {
            direction = 0;
            fnlcprice = 0;
            fnlbprice = 0;
            sind = 0;
            return false;
        }

        </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            var icons = {
                header: "ui-icon-circle-arrow-e",
                activeHeader: "ui-icon-circle-arrow-s"
            };
            $( "#accordion" ).accordion({
                icons: icons
            });
            $( "#toggle" ).button().click(function() {
                if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
                    $( "#accordion" ).accordion( "option", "icons", null );
                } else {
                    $( "#accordion" ).accordion( "option", "icons", icons );
                }
            });
        });

        $(function() {
            var icons = {
                header: "ui-icon-circle-arrow-e",
                activeHeader: "ui-icon-circle-arrow-s"
            };
            $( "#accordion2" ).accordion({
                icons: icons
            });
            $( "#toggle" ).button().click(function() {
                if ( $( "#accordion2" ).accordion( "option", "icons" ) ) {
                    $( "#accordion2" ).accordion( "option", "icons", null );
                } else {
                    $( "#accordion2" ).accordion( "option", "icons", icons );
                }
            });
        });
    </script>
    <script>
        $(function() {
            $( "#slider-range-minC" ).slider({
                range: "min",
                value: 5,
                min: 1,
                max: 100,
                slide: function( event, ui ) {
                    $( "#amountC" ).val(  ui.value );
                }
            });
            $( "#amountC" ).val(  + $( "#slider-range-minC" ).slider( "value" ) );
        });
        $(function() {
            $( "#slider-range-minM" ).slider({
                range: "min",
                value: 5,
                min: 1,
                max: 100,
                slide: function( event, ui ) {
                    $( "#amountM" ).val(   ui.value );
                }
            });
            $( "#amountM" ).val( $( "#slider-range-minM" ).slider( "value" ) );
        });
        $(function() {
            $( "#slider-range-minY" ).slider({
                range: "min",
                value: 5,
                min: 1,
                max: 100,
                slide: function( event, ui ) {
                    $( "#amountY" ).val( ui.value );
                }
            });
            $( "#amountY" ).val(  $( "#slider-range-minY" ).slider( "value" ) );
        });
        $(function() {
            $( "#slider-range-minB" ).slider({
                range: "min",
                value: 5,
                min: 1,
                max: 100,
                slide: function( event, ui ) {
                    $( "#amountB" ).val(  ui.value );
                }
            });
            $( "#amountB" ).value( $( "#slider-range-minB" ).slider( "value" ) );
        });

    </script>
    <section class="sliderSection">
        <div id="slideshow">
            <div id="slidesContainer">
                <div class="slide">
                    <h2 class="title-other-slider">Расчет стоимости владения</h2>
                    <img src="images/viotec.ru_2016-04-12_21-32-48.jpg"  alt=""></div>
            </div>
        </div>
    </section>

    <div class="Content">
        <div class="calc-widget">

            <form onsubmit="calcul(); return false;" name="CalcForm">


                <div id="accordion">
                    <h3>Выбирите производителя и модель аппарата</h3>
                    <div>
                        <div>
                            Производитель
                            <select name="vendor" required id="vendorValue">
                                <?php foreach($arrVendor as $rowVendor) : ?>
                                    <option value="<?php echo $rowVendor['id'];?>"><?php echo ($rowVendor['vend_name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            Модель
                            <select name="model" id="model" disabled="disabled">
                                <option value="0">- выберите принтер -</option>
                            </select>

                        </div>

                    </div>
                    <h3>Введите цветовые параметры заливки</h3>
                    <div>
                        <p>Cреднее"полиграфическое" заполнение по опыту работы считается по 15% на цвет и 10% на чёрный.</p>
                        <div class="CMYC">
                                Cian:
                            <input name="T1" id="amountC" size="3" onchange="validatet1(); return false;" type="text" value="5">
                            <div id="slider-range-minC"></div>
                            <br>
                                Magenta:
                            <input name="T2" id="amountM" size="3" onchange="validatet2(); return false;" type="text" value="5"/>
                            <div id="slider-range-minM"></div>
                            <br>
                                Yellow:
                            <input name="T3" id="amountY"  size="3" onchange="validatet3(); return false;" type="text" value="5">
                            <div id="slider-range-minY"></div>
                            <br>
                                Black:
                            <input name="T4" id="amountB" size="3" onchange="validatet4(); return false;" type="text" value="5">
                            <div id="slider-range-minB"></div>
                            <br>


<!--                            <input class="myButton" name="B3" onclick="poliset(); return false;" type="button" value="Установить">-->
                        </div>

                    </div>

                    <h3>установите заливку для монохронной печати</h3>
                    <div>
                        Заливка для монохромной печати:

                            <input name="T5"  size="3" onchange="validatet5(); return false;" type="text" value="5">



                        <p>Cредний офисный документ с логотипами, таблицами и разными
                        шрифтами имеет заливку   7,5</p>
                        <input class="myButton" name="B4" onclick="setdoc(); return false;" type="button" value="Установить"/>
                    </div>

                    <h3>Выбирите один из вариантов заполнения</h3>
                    <div>
                        <table border="0" cellpadding="3" cellspacing="3" bordercolor="#111111" width="100%" id="AutoNumber4" >
                            <tbody>
                            <tr>
                                <td><a onclick="setfoto(); return false" class="style11"> <img border="1" src="images/Foto.jpg"/>Фото/полноцвет</a>
                                </td>
                                <td ><a onclick="setvisit(); return false" class="style11"> <img border="1" src="images/Visit.jpg"/>Визитки</a>
                                </td>
                                <td><a onclick="setmemo(); return false" class="style11"> <img border="1" src="images/Memo.jpg"/>Письма</a>
                                </td>
                                <td><a onclick="setgraph(); return false" class="style11"> <img border="1" src="images/Graph.jpg"/>Графики/отчёты</a>
                                </td>
                                <td><a onclick="setweb(); return false" class="style11"> <img border="1" src="images/Web.jpg"/>Веб-страницы</a>
                                </td>
                                <td><a onclick="setpres(); return false" class="style11"> <img border="1" src="images/Present.jpg"/>Презентации</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <h3>Расчет оттеска </h3>
                    <div>
                       <p> Нажмите кнопку:</p>
                        <input class="myButton" name="B1" type="submit" value="Расчитать"/>


                       <p> Результаты расчёта:</p>
                       <p> Цветная страница формата А4 с учётом всех расходников:  <input name="resultc" size="5" type="text"></p>
                        <p>Монохромная страница формата А4 с учётом всех расходников : <input name="resultb" size="5" type="text"></p>


                        <input class="alert button" name="B2" type="reset" value="Сбросить"/>
                    </div>

                </div>


            </form>

        <p style="text-align: center">Произведите расчёт стоимости одного отпечатка выше - в
        расчёте суммарных затрат используется посчитанная выше стоимость!</p>

            <form onsubmit="calctotal(); return false;" name="TotalForm">
                <div id="accordion2">
                    <h3>Расчёт суммарных затрат на печать в год</h3>
                    <div>





                        <p>Укажите объём  цветной печати в месяц:
                        <input name="T1" size="6" onchange="mtoday(); return false" type="text" value="2200"/></p>
                        <p>или в день:
                        <input name="T2" size="4" onchange="daytom(); return false" type="text" value="100"/></p>

                    </div>



                <h3>Укажите объёммонохромной печати в месяц:</h3>
                    <div>
                        <p>В месяц:
                        <input name="T3" size="6" onchange="mtoday(); return false" type="text" value="2200"/></p>


                        <p>В день:
                        <input name="T4" size="4" onchange="daytom(); return false" type="text" value="100"/></p>


                </div>



                    <h3>Укажите количество рабочих дней в месяце:</h3>
                    <div>
                      <p>  Дни
                    <input name="T5" size="3" onchange="daysm(); return false" type="text" value="22"/></p>


                        <input class="myButton" name="B1" type="submit" value="Расчитать"/>

               <p> Результаты расчёта:</p>

                <p>Затраты на  печать за год составляют
                    <input name="T6" size="12" type="text"/>руб.</p>


                <input class="alert button" name="B2" type="reset" value="Сбросить">
                </div>
                </div>

            </form>
        </div>
        

        <div class="text-right">
            <p>Как производится расчёт стоимости печати?
                Формула расчёта стоимости цветного отпечатка очень проста:
                Берём стоимость чёрного тонера, делим её на ресурс тонера,
                умножаем на введенный пользователем процент заполнения, делим
                на 5 (на 5 делим потому, что исходный ресурс указан для 5% заполнения листа).
                Получаем число 1 Берём стоимость цветного тонера, делим её на ресурс тонера,
                умножаем на введенный пользователем процент заполнения для этого цвета, делим
                на 5. И так по каждому из трёх цветов. Полученное складываем и получаем число
                2 Берём стоимость чёрного барабана, делим на его ресурс. Получаем число 3
                Берём стоимость цветного барабана, делим на его ресурс и умножаем на 3,
                потому как цветных барабанов в принтере 3, получаем число 4. Ресурсы
                барабанов не зависят от процента заполнения тонером, поэтому здесь заполнение
                не учитывается. Стоимости печки и ремня делим на их ресурсы получаем числа 5 и 6
                (здесь тоже нет зависимости ресурса от заполнения тонером) Складываем число 1 + число
                2 + число 3 + число 4 + число 5 + число 6 и получаем искомую стоимость одного цветного
                отпечатка. Цены и ресурсы расходников забиты в тело страницы - можно их увидеть,
                открыв листинг страницы. В стоимости монохромного отпечатка учитывается чёрный тонер,
                чёрный барабан, печка и ремень. Расчёт аналогичен тому, что приведено выше: цена делится
                на ресурс. В случае с тонером учитывается процент заполнения, вводимый пользователем для
                монохромной печати. Стоимость принтера, бумаги, электроэнергии, зарплата сотрудников и
                прочие возможные издержки на печать в расчёте не используются. Обратите внимание, что
                весь расчет делается применительно к листам формата А4, в том числе для принтеров,
                поддерживающих печать формата А3! Это общепринятый индустриальный стандарт, поэтому
                не следует считать себя обманутым, что приобретя принтер формата А3 все ресурсы расходников
                приводятся для него по формату А4 и для этого же формата производится расчет себестоимости
                печати!</p>
        </div>



</div>


    <?php
include_once "footer.php";
?>