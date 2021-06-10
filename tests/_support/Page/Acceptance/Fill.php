<?php
namespace Page\Acceptance;

class Fill
{
    /**
     * Current url
     */
    public static $URL = '';

    
     /**
      * Selector of firstname field
      */
      public static $FirstName = "#firstName";
      /**
       * Selector of second name field
       */
      public static $LastName = "#lastName";
      /**
       * Selector of Email field
       */
      public static $Email = "#input_38";
      /**
       * Selector of Phone number field
       */
      public static $PhoneNumber = "#phoneNumber";
      /**
       * Selector of Street address line field
       */
      public static $Address = "#address";
      /**
       * Selector of Street address line 2 field
       */
      public static $Address2 = "#addr_line2";
      /**
       * Selector of City field
       */
      public static $City = "#city";
      /**
       * Selector of State/Province field
       */
      public static $State = "#state";
      /**
       * Selector of Postal/Zip Code field
       */
      public static $Postal = "#postal";
      /**
       * Selector of Registor button
       */
      public static $RegisterButton = "#input_36";
      /**
       * Selector of Credit card radio button in Payment Method
       */
      public static $CardRadioButton = "#input_32_paymentType_credit";
      /**
       * Selector of First Name field in Payment Method area
       */
      public static $FirstNameCard = "#input_32_cc_firstName";
      /**
       * Selector of Last Name field in Payment Method area
       */
      public static $LastNameCard = "#input_32_cc_lastName";
      /**
       * Selector of Credit Card Number
       */
      public static $CardNumber = "#input_32_cc_number";
      /**
       * Selector of Security Code
       */
      public static $SecurityCode = "#input_32_cc_ccv";
      /**
       * Selector of Expiration Month
       */
      public static $MonthCard = ".cc_exp_month";
      /**
       * Selector of Month in dropdown Expiration Month
       */
      public static $Month = "//*[@value = 'January']";
      /**
       * Selector of Year in dropdown Expiration Year
       */
      public static $Year = "//*[@value = '2024']";
      /**
       * Selector of Expiration Year
       */
      public static $YearCard = ".cc_exp_year";
      /**
       * Selector of Street Address in Billing Address section
       */
      public static $StreetAddress = "#input_32_addr_line1";
      /**
       * Selector of Street Address line 2 in Billing Address section
       */
      public static $StreetAddress2 = "#input_32_addr_line2";
      /**
       * Selector of City in Billing Address section
       */
      public static $CardCity = "#input_32_city";
      /**
       * Selector of State/Province in Billing Address section
       */
      public static $CardState = "#input_32_state";
      /**
       * Selector of Postal/Zip Code in Billing Address section
       */
      public static $CardPostal = "#input_32_postal";
      /**
       * Selector of Country dropdown in Billing Address section
       */
      public static $Country = ".form-address-country";
      /**
       * Selector of Kazakhstan in Country dropdown
       */
      public static $Kazakhstan = "//*[@value = 'Kazakhstan']";

}
