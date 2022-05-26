<!DOCTYPE html>
<html>
	<head>
		<title>MemoBio</title>
		<link rel="stylesheet" type="text/css" href="./style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Prompt:wght@100;200&display=swap"
			rel="stylesheet"
		/>
	</head>

	<body>

		<div class="formCadastro">

			<div class="formContainer">

				<h1>Cadastro</h1>
				
				<div class="formButtons">
					<div>
						<button class="btnDados active">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
							  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
						</button>
						<button class="btnEndereco">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
							  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
							</svg>
						</button>
						<button class="btnPagamento">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
							  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
							</svg>
						</button>	
					</div>
				</div>
			
				<form>

					<div class="dadosPessoais active">
						<div>
							<label>Nome</label>
							<input type="text" name="nome">
						</div>

						<div>
							<label>Sobrenome</label>
							<input type="text" name="sobrenome">
						</div>

						<section>
							<div>
								<label>CPF</label>
								<input type="number" name="cpf">
							</div>

							<div>
								<label>RG</label>
								<input type="text" name="rg">
							</div>
						</section>

						<section>
							<div>
								<label>Data de Nascimento</label>
								<input type="date" name="dataNascimento">
							</div>

							<div>
								<label>Telefone</label>
								<input type="number" name="telefone">
							</div>
						</section>

						<div>
							<label>E-mail</label>
							<input type="email" name="email">
						</div>

						<section>
							<div>
								<label>Senha</label>
								<input type="password" name="senha">
							</div>

							<div>
								<label>Repita a Senha</label>
								<input type="password" name="senha">
							</div>
						</section>
					</div>

					<div class="dadosEndereco">

						<div>
							<label>Endereço</label>
							<input type="text" name="endereco">
						</div>

						<section>
							<div>
								<label>Número</label>
								<input type="number" name="numero">
							</div>

							<div>
								<label>Complemento</label>
								<input type="text" name="complemento">
							</div>
						</section>

						<section>
							<div>
								<label>Bairro</label>
								<input type="text" name="bairro">
							</div>

							<div>
								<label>CEP</label>
								<input type="number" name="cep">
							</div>
						</section>

						<section>
							<div>
								<label>Cidade</label>
								<input type="text" name="cidade">
							</div>

							<div>
								<label>Estado</label>
								<input type="text" name="estado">
							</div>
						</section>
					</div>

                    <div class="dadosPagamento">

                        <section class="btnsPagamento">
                            <div class="btnBoleto active">
                                <h2>Boleto</h2>
                            </div>
                            <div class="btnPix">
                                <h2>PIX</h2>
                            </div>
                            <div class="btnCredito">
                                <h2>Crédito</h2>
                            </div>
                        </section>

                        <div class="formBoleto active">
                            <p>Boleto</p>
                        </div>
                        <div class="formPix">
                            <p>pix</p>
                        </div>
                        <div class="formCredito">

                            <div>
                                <label>Titular</label>
                                <input type="text" name="titular">
                            </div>
                            
                            <div>
                                <label>Número do Cartão</label>
                                <input type="number" name="nCartao">
                            </div>

                            <section>
	                            <div>
	                                <label>Vencimento</label>
	                                <input type="date" name="vencimento">
	                            </div>
	                        
	                            <div>
	                                <label>CVV</label>
	                                <input type="number" name="cvv">
	                            </div>
                        	</section>
                        </div>
                        <div class="btnConfirmar">
                        	<button>Confirmar</button>
                    	</div>
                    </div>
			</form> 

		</div>

		</div>
		<script src="jsCadastro.js"></script>
	</body>
</html>