<?php
/**
 * @phpcs:disable Generic.Files.LineLength.TooLong
 */
namespace ChicoRei\Packages\Cielo;

class CieloCodeConstants
{
    /**
     * Status code details
     * @var array
     */
    const STATUS = [
        0 => [
            'status' => 'NotFinished',
            'description' => 'Aguardando atualização de status'
        ],
        1 => [
            'status' => 'Authorized',
            'description' => 'Pagamento apto a ser capturado ou definido como pago'
        ],
        2 => [
            'status' => 'PaymentConfirmed',
            'description' => 'Pagamento confirmado e finalizado'
        ],
        3 => [
            'status' => 'Denied',
            'description' => 'Pagamento negado por Autorizador'
        ],
        10 => [
            'status' => 'Voided',
            'description' => 'Pagamento cancelado'
        ],
        11 => [
            'status' => 'Refunded',
            'description' => 'Pagamento cancelado após 23:59 do dia de autorização'
        ],
        12 => [
            'status' => 'Pending',
            'description' => 'Aguardando Status de instituição financeira'
        ],
        13 => [
            'status' => 'Aborted',
            'description' => 'Pagamento cancelado por falha no processamento ou por ação do AF'
        ],
        20 => [
            'status' => 'Scheduled',
            'description' => 'Recorrência agendada'
        ],
    ];

    /**
     * Return code details
     * @var array
     */
    const RETURN_CODE = [
        '00' => [
            'definition' => 'Transação autorizada com sucesso.',
            'meaning' => 'Transação autorizada com sucesso.',
            'action' => 'Transação autorizada com sucesso.',
            'allowRetry' => false
        ],

        '01' => [
            'definition' => 'Transação não autorizada. Transação referida.',
            'meaning' => 'Transação não autorizada. Referida (suspeita de fraude) pelo banco emissor.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '02' => [
            'definition' => 'Transação não autorizada. Transação referida.',
            'meaning' => 'Transação não autorizada. Referida (suspeita de fraude) pelo banco emissor.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '03' => [
            'definition' => 'Transação não permitida. Erro no cadastramento do código do estabelecimento no arquivo de configuração do TEF',
            'meaning' => 'Transação não permitida. Estabelecimento inválido. Entre com contato com a Cielo.',
            'action' => 'Não foi possível processar a transação. Entre com contato com a Loja Virtual.',
            'allowRetry' => false
        ],

        '04' => [
            'definition' => 'Transação não autorizada. Cartão bloqueado pelo banco emissor.',
            'meaning' => 'Transação não autorizada. Cartão bloqueado pelo banco emissor.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '05' => [
            'definition' => 'Transação não autorizada. Cartão inadimplente (Do not honor).',
            'meaning' => 'Transação não autorizada. Não foi possível processar a transação. Questão relacionada a segurança, inadimplencia ou limite do portador.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '06' => [
            'definition' => 'Transação não autorizada. Cartão cancelado.',
            'meaning' => 'Transação não autorizada. Não foi possível processar a transação. Cartão cancelado permanentemente pelo banco emissor.',
            'action' => 'Não foi possível processar a transação. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '07' => [
            'definition' => 'Transação negada. Reter cartão condição especial',
            'meaning' => 'Transação não autorizada por regras do banco emissor.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor',
            'allowRetry' => false
        ],

        '08' => [
            'definition' => 'Transação não autorizada. Código de segurança inválido.',
            'meaning' => 'Transação não autorizada. Código de segurança inválido. Oriente o portador a corrigir os dados e tentar novamente.',
            'action' => 'Transação não autorizada. Dados incorretos. Reveja os dados e informe novamente.',
            'allowRetry' => false
        ],

        '09' => [
            'definition' => 'Transação cancelada parcialmente com sucesso.',
            'meaning' => 'Transação cancelada parcialmente com sucesso',
            'action' => 'Transação cancelada parcialmente com sucesso',
            'allowRetry' => false
        ],

        '11' => [
            'definition' => 'Transação autorizada com sucesso para cartão emitido no exterior',
            'meaning' => 'Transação autorizada com sucesso.',
            'action' => 'Transação autorizada com sucesso.',
            'allowRetry' => false
        ],

        '12' => [
            'definition' => 'Transação inválida, erro no cartão.',
            'meaning' => 'Não foi possível processar a transação. Solicite ao portador que verifique os dados do cartão e tente novamente.',
            'action' => 'Não foi possível processar a transação. reveja os dados informados e tente novamente. Se o erro persistir, entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '13' => [
            'definition' => 'Transação não permitida. Valor da transação Inválido.',
            'meaning' => 'Transação não permitida. Valor inválido. Solicite ao portador que reveja os dados e novamente. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Transação não autorizada. Valor inválido. Refazer a transação confirmando os dados informados. Persistindo o erro, entrar em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '14' => [
            'definition' => 'Transação não autorizada. Cartão Inválido',
            'meaning' => 'Transação não autorizada. Cartão inválido. Pode ser bloqueio do cartão no banco emissor, dados incorretos ou tentativas de testes de cartão. Use o Algoritmo de Lhum (Mod 10) para evitar transações não autorizadas por esse motivo. Consulte www.cielo.com.br/desenvolvedores para implantar o Algoritmo de Lhum.',
            'action' => 'Não foi possível processar a transação. reveja os dados informados e tente novamente. Se o erro persistir, entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '15' => [
            'definition' => 'Banco emissor indisponível ou inexistente.',
            'meaning' => 'Transação não autorizada. Banco emissor indisponível.',
            'action' => 'Não foi possível processar a transação. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '19' => [
            'definition' => 'Refaça a transação ou tente novamente mais tarde.',
            'meaning' => 'Não foi possível processar a transação. Refaça a transação ou tente novamente mais tarde. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Não foi possível processar a transação. Refaça a transação ou tente novamente mais tarde. Se o erro persistir entre em contato com a loja virtual.',
            'allowRetry' => true
        ],

        '21' => [
            'definition' => 'Cancelamento não efetuado. Transação não localizada.',
            'meaning' => 'Não foi possível processar o cancelamento. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Não foi possível processar o cancelamento. Tente novamente mais tarde. Persistindo o erro, entrar em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '22' => [
            'definition' => 'Parcelamento inválido. Número de parcelas inválidas.',
            'meaning' => 'Não foi possível processar a transação. Número de parcelas inválidas. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Não foi possível processar a transação. Valor inválido. Refazer a transação confirmando os dados informados. Persistindo o erro, entrar em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '23' => [
            'definition' => 'Transação não autorizada. Valor da prestação inválido.',
            'meaning' => 'Não foi possível processar a transação. Valor da prestação inválido. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Não foi possível processar a transação. Valor da prestação inválido. Refazer a transação confirmando os dados informados. Persistindo o erro, entrar em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '24' => [
            'definition' => 'Quantidade de parcelas inválido.',
            'meaning' => 'Não foi possível processar a transação. Quantidade de parcelas inválido. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Não foi possível processar a transação. Quantidade de parcelas inválido. Refazer a transação confirmando os dados informados. Persistindo o erro, entrar em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '25' => [
            'definition' => 'Pedido de autorização não enviou número do cartão',
            'meaning' => 'Não foi possível processar a transação. Solicitação de autorização não enviou o número do cartão. Se o erro persistir, verifique a comunicação entre loja virtual e Cielo.',
            'action' => 'Não foi possível processar a transação. reveja os dados informados e tente novamente. Persistindo o erro, entrar em contato com a loja virtual.',
            'allowRetry' => true
        ],

        '28' => [
            'definition' => 'Arquivo temporariamente indisponível.',
            'meaning' => 'Não foi possível processar a transação. Arquivo temporariamente indisponível. Reveja a comunicação entre Loja Virtual e Cielo. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Não foi possível processar a transação. Entre com contato com a Loja Virtual.',
            'allowRetry' => true
        ],

        '30' => [
            'definition' => 'Transação não autorizada. Decline Message',
            'meaning' => 'Não foi possível processar a transação. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir verifique a comunicação com a Cielo esta sendo feita corretamente',
            'action' => 'Não foi possível processar a transação. Reveja os dados e tente novamente. Se o erro persistir, entre em contato com a loja',
            'allowRetry' => false
        ],

        '39' => [
            'definition' => 'Transação não autorizada. Erro no banco emissor.',
            'meaning' => 'Transação não autorizada. Erro no banco emissor.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '41' => [
            'definition' => 'Transação não autorizada. Cartão bloqueado por perda.',
            'meaning' => 'Transação não autorizada. Cartão bloqueado por perda.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '43' => [
            'definition' => 'Transação não autorizada. Cartão bloqueado por roubo.',
            'meaning' => 'Transação não autorizada. Cartão bloqueado por roubo.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '51' => [
            'definition' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'meaning' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '52' => [
            'definition' => 'Cartão com dígito de controle inválido.',
            'meaning' => 'Não foi possível processar a transação. Cartão com dígito de controle inválido.',
            'action' => 'Transação não autorizada. Reveja os dados informados e tente novamente.',
            'allowRetry' => false
        ],

        '53' => [
            'definition' => 'Transação não permitida. Cartão poupança inválido',
            'meaning' => 'Transação não permitida. Cartão poupança inválido.',
            'action' => 'Não foi possível processar a transação. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '54' => [
            'definition' => 'Transação não autorizada. Cartão vencido',
            'meaning' => 'Transação não autorizada. Cartão vencido.',
            'action' => 'Transação não autorizada. Refazer a transação confirmando os dados.',
            'allowRetry' => false
        ],

        '55' => [
            'definition' => 'Transação não autorizada. Senha inválida',
            'meaning' => 'Transação não autorizada. Senha inválida.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '57' => [
            'definition' => 'Transação não permitida para o cartão',
            'meaning' => 'Transação não autorizada. Transação não permitida para o cartão.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '58' => [
            'definition' => 'Transação não permitida. Opção de pagamento inválida.',
            'meaning' => 'Transação não permitida. Opção de pagamento inválida. Reveja se a opção de pagamento escolhida está habilitada no cadastro',
            'action' => 'Transação não autorizada. Entre em contato com sua loja virtual.',
            'allowRetry' => false
        ],

        '59' => [
            'definition' => 'Transação não autorizada. Suspeita de fraude.',
            'meaning' => 'Transação não autorizada. Suspeita de fraude.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '60' => [
            'definition' => 'Transação não autorizada.',
            'meaning' => 'Transação não autorizada. Tente novamente. Se o erro persistir o portador deve entrar em contato com o banco emissor.',
            'action' => 'Não foi possível processar a transação. Tente novamente mais tarde. Se o erro persistir, entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '61' => [
            'definition' => 'Banco emissor indisponível.',
            'meaning' => 'Transação não autorizada. Banco emissor indisponível.',
            'action' => 'Transação não autorizada. Tente novamente. Se o erro persistir, entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '62' => [
            'definition' => 'Transação não autorizada. Cartão restrito para uso doméstico',
            'meaning' => 'Transação não autorizada. Cartão restrito para uso doméstico.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '63' => [
            'definition' => 'Transação não autorizada. Violação de segurança',
            'meaning' => 'Transação não autorizada. Violação de segurança.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '64' => [
            'definition' => 'Transação não autorizada. Valor abaixo do mínimo exigido pelo banco emissor.',
            'meaning' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'action' => 'Transação não autorizada. Valor abaixo do mínimo exigido pelo banco emissor.',
            'allowRetry' => false
        ],

        '65' => [
            'definition' => 'Transação não autorizada. Excedida a quantidade de transações para o cartão.',
            'meaning' => 'Transação não autorizada. Excedida a quantidade de transações para o cartão.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '67' => [
            'definition' => 'Transação não autorizada. Cartão bloqueado para compras hoje.',
            'meaning' => 'Transação não autorizada. Cartão bloqueado para compras hoje. Bloqueio pode ter ocorrido por excesso de tentativas inválidas. O cartão será desbloqueado automaticamente à meia noite.',
            'action' => 'Transação não autorizada. Cartão bloqueado temporariamente. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '70' => [
            'definition' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'meaning' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '72' => [
            'definition' => 'Cancelamento não efetuado. Saldo disponível para cancelamento insuficiente.',
            'meaning' => 'Cancelamento não efetuado. Saldo disponível para cancelamento insuficiente. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Cancelamento não efetuado. Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '74' => [
            'definition' => 'Transação não autorizada. A senha está vencida.',
            'meaning' => 'Transação não autorizada. A senha está vencida.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '75' => [
            'definition' => 'Senha bloqueada. Excedeu tentativas de cartão.',
            'meaning' => 'Transação não autorizada.',
            'action' => 'Sua Transação não pode ser processada. Entre em contato com o Emissor do seu cartão.',
            'allowRetry' => false
        ],

        '76' => [
            'definition' => 'Cancelamento não efetuado. Banco emissor não localizou a transação original',
            'meaning' => 'Cancelamento não efetuado. Banco emissor não localizou a transação original',
            'action' => 'Cancelamento não efetuado. Entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '77' => [
            'definition' => 'Cancelamento não efetuado. Não foi localizado a transação original',
            'meaning' => 'Cancelamento não efetuado. Não foi localizado a transação original',
            'action' => 'Cancelamento não efetuado. Entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '78' => [
            'definition' => 'Transação não autorizada. Cartão bloqueado primeiro uso.',
            'meaning' => 'Transação não autorizada. Cartão bloqueado primeiro uso. Solicite ao portador que desbloqueie o cartão diretamente com seu banco emissor.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor e solicite o desbloqueio do cartão.',
            'allowRetry' => false
        ],

        '80' => [
            'definition' => 'Transação não autorizada. Divergencia na data de transação/pagamento.',
            'meaning' => 'Transação não autorizada. Data da transação ou data do primeiro pagamento inválida.',
            'action' => 'Transação não autorizada. Refazer a transação confirmando os dados.',
            'allowRetry' => false
        ],

        '82' => [
            'definition' => 'Transação não autorizada. Cartão inválido.',
            'meaning' => 'Transação não autorizada. Cartão Inválido. Solicite ao portador que reveja os dados e tente novamente.',
            'action' => 'Transação não autorizada. Refazer a transação confirmando os dados. Se o erro persistir, entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '83' => [
            'definition' => 'Transação não autorizada. Erro no controle de senhas',
            'meaning' => 'Transação não autorizada. Erro no controle de senhas',
            'action' => 'Transação não autorizada. Refazer a transação confirmando os dados. Se o erro persistir, entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '85' => [
            'definition' => 'Transação não permitida. Falha da operação.',
            'meaning' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'action' => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '86' => [
            'definition' => 'Transação não permitida. Falha da operação.',
            'meaning' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'action' => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '88' => [
            'definition' => 'Falha na criptografia dos dados.',
            'meaning' => 'Falha na criptografia dos dados.',
            'action' => 'Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        '89' => [
            'definition' => 'Erro na transação.',
            'meaning' => 'Transação não autorizada. Erro na transação. O portador deve tentar novamente e se o erro persistir, entrar em contato com o banco emissor.',
            'action' => 'Transação não autorizada. Erro na transação. Tente novamente e se o erro persistir, entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '90' => [
            'definition' => 'Transação não permitida. Falha da operação.',
            'meaning' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'action' => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '91' => [
            'definition' => 'Transação não autorizada. Banco emissor temporariamente indisponível.',
            'meaning' => 'Transação não autorizada. Banco emissor temporariamente indisponível.',
            'action' => 'Transação não autorizada. Banco emissor temporariamente indisponível. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        '92' => [
            'definition' => 'Transação não autorizada. Tempo de comunicação excedido.',
            'meaning' => 'Transação não autorizada. Tempo de comunicação excedido.',
            'action' => 'Transação não autorizada. Comunicação temporariamente indisponível. Entre em contato com a loja virtual.',
            'allowRetry' => true
        ],

        '93' => [
            'definition' => 'Transação não autorizada. Violação de regra - Possível erro no cadastro.',
            'meaning' => 'Transação não autorizada. Violação de regra - Possível erro no cadastro.',
            'action' => 'Sua transação não pode ser processada. Entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        '94' => [
            'definition' => 'Transação duplicada.',
            'meaning' => 'Transação duplicada enviado para autorização/captura.',
            'action' => 'O estabelecimento deve revisar as transações enviadas.',
            'allowRetry' => false
        ],

        '96' => [
            'definition' => 'Falha no processamento.',
            'meaning' => 'Não foi possível processar a transação. Falha no sistema da Cielo. Se o erro persistir, entre em contato com a Cielo.',
            'action' => 'Sua Transação não pode ser processada, Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => true
        ],

        '97' => [
            'definition' => 'Valor não permitido para essa transação.',
            'meaning' => 'Transação não autorizada. Valor não permitido para essa transação.',
            'action' => 'Transação não autorizada. Valor não permitido para essa transação.',
            'allowRetry' => false
        ],

        '98' => [
            'definition' => 'Sistema/comunicação indisponível.',
            'meaning' => 'Transação não autorizada. Sistema do emissor sem comunicação. Se for geral, verificar SITEF, GATEWAY e/ou Conectividade.',
            'action' => 'Sua Transação não pode ser processada, Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => true
        ],

        '99' => [
            'definition' => 'Sistema/comunicação indisponível.',
            'meaning' => 'Transação não autorizada. Sistema do emissor sem comunicação. Tente mais tarde.  Pode ser erro no SITEF, favor verificar !',
            'action' => 'Sua Transação não pode ser processada, Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => true
        ],

        '475' => [
            'definition' => 'Timeout de Cancelamento',
            'meaning' => 'A aplicação não respondeu dentro do tempo esperado.',
            'action' => 'Realizar uma nova tentativa após alguns segundos. Persistindo, entrar em contato com o Suporte.',
            'allowRetry' => false
        ],

        '999' => [
            'definition' => 'Sistema/comunicação indisponível.',
            'meaning' => 'Transação não autorizada. Sistema do emissor sem comunicação. Tente mais tarde.  Pode ser erro no SITEF, favor verificar !',
            'action' => 'Sua Transação não pode ser processada, Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => true
        ],

        'AA' => [
            'definition' => 'Tempo Excedido',
            'meaning' => 'Tempo excedido na comunicação com o banco emissor. Oriente o portador a tentar novamente, se o erro persistir será necessário que o portador contate seu banco emissor.',
            'action' => 'Tempo excedido na sua comunicação com o banco emissor, tente novamente mais tarde. Se o erro persistir, entre em contato com seu banco.',
            'allowRetry' => true
        ],

        'AC' => [
            'definition' => 'Transação não permitida. Cartão de débito sendo usado com crédito. Use a função débito.',
            'meaning' => 'Transação não permitida. Cartão de débito sendo usado com crédito. Solicite ao portador que selecione a opção de pagamento Cartão de Débito.',
            'action' => 'Transação não autorizada. Tente novamente selecionando a opção de pagamento cartão de débito.',
            'allowRetry' => false
        ],

        'AE' => [
            'definition' => 'Tente Mais Tarde',
            'meaning' => 'Tempo excedido na comunicação com o banco emissor. Oriente o portador a tentar novamente, se o erro persistir será necessário que o portador contate seu banco emissor.',
            'action' => 'Tempo excedido na sua comunicação com o banco emissor, tente novamente mais tarde. Se o erro persistir, entre em contato com seu banco.',
            'allowRetry' => true
        ],

        'AF' => [
            'definition' => 'Transação não permitida. Falha da operação.',
            'meaning' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'action' => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        'AG' => [
            'definition' => 'Transação não permitida. Falha da operação.',
            'meaning' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'action' => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        'AH' => [
            'definition' => 'Transação não permitida. Cartão de crédito sendo usado com débito. Use a função crédito.',
            'meaning' => 'Transação não permitida. Cartão de crédito sendo usado com débito. Solicite ao portador que selecione a opção de pagamento Cartão de Crédito.',
            'action' => 'Transação não autorizada. Tente novamente selecionando a opção de pagamento cartão de crédito.',
            'allowRetry' => false
        ],

        'AI' => [
            'definition' => 'Transação não autorizada. Autenticação não foi realizada.',
            'meaning' => 'Transação não autorizada. Autenticação não foi realizada. O portador não concluiu a autenticação. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir, entre em contato com a Cielo informando o BIN (6 primeiros dígitos do cartão)',
            'action' => 'Transação não autorizada. Autenticação não foi realizada com sucesso. Tente novamente e informe corretamente os dados solicitado. Se o erro persistir, entre em contato com o lojista.',
            'allowRetry' => false
        ],

        'AJ' => [
            'definition' => 'Transação não permitida. Transação de crédito ou débito em uma operação que permite apenas Private Label. Tente novamente selecionando a opção Private Label.',
            'meaning' => 'Transação não permitida. Transação de crédito ou débito em uma operação que permite apenas Private Label. Solicite ao portador que tente novamente selecionando a opção Private Label. Caso não disponibilize a opção Private Label verifique na Cielo se o seu estabelecimento permite essa operação.',
            'action' => 'Transação não permitida. Transação de crédito ou débito em uma operação que permite apenas Private Label. Tente novamente e selecione a opção Private Label. Em caso de um novo erro entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        'AV' => [
            'definition' => 'Transação não autorizada. Dados Inválidos',
            'meaning' => 'Falha na validação dos dados da transação. Oriente o portador a rever os dados e tentar novamente.',
            'action' => 'Falha na validação dos dados. Reveja os dados informados e tente novamente.',
            'allowRetry' => true
        ],

        'BD' => [
            'definition' => 'Transação não permitida. Falha da operação.',
            'meaning' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'action' => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        'BL' => [
            'definition' => 'Transação não autorizada. Limite diário excedido.',
            'meaning' => 'Transação não autorizada. Limite diário excedido. Solicite ao portador que entre em contato com seu banco emissor.',
            'action' => 'Transação não autorizada. Limite diário excedido. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        'BM' => [
            'definition' => 'Transação não autorizada. Cartão Inválido',
            'meaning' => 'Transação não autorizada. Cartão inválido. Pode ser bloqueio do cartão no banco emissor ou dados incorretos. Tente usar o Algoritmo de Lhum (Mod 10) para evitar transações não autorizadas por esse motivo.',
            'action' => 'Transação não autorizada. Cartão inválido.  Refaça a transação confirmando os dados informados.',
            'allowRetry' => false
        ],

        'BN' => [
            'definition' => 'Transação não autorizada. Cartão ou conta bloqueado.',
            'meaning' => 'Transação não autorizada. O cartão ou a conta do portador está bloqueada. Solicite ao portador que entre em contato com  seu banco emissor.',
            'action' => 'Transação não autorizada. O cartão ou a conta do portador está bloqueada. Entre em contato com  seu banco emissor.',
            'allowRetry' => false
        ],

        'BO' => [
            'definition' => 'Transação não permitida. Falha da operação.',
            'meaning' => 'Transação não permitida. Houve um erro no processamento. Solicite ao portador que digite novamente os dados do cartão, se o erro persistir, entre em contato com o banco emissor.',
            'action' => 'Transação não permitida. Houve um erro no processamento. Digite novamente os dados do cartão, se o erro persistir, entre em contato com o banco emissor.',
            'allowRetry' => true
        ],

        'BP' => [
            'definition' => 'Transação não autorizada. Conta corrente inexistente.',
            'meaning' => 'Transação não autorizada. Não possível processar a transação por um erro relacionado ao cartão ou conta do portador. Solicite ao portador que entre em contato com o banco emissor.',
            'action' => 'Transação não autorizada. Não possível processar a transação por um erro relacionado ao cartão ou conta do portador. Entre em contato com o banco emissor.',
            'allowRetry' => false
        ],

        'BP176' => [
            'definition' => 'Transação não permitida.',
            'meaning' => 'Parceiro deve checar se o processo de integração foi concluído com sucesso.',
            'action' => 'Parceiro deve checar se o processo de integração foi concluído com sucesso.',
            'allowRetry' => false
        ],

        'BV' => [
            'definition' => 'Transação não autorizada. Cartão vencido',
            'meaning' => 'Transação não autorizada. Cartão vencido.',
            'action' => 'Transação não autorizada. Refazer a transação confirmando os dados.',
            'allowRetry' => false
        ],

        'CF' => [
            'definition' => 'Transação não autorizada.C79:J79 Falha na validação dos dados.',
            'meaning' => 'Transação não autorizada. Falha na validação dos dados. Solicite ao portador que entre em contato com o banco emissor.',
            'action' => 'Transação não autorizada. Falha na validação dos dados. Entre em contato com o banco emissor.',
            'allowRetry' => false
        ],

        'CG' => [
            'definition' => 'Transação não autorizada. Falha na validação dos dados.',
            'meaning' => 'Transação não autorizada. Falha na validação dos dados. Solicite ao portador que entre em contato com o banco emissor.',
            'action' => 'Transação não autorizada. Falha na validação dos dados. Entre em contato com o banco emissor.',
            'allowRetry' => false
        ],

        'DA' => [
            'definition' => 'Transação não autorizada. Falha na validação dos dados.',
            'meaning' => 'Transação não autorizada. Falha na validação dos dados. Solicite ao portador que entre em contato com o banco emissor.',
            'action' => 'Transação não autorizada. Falha na validação dos dados. Entre em contato com o banco emissor.',
            'allowRetry' => false
        ],

        'DF' => [
            'definition' => 'Transação não permitida. Falha no cartão ou cartão inválido.',
            'meaning' => 'Transação não permitida. Falha no cartão ou cartão inválido. Solicite ao portador que digite novamente os dados do cartão, se o erro persistir, entre em contato com o banco',
            'action' => 'Transação não permitida. Falha no cartão ou cartão inválido. Digite novamente os dados do cartão, se o erro persistir, entre em contato com o banco',
            'allowRetry' => true
        ],

        'DM' => [
            'definition' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'meaning' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        'DQ' => [
            'definition' => 'Transação não autorizada. Falha na validação dos dados.',
            'meaning' => 'Transação não autorizada. Falha na validação dos dados. Solicite ao portador que entre em contato com o banco emissor.',
            'action' => 'Transação não autorizada. Falha na validação dos dados. Entre em contato com o banco emissor.',
            'allowRetry' => false
        ],

        'DS' => [
            'definition' => 'Transação não permitida para o cartão',
            'meaning' => 'Transação não autorizada. Transação não permitida para o cartão.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        'EB' => [
            'definition' => 'Transação não autorizada. Limite diário excedido.',
            'meaning' => 'Transação não autorizada. Limite diário excedido. Solicite ao portador que entre em contato com seu banco emissor.',
            'action' => 'Transação não autorizada. Limite diário excedido. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        'EE' => [
            'definition' => 'Transação não permitida. Valor da parcela inferior ao mínimo permitido.',
            'meaning' => 'Transação não permitida. Valor da parcela inferior ao mínimo permitido. Não é permitido parcelas inferiores a R$ 5,00. Necessário rever calculo para parcelas.',
            'action' => 'Transação não permitida. O valor da parcela está abaixo do mínimo permitido. Entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        'EK' => [
            'definition' => 'Transação não permitida para o cartão',
            'meaning' => 'Transação não autorizada. Transação não permitida para o cartão.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        'FA' => [
            'definition' => 'Transação não autorizada.',
            'meaning' => 'Transação não autorizada AmEx.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        'FC' => [
            'definition' => 'Transação não autorizada. Ligue Emissor',
            'meaning' => 'Transação não autorizada. Oriente o portador a entrar em contato com o banco emissor.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => false
        ],

        'FD' => [
            'definition' => 'Transação negada. Reter cartão condição especial',
            'meaning' => 'Transação não autorizada por regras do banco emissor.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor',
            'allowRetry' => false
        ],

        'FE' => [
            'definition' => 'Transação não autorizada. Divergencia na data de transação/pagamento.',
            'meaning' => 'Transação não autorizada. Data da transação ou data do primeiro pagamento inválida.',
            'action' => 'Transação não autorizada. Refazer a transação confirmando os dados.',
            'allowRetry' => false
        ],

        'FF' => [
            'definition' => 'Cancelamento OK',
            'meaning' => 'Transação de cancelamento autorizada com sucesso. ATENÇÂO: Esse retorno é para casos de cancelamentos e não para casos de autorizações.',
            'action' => 'Transação de cancelamento autorizada com sucesso',
            'allowRetry' => false
        ],

        'FG' => [
            'definition' => 'Transação não autorizada. Ligue AmEx 08007285090.',
            'meaning' => 'Transação não autorizada. Oriente o portador a entrar em contato com a Central de Atendimento AmEx.',
            'action' => 'Transação não autorizada. Entre em contato com a Central de Atendimento AmEx no telefone 08007285090',
            'allowRetry' => false
        ],

        'GA' => [
            'definition' => 'Aguarde Contato',
            'meaning' => 'Transação não autorizada. Referida pelo Lynx Online de forma preventiva.',
            'action' => 'Transação não autorizada. Entre em contato com o lojista.',
            'allowRetry' => false
        ],

        'GD' => [
            'definition' => 'Transação não permitida.',
            'meaning' => 'Transação não permitida. Entre em contato com a Cielo.',
            'action' => 'Transação não permitida. Entre em contato com a Cielo.',
            'allowRetry' => false
        ],

        'HJ' => [
            'definition' => 'Transação não permitida. Código da operação inválido.',
            'meaning' => 'Transação não permitida. Código da operação Coban inválido.',
            'action' => 'Transação não permitida. Código da operação Coban inválido. Entre em contato com o lojista.',
            'allowRetry' => false
        ],

        'IA' => [
            'definition' => 'Transação não permitida. Indicador da operação inválido.',
            'meaning' => 'Transação não permitida. Indicador da operação Coban inválido.',
            'action' => 'Transação não permitida. Indicador da operação Coban inválido. Entre em contato com o lojista.',
            'allowRetry' => false
        ],

        'JB' => [
            'definition' => 'Transação não permitida. Valor da operação inválido.',
            'meaning' => 'Transação não permitida. Valor da operação Coban inválido.',
            'action' => 'Transação não permitida. Valor da operação Coban inválido. Entre em contato com o lojista.',
            'allowRetry' => false
        ],

        'KA' => [
            'definition' => 'Transação não permitida. Falha na validação dos dados.',
            'meaning' => 'Transação não permitida. Houve uma falha na validação dos dados. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir verifique a comunicação entre loja virtual e Cielo.',
            'action' => 'Transação não permitida. Houve uma falha na validação dos dados. reveja os dados informados e tente novamente. Se o erro persistir entre em contato com a Loja Virtual.',
            'allowRetry' => false
        ],

        'KB' => [
            'definition' => 'Transação não permitida. Selecionado a opção incorrente.',
            'meaning' => 'Transação não permitida. Selecionado a opção incorreta. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir deve ser verificado a comunicação entre loja virtual e Cielo.',
            'action' => 'Transação não permitida. Selecionado a opção incorreta. Tente novamente. Se o erro persistir entre em contato com a Loja Virtual.',
            'allowRetry' => false
        ],

        'KE' => [
            'definition' => 'Transação não autorizada. Falha na validação dos dados.',
            'meaning' => 'Transação não autorizada. Falha na validação dos dados. Opção selecionada não está habilitada. Verifique as opções disponíveis para o portador.',
            'action' => 'Transação não autorizada. Falha na validação dos dados. Opção selecionada não está habilitada. Entre em contato com a loja virtual.',
            'allowRetry' => false
        ],

        'N7' => [
            'definition' => 'Transação não autorizada. Código de segurança inválido.',
            'meaning' => 'Transação não autorizada. Código de segurança inválido. Oriente o portador corrigir os dados e tentar novamente.',
            'action' => 'Transação não autorizada. Reveja os dados e informe novamente.',
            'allowRetry' => false
        ],

        'R1' => [
            'definition' => 'Transação não autorizada. Cartão inadimplente (Do not honor).',
            'meaning' => 'Transação não autorizada. Não foi possível processar a transação. Questão relacionada a segurança, inadimplencia ou limite do portador.',
            'action' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'allowRetry' => true
        ],

        'U3' => [
            'definition' => 'Transação não permitida. Falha na validação dos dados.',
            'meaning' => 'Transação não permitida. Houve uma falha na validação dos dados. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir verifique a comunicação entre loja virtual e Cielo.',
            'action' => 'Transação não permitida. Houve uma falha na validação dos dados. reveja os dados informados e tente novamente. Se o erro persistir entre em contato com a Loja Virtual.',
            'allowRetry' => false
        ],
    ];
}
