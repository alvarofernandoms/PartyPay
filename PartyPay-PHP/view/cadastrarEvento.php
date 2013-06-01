<html>
  <head>
    <title>Novo evento - Party Pay</title>
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="view/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
		<header>
			<div class="navbar">
			  <div class="navbar-inner">
			    <a class="brand" href="#"><img src="view/img/marca-mini.png" alt="" /></a>
			    <ul class="nav">
			      <li class="active"><a href="index.php">Home</a></li>
			      <li><a href="#">Sobre</a></li>
			      <li><a href="#">Eventos</a></li>
			    </ul>
			  </div>
			</div>
		</header>
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
				      <input type="file" name="imagem" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="endereco">Pre&ccedil;o</label>
				    <div class="controls">
				      <input type="text" name="precoMasc" placeholder="Masculino" required>
				      <input type="text" name="precoFem" placeholder="Feminino" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Facebook</label>
				    <div class="controls">
				      <input type="text" name="facebookEventPage" placeholder="Endereco do evento no Facebook" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Descri&ccedil;&atilde;o</label>
				    <div class="controls">
				      <textarea rows="3" name="descricao"></textarea>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Vagas</label>
				    <div class="controls">
				      <input type="number" name="numeroIngressos" placeholder="N&uacute;mero de vagas" required>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="numero">Hora de Inc&iacute;o</label>
				    <div class="controls">
				    	<select name="horaInicio">
						  <option>00</option>
						  <option>01</option>
						  <option>02</option>
						  <option>03</option>
						  <option>04</option>
						  <option>05</option>
						  <option>06</option>
						  <option>07</option>
						  <option>08</option>
						  <option>09</option>
						  <option>10</option>
						  <option>11</option>
						  <option>12</option>
						  <option>13</option>
						  <option>14</option>
						  <option>15</option>
						  <option>16</option>
						  <option>17</option>
						  <option>18</option>
						  <option>19</option>
						  <option>20</option>
						  <option>21</option>
						  <option>22</option>
						  <option>23</option>
						</select>
						<select name="minutoInicio">
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
							<option>32</option>
							<option>33</option>
							<option>34</option>
							<option>35</option>
							<option>36</option>
							<option>37</option>
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
							<option>45</option>
							<option>46</option>
							<option>47</option>
							<option>48</option>
							<option>49</option>
							<option>50</option>
							<option>51</option>
							<option>52</option>
							<option>53</option>
							<option>54</option>
							<option>55</option>
							<option>56</option>
							<option>57</option>
							<option>58</option>
							<option>59</option>

						</select>
				    </div>
				  </div><div class="control-group">
				    <label class="control-label" for="numero">Hora de T&eacute;rmino</label>
				    <div class="controls">
				    	<select name="horaTermino">
						  <option>00</option>
						  <option>01</option>
						  <option>02</option>
						  <option>03</option>
						  <option>04</option>
						  <option>05</option>
						  <option>06</option>
						  <option>07</option>
						  <option>08</option>
						  <option>09</option>
						  <option>10</option>
						  <option>11</option>
						  <option>12</option>
						  <option>13</option>
						  <option>14</option>
						  <option>15</option>
						  <option>16</option>
						  <option>17</option>
						  <option>18</option>
						  <option>19</option>
						  <option>20</option>
						  <option>21</option>
						  <option>22</option>
						  <option>23</option>
						</select>
						<select name="minutoTermino">
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
							<option>32</option>
							<option>33</option>
							<option>34</option>
							<option>35</option>
							<option>36</option>
							<option>37</option>
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
							<option>45</option>
							<option>46</option>
							<option>47</option>
							<option>48</option>
							<option>49</option>
							<option>50</option>
							<option>51</option>
							<option>52</option>
							<option>53</option>
							<option>54</option>
							<option>55</option>
							<option>56</option>
							<option>57</option>
							<option>58</option>
							<option>59</option>

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
		<footer>
		</footer>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/bootstrap-responsive.min.js"></script>
    <script src="view/js/jquery.maskedinput.min.js"></script>

  </body>
</html>