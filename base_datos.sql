/*
Created		29/06/2014
Modified		09/07/2014
Project		
Model		
Company		
Author		
Version		
Database		mySQL 5 
*/


drop table IF EXISTS `events_registration_types`;
drop table IF EXISTS `registration_types`;
drop table IF EXISTS `committees_events_people`;
drop table IF EXISTS `committees_events`;
drop table IF EXISTS `committees`;
drop table IF EXISTS `authorizations_users`;
drop table IF EXISTS `authorizations`;
drop table IF EXISTS `events_hotels`;
drop table IF EXISTS `hotels`;
drop table IF EXISTS `input_states`;
drop table IF EXISTS `role_companies`;
drop table IF EXISTS `companies_events`;
drop table IF EXISTS `locations`;
drop table IF EXISTS `event_types`;
drop table IF EXISTS `stages`;
drop table IF EXISTS `shelves`;
drop table IF EXISTS `delivery_methods_inputs`;
drop table IF EXISTS `delivery_methods`;
drop table IF EXISTS `activities_inputs`;
drop table IF EXISTS `inputs`;
drop table IF EXISTS `events_payments`;
drop table IF EXISTS `payments`;
drop table IF EXISTS `activities`;
drop table IF EXISTS `events`;
drop table IF EXISTS `type_users`;
drop table IF EXISTS `users`;
drop table IF EXISTS `countries`;
drop table IF EXISTS `departments`;
drop table IF EXISTS `cities`;
drop table IF EXISTS `companies`;
drop table IF EXISTS `document_types`;
drop table IF EXISTS `people`;


Create table `people` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`document_type_id` Int NOT NULL,
	`city_id` Int NOT NULL,
	`pers_documento` Varchar(20) NOT NULL,
	`pers_primNombre` Varchar(20) NOT NULL,
	`pers_segNombre` Varchar(20),
	`pers_primApellido` Varchar(20) NOT NULL,
	`pers_segApellido` Varchar(20),
	`pers_direccion` Varchar(20),
	`pers_barrio` Varchar(20),
	`pers_telefono` Decimal(10,0),
	`pers_celular` Decimal(10,0),
	`pers_fechNacimiento` Date,
	`pers_tipoSangre` Varchar(20),
	`pers_mail` Varchar(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `document_types` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`tido_descripcion` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `companies` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`person_id` Int NOT NULL,
	`city_id` Int NOT NULL,
	`empr_nit` Varchar(20) NOT NULL,
	`empr_nombre` Varchar(20),
	`empr_telefono` Decimal(10,0),
	`empr_mail` Varchar(20),
	`empr_direccion` Varchar(20),
	`empr_barrio` Varchar(20),
	`empr_pagiWeb` Varchar(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `cities` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`department_id` Int NOT NULL,
	`nombre` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `departments` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`country_id` Int NOT NULL,
	`nombre` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `countries` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`nombre` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `users` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`usuario` Varchar(20),
	`password` Varchar(20),
	`estado` Bool,
	`person_id` Int NOT NULL,
	`type_user_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `type_users` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`descripcion` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `events` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`stage_id` Int NOT NULL,
	`event_type_id` Int NOT NULL,
	`even_nombre` Varchar(20) NOT NULL,
	`even_numeResolucion` Varchar(20) NOT NULL,
	`even_palaClave` Varbinary(20) NOT NULL,
	`even_observaciones` Varbinary(20),
	`even_estado` Bool,
	`even_imagen1` Varchar(20) NOT NULL,
	`even_imagen2` Varchar(20),
	`even_fechInicio` Date NOT NULL,
	`even_fechFinal` Date NOT NULL,
	`even_publicar` Bool NOT NULL,
	`even_codigo` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `activities` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`event_id` Int NOT NULL,
	`shelf_id` Int NOT NULL,
	`func_nombre` Varchar(20) NOT NULL,
	`func_fechInicio` Date NOT NULL,
	`func_fechFinal` Date NOT NULL,
	`func_cortesia` Bool NOT NULL,
	`func_estado` Varchar(20) NOT NULL,
	`func_imagen` Varchar(20) NOT NULL,
	`func_palaClaves` Varbinary(20) NOT NULL,
	`func_cantEntradas` Decimal(10,0) NOT NULL,
	`func_cantAlerta` Decimal(10,0) NOT NULL,
	`func_codigo` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `payments` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`mepa_descripcion` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `events_payments` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`payment_id` Int NOT NULL,
	`event_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `inputs` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`input_state_id` Int NOT NULL,
	`person_id` Int NOT NULL,
	`entr_imagen` Varchar(20) NOT NULL,
	`entr_titulo` Varchar(20) NOT NULL,
	`entr_fuenTitulo` Varchar(20) NOT NULL,
	`entr_tamaTitulo` Decimal(10,0) NOT NULL,
	`entr_fecha` Date NOT NULL,
	`entr_fuenFecha` Varchar(20) NOT NULL,
	`entr_tamaFecha` Decimal(10,0) NOT NULL,
	`entr_fuenCliente` Varchar(20) NOT NULL,
	`entr_tamaCliente` Decimal(10,0) NOT NULL,
	`entr_direccion` Varchar(20) NOT NULL,
	`entr_fuenDireccion` Varchar(20) NOT NULL,
	`entr_tamaDireccion` Decimal(10,0) NOT NULL,
	`entr_codigo` Varchar(20) NOT NULL,
	`entr_identificador` Char(20),
	`entr_impreso` Bool,
	`events_registration_type_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `activities_inputs` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`activity_id` Int NOT NULL,
	`input_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `delivery_methods` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`descripcion` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `delivery_methods_inputs` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`delivery_method_id` Int NOT NULL,
	`input_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `shelves` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`location_id` Int NOT NULL,
	`esta_nombre` Varchar(20) NOT NULL,
	`esta_estado` Varchar(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `stages` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`city_id` Int NOT NULL,
	`esce_nombre` Varchar(20) NOT NULL,
	`esce_direccion` Varchar(20),
	`esce_telefono` Decimal(10,0),
	`esce_mapa` Varchar(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `event_types` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`nombre` Varchar(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `locations` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`loca_nombre` Char(20) NOT NULL,
	`stage_id` Int NOT NULL,
	`parent_id` Int NOT NULL,
	`loca_fila` Char(20),
	`loca_colomnna` Char(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `companies_events` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`company_id` Int NOT NULL,
	`event_id` Int NOT NULL,
	`role_company_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `role_companies` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`nombre` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `input_states` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`nombre` Varchar(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `hotels` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`hote_nombre` Varchar(20) NOT NULL,
	`hote_mit` Varchar(20),
	`hote_direccion` Varchar(20),
	`hote_telefono` Decimal(10,0),
	`hote_email` Varchar(20),
	`hote_pagiWeb` Varchar(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `events_hotels` (
	`id` Char(20) NOT NULL,
	`event_id` Int NOT NULL,
	`hotel_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `authorizations` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`nombre` Varbinary(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `authorizations_users` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`user_id` Int NOT NULL,
	`authorization_id` Int NOT NULL,
	`estado` Bool,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `committees` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`nombre` Varbinary(20),
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `committees_events` (
	`id` Char(20) NOT NULL,
	`committee_id` Int NOT NULL,
	`event_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `committees_events_people` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`person_id` Int NOT NULL,
	`committees_event_id` Char(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `registration_types` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`nombre` Char(20) NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;

Create table `events_registration_types` (
	`id` Int NOT NULL AUTO_INCREMENT,
	`registration_type_id` Int NOT NULL,
	`event_id` Int NOT NULL,
 Primary Key (`id`)) ENGINE = MyISAM;


