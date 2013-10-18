<?php
// +-----------------------------------------------------------------+
// |                   PhreeBooks Open Source ERP                    |
// +-----------------------------------------------------------------+
// | Copyright (c) 2008, 2009, 2010, 2011, 2012 PhreeSoft, LLC       |
// | http://www.PhreeSoft.com                                        |
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
//  Path: /modules/contacts/language/pt_br/admin.php
//

// Module information
define('MODULE_CONTACTS_TITLE','Módulo Contatos');
define('MODULE_CONTACTS_DESCRIPTION','O Módulo Contatos gerencia todos os clientes, fornecedores, funcionários, filiais e projetos utilizados no PhreeSoft Business Toolkit. <b>ATENÇÃO: Este é um módulo central e não deve ser removido!</b>');
// Headings
define('BOX_CONTACTS_ADMIN','Administração Contatos');
define('TEXT_BILLING_PREFS','Especificações Livro Endereços Faturamento');
// General
define('PB_PF_CONTACT_ID','ID Cliente');
define('PB_PF_TERMS_TO_LANGUAGE','Condições da Linguagem');
define('COST_TYPE_LBR','Mão Obra');
define('COST_TYPE_MAT','Materiais');
define('COST_TYPE_CNT','Empreiteiros');
define('COST_TYPE_EQT','Equipamento');
define('COST_TYPE_OTH','Outros');
define('TEXT_CUSTOMER','Cliente');
define('TEXT_VENDOR','Fornecedor');
define('TEXT_EMPLOYEE','Funcionário');
define('TEXT_CONTACT_TYPE','Tipo Contato');
define('NEXT_CUST_ID_NUM_DESC','Próxima ID Cliente');
define('NEXT_VEND_ID_NUM_DESC','Próxima ID Fornecedor');
/************************** (Address Book Defaults) ***********************************************/
define('CONTACT_BILL_FIELD_REQ', 'Campo obrigatório ou não: %s deve ser inserido para um novo endereço principal/faturamento (para fornecedores, clientes e funcionários)');
/************************** (Departments) ***********************************************/
define('HR_POPUP_WINDOW_TITLE','Departamentos');
define('HR_HEADING_SUBACCOUNT', 'Subdepartamento');
define('HR_EDIT_INTRO', 'Por favor, faça as alterações necessárias');
define('HR_ACCOUNT_ID', 'ID Departamento');
define('HR_INFO_SUBACCOUNT', 'Isto é um Departamento ou SubDepartamento?');
define('HR_INFO_PRIMARY_ACCT_ID', 'Sim, selecione também o departamento primário:');
define('HR_INFO_ACCOUNT_TYPE', 'Tipo Departamento');
define('HR_INFO_ACCOUNT_INACTIVE', 'Departamento Inativo');
define('HR_INFO_INSERT_INTRO', 'Por favor, entre o novo departamento com suas propriedades');
define('HR_INFO_NEW_ACCOUNT', 'Novo Departamento');
define('HR_INFO_EDIT_ACCOUNT', 'Alterar Departamento');
define('HR_INFO_DELETE_INTRO', 'Tem certeza de que quer remover este Departamento?');
define('HR_DEPARTMENT_REF_ERROR','O Departamento primário não pode ser o mesmo que o subdepartamento sendo gravado!');
define('HR_LOG_DEPARTMENTS','Departamentos - ');
/************************** (Department Types) ***********************************************/
define('SETUP_TITLE_DEPT_TYPES', 'Tipos Departamento');
define('SETUP_INFO_DEPT_TYPES_NAME', 'Nome Tipo Departamento');
define('SETUP_DEPT_TYPES_INSERT_INTRO', 'Por favor, entre o novo tipo de departamento');
define('SETUP_DEPT_TYPES_DELETE_INTRO', 'Tem certeza de que quer remover este Tipo de Departamento?');
define('SETUP_DEPT_TYPES_DELETE_ERROR','Não é possível remover este Tipo de Departamento, ele está em uso por um Departamento.');
define('SETUP_INFO_HEADING_NEW_DEPT_TYPES', 'Novo Tipo Departamento');
define('SETUP_INFO_HEADING_EDIT_DEPT_TYPES', 'Alterar Tipo Departamento');
define('SETUP_DEPT_TYPES_LOG','Dept Tipos - ');
/************************** (Project Costs) ***********************************************/
define('SETUP_TITLE_PROJECTS_COSTS', 'Custos Projetos');
define('TEXT_SHORT_NAME', 'Nome Curto');
define('TEXT_COST_TYPE', 'Tipo Custo');
define('SETUP_INFO_DESC_SHORT', 'Descrição Curta (16 car max)');
define('SETUP_INFO_DESC_LONG', 'Descrição Longa (64 car max)');
define('SETUP_PROJECT_COSTS_INSERT_INTRO', 'Por favor, entre o novo custo de projeto com suas propriedades');
define('SETUP_PROJECT_COSTS_DELETE_INTRO', 'Tem certeza de que quer remover este custo de projeto?');
define('SETUP_INFO_HEADING_NEW_PROJECT_COSTS', 'Novo Custo Projeto');
define('SETUP_INFO_HEADING_EDIT_PROJECT_COSTS', 'Alterar Custo Projeto');
define('SETUP_INFO_COST_TYPE','Tipo Custo');
define('SETUP_PROJECT_COSTS_LOG','Custos Projeto - ');
define('SETUP_PROJECT_COSTS_DELETE_ERROR','Não é possível remover este custo de projeto, ele está em uso em um lançamento de diário.');
/************************** (Project Phases) ***********************************************/
define('SETUP_TITLE_PROJECTS_PHASES', 'Fases Projeto');
define('TEXT_COST_BREAKDOWN', 'Detalhamento Custos');
define('SETUP_INFO_COST_BREAKDOWN', 'Usar Detalhamento Custos para esta fase?');
define('SETUP_PROJECT_PHASES_INSERT_INTRO', 'Por favor, entre a nova fase de projeto com suas propriedades');
define('SETUP_PROJECT_PHASES_DELETE_INTRO', 'Tem certeza de que quer remover esta fase de projeto?');
define('SETUP_INFO_HEADING_NEW_PROJECT_PHASES', 'Nova Fase Projeto');
define('SETUP_INFO_HEADING_EDIT_PROJECT_PHASES', 'Alterar Fase Projeto');
define('SETUP_PROJECT_PHASESS_LOG','Fases Projeto - ');
define('SETUP_PROJECT_PHASESS_DELETE_ERROR','Não é possível remover esta fase de projeto, ela está em uso em um lançamento de diário.');

?>