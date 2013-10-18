<?php
// +-----------------------------------------------------------------+
// |                   PhreeBooks Open Source ERP                    |
// +-----------------------------------------------------------------+
// | Copyright(c) 2008-2013 PhreeSoft, LLC (www.PhreeSoft.com)       |
// +-----------------------------------------------------------------+
// | This program is free software: you can redistribute it and/or   |
// | modify it under the terms of the GNU General Public License as  |
// | published by the Free Software Foundation, either version 3 of  |
// | the License, or any later version.                              |
// |                                                                 |
// | This program is distributed in the hope that it will be useful, |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of  |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the   |
// | GNU General Public License for more details.                    |
// +-----------------------------------------------------------------+
//  Path: /modules/contacts/language/en_us/language.php
//
//
// Titles and Headings
define('CONTACTS_CHART_SALES_TITLE','Vendas Mensais');

// Account table fields - common to all account types
define('ACT_POPUP_WINDOW_TITLE', 'Pesquisa Contato');
define('ACT_POPUP_TERMS_WINDOW_TITLE', 'Condições Pagamento');

// General defines
define('ACT_CATEGORY_I_ADDRESS','Incluir/Editar Contato');
define('TEXT_BUYER','Comprador');
define('ACT_SHORT_NAME','ID Contato');
define('TEXT_CONTACTS','Contatos');
define('TEXT_EMPLOYEE','Funcionário');
define('TEXT_LINK_TO','Link Para:');
define('TEXT_NEW_CONTACT','Novo Contato');
define('TEXT_SALES_REP','Representante Vendas');
define('TEXT_COPY_ADDRESS','Endereço Transferência');
define('TEXT_NEW_CALL','Nova Ligação');
define('TEXT_RETURN_CALL','Ligação Retornada');
define('TEXT_FOLLOW_UP_CALL','Follow Up');
define('TEXT_NEW_LEAD','Novo Assunto');

// Address/contact identifiers
define('GEN_PRIMARY_NAME', 'Nome/Empresa');
define('GEN_EMPLOYEE_NAME', 'Nome Funcionário');
define('GEN_CONTACT', 'Atenção');
define('GEN_ADDRESS1', 'Endereço 1');
define('GEN_ADDRESS2', 'Endereço 2');
define('GEN_CITY_TOWN', 'Cidade');
define('GEN_STATE_PROVINCE', 'Estado');
define('GEN_POSTAL_CODE', 'CEP');
define('GEN_COUNTRY', 'País');
define('GEN_COUNTRY_CODE', 'Código ISO País');
define('GEN_FIRST_NAME','Nome');
define('GEN_MIDDLE_NAME','Segundo Nome');
define('GEN_LAST_NAME','Sobrenome');
define('GEN_TELEPHONE1', 'Telefone');
define('GEN_TELEPHONE2', 'Alt Telefone');
define('GEN_FAX','Fax');
define('GEN_TELEPHONE4', 'Celular');
define('GEN_ACCOUNT_ID', 'ID Conta');
define('GEN_CUSTOMER_ID', 'ID Cliente:');
define('GEN_VENDOR_ID', 'ID Fornecedor:');
define('ACT_ACCOUNT_NUMBER','ID Facebook');
define('ACT_ID_NUMBER','ID Twitter');
define('GEN_WEBSITE','Website');
define('GEN_ACCOUNT_LINK','Link Para Conta Funcionário');

// Targeted defines (to differentiate wording differences for different account types)
// Text specific to branch contacts
define('ACT_B_TYPE_NAME','Filiais');
define('ACT_B_HEADING_TITLE', 'Filiais');
define('ACT_B_SHORT_NAME', 'ID Filial');
define('ACT_B_FIRST_DATE','Data Criação: ');
define('ACT_B_PAGE_TITLE_EDIT','Editar Filial');

// Text specific to Customer contacts (default)
define('ACT_C_TYPE_NAME','Clientes');
define('ACT_C_HEADING_TITLE', 'Clientes');
define('ACT_C_SHORT_NAME', 'ID Cliente');
define('ACT_C_GL_ACCOUNT_TYPE','Conta Contábil Vendas');
define('ACT_C_ID_NUMBER','Número Licença Revendedor');
define('ACT_C_REP_ID','ID Representante Vendas');
define('ACT_C_ACCOUNT_NUMBER','Número Conta');
define('ACT_C_FIRST_DATE','Cliente Desde: ');
define('ACT_C_LAST_DATE1','Data Última Fatura: ');
define('ACT_C_LAST_DATE2','Data Último Pagamento: ');
define('ACT_C_PAGE_TITLE_EDIT','Editar Cliente');

// Text specific to Employee contacts
define('ACT_E_TYPE_NAME','Funcionários');
define('ACT_E_HEADING_TITLE', 'Funcionários');
define('ACT_E_SHORT_NAME', 'ID Funcionário');
define('ACT_E_GL_ACCOUNT_TYPE','Tipo Funcionário');
define('ACT_E_ID_NUMBER','CPF');
define('ACT_E_REP_ID','ID Departamento');
define('ACT_E_FIRST_DATE','Data Admissão: ');
define('ACT_E_LAST_DATE1','Data Último Aumento: ');
define('ACT_E_LAST_DATE2','Data Demissão: ');
define('ACT_E_PAGE_TITLE_EDIT','Editar Funcionário');

// Text specific to PhreeCRM
define('ACT_I_TYPE_NAME','Contatos');
define('ACT_I_HEADING_TITLE','PhreeCRM');
define('ACT_I_SHORT_NAME','Contato');
define('ACT_I_PAGE_TITLE_EDIT','Editar Contato');

// Text specific to Projects
define('ACT_J_TYPE_NAME','Projetos');
define('ACT_J_HEADING_TITLE', 'Projetos');
define('ACT_J_SHORT_NAME', 'ID Projeto');
define('ACT_J_ID_NUMBER','Referência PO');
define('ACT_J_REP_ID','ID Representante Vendas');
define('ACT_J_PAGE_TITLE_EDIT','Editar Projeto');
define('ACT_J_ACCOUNT_NUMBER','Dividir em Fases:');

// Text specific to Vendor contacts
define('ACT_V_TYPE_NAME','Fornecedores');
define('ACT_V_HEADING_TITLE', 'Fornecedores');
define('ACT_V_SHORT_NAME', 'ID Fornecedor');
define('ACT_V_GL_ACCOUNT_TYPE','Conta Contábil Compras');
define('ACT_V_ID_NUMBER','Federal EIN');
define('ACT_V_REP_ID','ID Representante Compras');
define('ACT_V_ACCOUNT_NUMBER','Número Conta');
define('ACT_V_FIRST_DATE','Fornecedor Desde: ');
define('ACT_V_LAST_DATE1','Data Última Fatura: ');
define('ACT_V_LAST_DATE2','Data Último Pagamento: ');
define('ACT_V_PAGE_TITLE_EDIT','Editar Fornecedor');

// Category headings
define('ACT_CATEGORY_CONTACT','Informação Contato');
define('ACT_CATEGORY_M_ADDRESS','Endereço Principal Correio');
define('ACT_CATEGORY_S_ADDRESS','Endereço Entrega');
define('ACT_CATEGORY_B_ADDRESS','Endereço Cobrança');
define('ACT_CATEGORY_P_ADDRESS','Informação Pagamento Cartão Crédito');
define('ACT_CATEGORY_PAYMENT_TERMS','Condições Pagamento');
define('TEXT_ADDRESS_BOOK','Livro Endereços');
define('TEXT_EMPLOYEE_ROLES','Direitos Funcionários');
define('ACT_ACT_HISTORY','Histórico Contas');
define('ACT_ORDER_HISTORY','Histórico Pedidos');
define('ACT_SO_HIST','Histórico Vendas ( %s Resultados Mais Recentes)');
define('ACT_PO_HIST','Histórico Compras ( %s Resultados Mais Recentes)');
define('ACT_INV_HIST','Histórico Faturamento ( %s Resultados Mais Recentes)');
define('ACT_SO_NUMBER','Venda Número');
define('ACT_PO_NUMBER','Compra Número');
define('ACT_INV_NUMBER','Fatura Número');
define('ACT_PAYMENT_MESSAGE','Entre a informação de pagamento a sere gravada no PhreeBooks.');
define('ACT_CARDHOLDER_NAME','Nome Cartão de Crédito');
define('ACT_PAYMENT_CREDIT_CARD_NUMBER','Número Cartão de Crédito');
define('ACT_PAYMENT_CREDIT_CARD_EXPIRES','Data Expiração Cartão de Crédito');
define('ACT_CARD_HINT','Card Hint');
define('ACT_EXP','Exp');
define('ACT_PAYMENT_CREDIT_CARD_CVV2','Código Segurança');

// Account Terms 
define('ACT_SPECIAL_TERMS','Condições Especiais');
define('ACT_TERMS_DUE','Condições (Vencimento)');
define('ACT_TERMS_DEFAULT','Padrão: ');
define('ACT_TERMS_USE_DEFAULTS', 'Usar Condição Padrão');
define('ACT_COD_SHORT','Contra Apresentação');
define('ACT_COD_LONG','Dinheiro na Entrega');
define('ACT_PREPAID','Pré-pago');
define('ACT_SPECIAL_TERMS', 'Vencimento em número de dias');
define('ACT_END_OF_MONTH','Vencimento no final do mês');
define('ACT_DAY_NEXT_MONTH','Vencimento em data específica');
define('ACT_DUE_ON', 'Vencimento em: ');
define('ACT_DISCOUNT', 'Desconto ');
define('ACT_EARLY_DISCOUNT', ' percentual ');
define('ACT_EARLY_DISCOUNT_SHORT', '% ');
define('ACT_DUE_IN','Vencimento em ');
define('ACT_TERMS_EARLY_DAYS', ' dia(s). ');

// Tradução Tem algo errado neste bloco 
// a tradução desliga a função de busca de cliente e retorno dos dados para a Ordem de Venda
define('ACT_TERMS_NET','Net ');

define('ACT_TERMS_STANDARD_DAYS', ' dia(s). ');
define('ACT_TERMS_CREDIT_LIMIT', 'Limite Crédito: ');
define('ACT_AMT_PAST_DUE','Valor Após Vencimento: ');

// misc information messages
define('RECORD_NUM_REF_ONLY','ID registro (Só para Referência) = ');
define('ACT_ID_AUTO_FILL','(Deixe em branco para geração de ID pelo sistema)');
define('ACT_WARN_DELETE_ADDRESS','Você tem certeza de que quer excluir este endereço?');
define('ACT_WARN_DELETE_ACCOUNT', 'Você tem certeza de que quer excluir esta conta?');
define('ACT_WARN_DELETE_PAYMENT', 'Você tem certeza de que quer excluir este registro de pagamento?');
define('ACT_ERROR_CANNOT_DELETE','Não é possível excluir este contato porque um registro de diário contém esta conta');
define('ACT_ERROR_CANNOT_DELETE_EMPLOYEE','Não é possível excluir este funcionário poruq eestá sendo utilizado por um usuário.');
define('ACT_ERROR_DUPLICATE_ACCOUNT','Esta ID de conta já existe no sistema, por favor entre uma nova ID.');
define('ACT_ERROR_ACCOUNT_NOT_FOUND','A conta que está procurando não pode ser encontrada!');
define('ACT_BILLING_MESSAGE','Estes campos não são necessários a não ser que um endereço de cobrança esteja sendo inserido.');
define('ACT_SHIPPING_MESSAGE','Estes campos não são necessários a não ser que um endereço de entrega esteja sendo inserido.');
define('ACT_NO_ENCRYPT_KEY_ENTERED','ATENÇÃO: A chave de criptografia não foi inserida. Informação de cartão de crédito não será mostrada e os valores digitados não serão gravados!');
define('ACT_PAYMENT_REF','Referência Pagamento');
define('ACT_LIST_OPEN_ORDERS','Ordens Compra em Aberto');
define('ACT_LIST_OPEN_INVOICES','Faturas em Aberto');
define('ACT_NO_KEY_EXISTS','Um pagamento foi espeficicado mas achave de criptografia não foi inserida. O endereço de pagamento foi gravado, mas a informação do pagamento não foi.');
define('ACT_ERROR_DUPLICATE_CONTACT','O ID de contato já existe no sistema, por favor entre um novo ID de contato.');
define('CRM_ROW_DELETE_ALERT','Você tem certeza de que quer excluir esta anotação de CRM?');

// java script errors
define('ACT_JS_SHORT_NAME', '* A entrada de \'ID\' não pode estar em branco.');

?>