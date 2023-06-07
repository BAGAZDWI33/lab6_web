<?php
/**
 * Class Form
 * Untuk membuat form HTML
 */
class Form {
  private $fields = array(); // Menampung field dari form
  private $action; // Menampung URL untuk form action
  private $title; // Menampung title form

  /**
   * Form constructor.
   * @param string $action
   * @param string $title
   */
  public function __construct($action = '', $title = '') {
    $this->action = $action;
    $this->title = $title;
  }

  /**
   * Menambahkan field ke dalam form
   * @param string $name
   * @param string $label
   */
  public function addField($name, $label) {
    $this->fields[] = array('name' => $name, 'label' => $label);
  }

  /**
   * Membuat HTML untuk menampilkan form
   */
  public function displayForm() {
    echo "<form action='" . $this->action . "' method='post'>";
    echo "<fieldset>";
    echo "<legend>" . $this->title . "</legend>";
    foreach ($this->fields as $field) {
      echo "<label for='" . $field['name'] . "'>" . $field['label'] . "</label>";
      echo "<input type='text' name='" . $field['name'] . "' id='" . $field['name'] . "'><br>";
    }
    echo "<input type='submit' name='submit' value='Submit'>";
    echo "</fieldset>";
    echo "</form>";
  }
}
?>
