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
@stop
