@extends('adminlte::page')

@section('title', 'Seu Provedor')

@section('content')
    <div class="container">
        <div class="row" style="justify-content: center; display: flex;flex-wrap: wrap; vertical-align: center;"> 
            <div class="col" style="display: inline-block; vertical-align: center;">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                <h2 style="color: rgb(192, 39, 60); font-weight: bolder; font-family: Arial, Helvetica, sans-serif;">Seu Provedor</h2>
                <br>
                <p style="color: rgb(117, 117, 117); font-family: Arial, Helvetica, sans-serif;">Coloque seu provedor na palma da mão dos <br> seus clientes!</p>
                <p style="color: rgb(117, 117, 117)">Traga facilidades como emissão de segunda <br> via de boletos,
                   pagamento de faturas, pedido <br> de troca de vencimento e forma de <br> pagamento dos serviços,
                   informe sobre <br> promoções e vantagens!
                </p>
            </div>
            <div class="col">
                <img src="imgs/pngs/asset_01.png" alt="">
            </div>
        </div>
        <br><br><br>
        <div align="center">
            <h2 style="font-weight: bolder; font-family: Arial, Helvetica, sans-serif; color: rgb(192, 39, 60);">Tudo em um só<br>lugar para você</h2>
            <p style="font-family: Arial, Helvetica, sans-serif; color:rgb(117, 117, 117); font-size: 18px; ">Reunimos tudo o que seu cliente <br> precisa!</p>
        </div>
        <div>

        </div>
    </div>
    
    <div class="row" style=" margin-top: 45px;">
        <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin-right: 25px; width: 250px;">
            <div class="card-body" style="height: 50%; height: 115px;">
                <img src="imgs/svgs/troca_vencimento.svg" alt="troca de vencimento" style="margin-top: -75px; margin-left: -30px;">
                <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -35px">Troca de vencimento</p>
            </div>
        </div>
        <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin-right: 25px; width: 250px;">
            <div class="card-body" style="height: 50%; height: 115px;">
                <img src="imgs/svgs/troca_plano.svg" alt="troca de plano" style="margin-top: -75px; margin-left: -30px;">
                <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -35px">Troca de planos&nbsp;&nbsp;&nbsp;</p>
            </div>
        </div>
        <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin-right: 25px; width: 250px;">
            <div class="card-body" style="height: 50%; height: 115px;">
                <img src="imgs/svgs/pagamento_fatura.svg" alt="troca de plano" style="margin-top: -75px; margin-left: -30px;">
                <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -35px">Pagamento de faturas&nbsp;&nbsp;&nbsp;</p>
            </div>
        </div>
        <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin-right: 25px; width: 250px;">
            <div class="card-body" style="height: 50%; height: 115px;">
                <img src="imgs/svgs/canais_atendimento.svg" alt="troca de plano" style="margin-top: -75px; margin-left: -30px;">
                <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -35px">Canais de Atendimento</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin-right: 25px; margin-top: 50px; width: 250px;">
            <div class="card-body" style="height: 50%; height: 115px;">
                <img src="imgs/svgs/segunda_via.svg" alt="troca de plano" style="margin-top: -75px; margin-left: -30px;">
                <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -35px">Segunda via <br> de boletos para clientes</p>
            </div>
        </div>
        <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin-right: 25px; margin-top: 50px; width: 250px;">
            <div class="card-body" style="height: 50%; height: 115px;">
                <img src="imgs/svgs/notificacao_aviso.svg" alt="troca de plano" style="margin-top: -75px; margin-left: -30px;">
                <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -35px">Notificação de aviso<br> de vencimento</p>
            </div>
        </div>
        <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin-right: 25px; margin-top: 50px; width: 250px;">
            <div class="card-body" style="height: 50%; height: 115px;">
                <img src="imgs/svgs/app_personalizado.svg" alt="troca de plano" style="margin-top: -75px; margin-left: -30px;">
                <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -35px">App personalizado<br> com sua cara</p>
            </div>
        </div>
        <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin-right: 25px; margin-top: 50px; width: 250px;">
            <div class="card-body" style="height: 50%; height: 115px;">
                <img src="imgs/svgs/pagamento_pix.svg" alt="troca de plano" style="margin-top: -75px; margin-left: -30px;">
                <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -35px">Pagamento PIX - Em<br> desenvolvimento</p>
            </div>
        </div>
    </div>
    <br>
    <br><br><br>
    <div class="row" style="background-color: rgba(0,0,0,0.03);height: 600px; margin-right: -30px; margin-left: -100px;">
            <div class="col-8" style="margin-left: -90px; margin-top: -10px">
                <img src="imgs/svgs/marginalia-financial-report.svg" alt="">
            </div>
            <div class="col-4">
                <br><br><br><br><br>
                <h3 style="text-align:right; color: rgb(192, 39, 60); font-weight: bolder; font-family: Arial, Helvetica, sans-serif; ">Suporte especializado,<br>cuidado e garantia</h3>
                <p style="text-align: right; color: rgb(117, 117, 117); font-family: Arial, Helvetica, sans-serif; ">O Serviço de suporte do time de especialistas<br>Mídia Simples irá fazer o acompanhamento de<br>
                    oerto da aplicação.Garantindo performance,<br>
                disponibilidade e estabilidade. Certificando que <br> os problemas identidicados sejam resolvidos da<br>melhor maneira possível;</p>
                <p style="text-align: right; color: rgb(117, 117, 117); font-family: Arial, Helvetica, sans-serif; ">
                    Após o lançamento do app, ajudamos você a se <br> manter à grente da competição com constantes <br> 
                    lançmentos de novas funcionalidades e<br>otimizando o design de acordo com as novas<br> tendências.
                </p>
            </div>
    </div>
    <br><br><br><br><br>
    <div align="center;">
        <h2 style=" color: rgb(192, 39, 60);text-align: center; font-family: Arial, Helvetica, sans-serif; font-weight: bolder">Administrando os dados<br>com excelência</h2>
        <div class="row">
            <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin: 35px;">
                <div class="card-body" style="height: 270px; width: 270px">
                    <div align="center" style="">
                        <img style="border-radius: 10px;background-color: black; padding: 20px;box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);" src="imgs/pngs/database.png" alt="troca de plano">
                    </div>
                    <br>
                    <h3 style="text-align: center; font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;">Hospedagem premium</h3>
                    <p style="text-align: center; color: rgb(117, 117, 117);">Utilizamos Hospedagem <br> premium de alta performnces</p>
                </div>
            </div>
            <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin: 35px;">
                <div class="card-body" style="height: 270px; width: 270px">
                    <div align="center" style="">
                        <img style="border-radius: 10px;background-color: black; padding: 20px;box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);" src="imgs/pngs/user-check.png" alt="troca de plano">
                    </div>
                    <br>
                    <h3 style="text-align: center; font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;">Aplicação segura</h3>
                    <p style="text-align: center;  color: rgb(117, 117, 117);">Certificado SSL/HTTPS<br>garantia de segurança no tráfego de informações</p>
                </div>
            </div>
            <div class="card" style=" border-radius: 30px; box-shadow: 2px 10px 10px 0 rgba(0,0,0,0.2);margin: 35px;">
                <div class="card-body" style="height: 270px; width: 270px">
                    <div align="center" style="">
                        <img style="border-radius: 10px;background-color: black; padding: 20px;box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);" src="imgs/pngs/search.png" alt="troca de plano">
                    </div>
                    <br>
                    <h3 style="text-align: center; font-size: 18px; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;">MS Application Care</h3>
                    <p style="text-align: center; color: rgb(117, 117, 117);">Depois da publicação do<br>aplicativo nas lojas, toda<br>aplicação requer manutenção<br>contínua.</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div style="margin-top: -250px;" >
            <img style="margin-left: -280px;" src="imgs/pngs/asset_12.png" alt="">
            <img style="margin-left: -700px; margin-top: 580px;" src="imgs/pngs/asset_10.png" alt="">
            <img style="margin-left: -140px; margin-top: -60px;" src="imgs/pngs/asset_11.png" alt="">
        </div>
        
        <h1 style="color: rgb(192, 39, 60);text-align: left; font-family: Arial, Helvetica, sans-serif; font-weight: bolder; margin-top: -850px; margin-left: 680px;">Tudo o que você<br>precisar</h1>
        <p style="font-size: 20px; margin-top: 20px; margin-left: 680px;text-align: left; color: rgb(117, 117, 117);">Integração já é pronta com SP Integrator mas fazemos integração com qualquer ERP.</p>
        <br>
        <p style="font-size: 20px; margin-top: 20px; margin-left: 680px;text-align: left; color: rgb(117, 117, 117);">Servidores no Brasil - Além de apoiarmos negócios 
            nacionais fato de nossos servidores estarem no Brasil<br> 
            garantem maior estabilidade e confiabilidade no uso do aplicativo.</p>
            <br>
        <p style="font-size: 20px; margin-top: 20px; margin-left: 680px;text-align: left; color: rgb(117, 117, 117);">
            Funcionalide flexível - Você pode escolher todas as funcionalidades que oferecemos ou apenas as que fazem sentido para o seu provedor ou até mesmo sugerir funcionalidades que ainda não temos.
        </p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="row" style="background-color: rgba(0,0,0,0.03); width: 1340px; height: 525px;">
            <div class="col" style="padding: 0px; margin-left: 150px;">
                <br><br><br><br><br><br><br><br>
                <h1 style="color: rgb(192, 39, 60);text-align: left; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;">Precisando de</h1>
                <p style="font-size: 18px; text-align: left; color: rgb(117, 117, 117);">Saiba de tudo sobre nossos produtos, <br> serviços e benefícios.Tire suas <br> dúvidas e resolva problemas em um <br> de nossos canais de atendimento</p>
            </div>
            <div class="col" style="margin-top: -40px; margin-right: -100px;">
                <img style="" src="imgs/pngs/marginalia-online-cooperation.png" alt="">
            </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="row" align="center" style="padding: 50px;">
        <div class="col" style="padding: 50px;">
            <img src="imgs/pngs/marginalia-delivering-a-message.png" alt="">
        </div>
        <div class="col" style="margin-right: -100px;">
            <br><br><br>
            <form action="{{route('index')}}" method="get">
            <h1 style="color: rgb(192, 39, 60);text-align: left; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;">Fale com a gente</h1> 
            <br>             
                <input type="text" name="name" id="name" placeholder="Nome" class="form-control" style="outline: 0;">
                <br>
                <input type="email" name="email" id="email" placeholder="Email"class="form-control">
                <br>
                <textarea rows = "3" cols = "60" name = "Mensagem" id="mensagem" name="mensagem" class="form-control">Mensagem</textarea>
                <br>
                <input style="border-radius: 15px; box-shadow: 5px 100px 100px rgba(0,0,0,0.03);" type="button" value="Enviar" class="btn btn-danger form-control">
            </form>
        </div>
    </div>
@stop

@section('footer')
    <div align="center">
        <h2 style="font-family: Arial, Helvetica, sans-serif; color: white; color: rgb(192, 39, 60);text-align: left; font-family: Arial, Helvetica, sans-serif; font-weight: bolder;">Seu logotipo</h2>
        <br>
        <div class="row">
            
                <h3 style="padding: 50px; color: rgb(192, 39, 60); font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 25px">Início</h3>
                <h3 style="padding: 50px; color: rgb(192, 39, 60); font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 25px">Tecnologias</h3>
                <h3 style="padding: 50px; color: rgb(192, 39, 60); font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 25px">Recursos</h3>
                <h3 style="padding: 50px; color: rgb(192, 39, 60); font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 25px">Contato</h3>

            <div class="col">
                <button class="btn bg-danger" style="border-radius: 7px; margin-top: 35px;"><i class="fab fa-facebook-square fa-2x"></i></button>
            </div>
        </div>
        
    </div>
    

@stop
