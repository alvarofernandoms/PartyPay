<?php require_once('header.php'); ?>
        <section class="container">
            <h3>Novo Evento</h3>
            <div class="row">
                <form class="form-horizontal" method="post" action="controller/processaCadastroEvento.php" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="nome">Nome</label>
                        <div class="controls">
                            <input type="text" name="nome" placeholder="Nome do evento" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="nome">Data de In&iacute;cio</label>
                        <div class="controls">
                            <input type="date" name="dataInicio" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="nome">Data de T&aacute;rmino</label>
                        <div class="controls">
                            <input type="date" name="dataTermino" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="numero">Banner</label>
                        <div class="controls">
                            <input type="file" name="arquivo" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="endereco">Pre&ccedil;o</label>
                        <div class="controls">
                            <input type="text" id="preco" name="precoMasc" placeholder="Masculino" required>
                            <input type="text" id="precof" name="precoFem" placeholder="Feminino" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="facebookEventPage">Facebook</label>
                        <div class="controls">
                            <input type="text" name="facebookEventPage" placeholder="Endereco do evento no Facebook">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="descicao">Descri&ccedil;&atilde;o</label>
                        <div class="controls">
                            <textarea rows="3" name="descricao"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="numeroIngressos">Vagas</label>
                        <div class="controls">
                            <input type="text" id="vagas" name="numeroIngressos" placeholder="N&uacute;mero de vagas" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="numero">Classifica&ccedil;&atilde;o</label>
                        <div class="controls">
                            <select name="classificacao">
                                <option value="livre">Livre</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="14">14</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                   
                                <div class="control-group">
                                    <label class="control-label" for="numero">Hora de Inc&iacute;o</label>
                                    <div class="controls">
                                        <select name="horaInicio">
                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                        </select>
                                        <select name="minutoInicio">
                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="numero">Hora de T&eacute;rmino</label>
                                    <div class="controls">
                                        <select name="horaTermino">
                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                        </select>
                                        <select name="minutoTermino">
                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </div>
                                </div>
                                </form>
                        </div>
                        </section>
                        <?php require_once('footer.php'); ?>