<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from uk.co.compucorp.civicrm.booking/xml/schema/CRM/Booking/Payment.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:5fd9434c5b62963cfcd634e7c85435ce)
 */
use CRM_Booking_ExtensionUtil as E;

/**
 * Database access object for the Payment entity.
 */
class CRM_Booking_DAO_Payment extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_booking_payment';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * @var int
   */
  public $id;

  /**
   * Foreign key to the booking id for this payment.
   *
   * @var int
   */
  public $booking_id;

  /**
   * Foreign key to the contribution for this payment.
   *
   * @var int
   */
  public $contribution_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_booking_payment';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Payments') : E::ts('Payment');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'booking_id', 'civicrm_booking', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contribution_id', 'civicrm_contribution', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('ID'),
          'required' => TRUE,
          'where' => 'civicrm_booking_payment.id',
          'table_name' => 'civicrm_booking_payment',
          'entity' => 'Payment',
          'bao' => 'CRM_Booking_DAO_Payment',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'booking_id' => [
          'name' => 'booking_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Booking ID'),
          'description' => E::ts('Foreign key to the booking id for this payment.'),
          'required' => TRUE,
          'where' => 'civicrm_booking_payment.booking_id',
          'table_name' => 'civicrm_booking_payment',
          'entity' => 'Payment',
          'bao' => 'CRM_Booking_DAO_Payment',
          'localizable' => 0,
          'FKClassName' => 'CRM_Booking_DAO_Booking',
          'add' => '2.0',
        ],
        'contribution_id' => [
          'name' => 'contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Contribution ID'),
          'description' => E::ts('Foreign key to the contribution for this payment.'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_booking_payment.contribution_id',
          'export' => TRUE,
          'table_name' => 'civicrm_booking_payment',
          'entity' => 'Payment',
          'bao' => 'CRM_Booking_DAO_Payment',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_Contribution',
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'booking_payment', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'booking_payment', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
