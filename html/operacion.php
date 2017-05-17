<article id="v1">
					<div>
						<?php
								$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 0,4");
								$ejecutar_query=mysql_query(query);

								$valor=mysql_fetch_array($ejecutar_query);
								$v1=$valor["valor1"];
								$v2=$valor["valor2"];
								$v3=$valor["valor3"];
								
								echo $v1;
						?>
					</div>
				</article>
				
				<article id="v2">
					<div>
						<?php
					
							/*$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 1,1");
							while ($v2 = mysql_fetch_array($query)){
							
								$v2=$v2["valor2"];		
								}*/
								echo $v2;
						?>
							
	
					</div>
				</article>
				
				<article id="v3">
					<div>
						<?php
			
							/*$query = mysql_query("SELECT * FROM operacion ORDER BY RAND() LIMIT 3,3");
							while ($v3 = mysql_fetch_array($query)){

								$v3=$v3["valor3"];
								
								}*/
								echo $v3;
						$res=$v1+$v2+$v3;
							
						?>
						
					</div>
				</article>
				
			<form name="calc" action="suma - copia.php" method="post" id="form" >
			<article id="general" >
			
				<input type="text" name="visor" maxlength="3" placeholder="?" id="visor"/>
					<div id="numpad1">
						<a href="javascript:;" rel="<?php $v1 ?>" onload='proceso(rel)'>
					
								<article id="radio">
                                    <a href="javascript:;" rel="1" onclick="boton (rel)">
									<article id="boton">
										<div id="center">
											1
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="2" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											2
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="3" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											3
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="4" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											4
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="5" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											5
										</div>
                                    </article>
									</a>
								</article >
								<article id="radio">
								
                                    <a href="javascript:;">
										<button type="submit" onClick="proceso(value)" >
											<article id="boton">
												<div id="center">
													<img src="../../img/bn.png" width="20px" height="20px" alt="BN" />
												</div>
											</article>
										</button>
									</a>
								</article>
						<input type="hidden" value="<?php echo $res;?>" id="comprar"/>			
					</div>
                    <div id="numpad2">
								<article id="radio">
                                    <a href="javascript:;" rel="6" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											6
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="7" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											7
										</div>
                                    </article>
									</a>
								</article>
								
								<article id="radio">
                                    <a href="javascript:;" rel="8" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											8
										</div>
                                    </article>
									</a>
								</article>
								<article id="radio">
                                    <a href="javascript:;" rel="9" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											9
										</div>
									</article>
									</a>
								</article>
									
								<article id="radio">
                                    <a href="javascript:;" rel="0" onClick="boton (rel)">
									<article id="boton">
										<div id="center">
											0
										</div>
									</article>
									</a>
								</article>
									
									<article id="radio">
                                    <a href="javascript:;">
										<button type="reset" class="error" value=>
											<article id="boton">
												<div id="center">
													<img src="../../img/error.png" width="20px" height="20px" alt="description" />
												</div>
											</article>
										</button>
									</a>
									</article>
									
                                </div>
			</form>
			<article id="signo1">
				<?php
					
								echo $s1=$valor["signo1"];
						?>
			</article>
			<article id="signo2">
			</article>
			<article id="signo3">
				=
			</article>
				<?php
				
				echo $res;
				
				?>
			</article>
			
		</article>
	