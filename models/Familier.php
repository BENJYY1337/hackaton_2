<?php

class Familier
{
  private $_id_familier;
  private $_nom_familier;
  private $_vie_max_familier;
  private $_vie_familier;
  private $_force_familier;
  private $_niveau_familier;
  private $_photo_familier;


  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value) {
      $method = 'set_' . $key;
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }
  /**
   * Get the value of _id_familier
   */
  public function get_id_familier()
  {
    return $this->_id_familier;
  }

  /**
   * Set the value of _id_familier
   *
   * @return  self
   */
  public function set_id_familier($_id_familier)
  {
    $this->_id_familier = $_id_familier;

    return $this;
  }

  /**
   * Get the value of _nom_familier
   */
  public function get_nom_familier()
  {
    return $this->_nom_familier;
  }

  /**
   * Set the value of _nom_familier
   *
   * @return  self
   */
  public function set_nom_familier($_nom_familier)
  {
    $this->_nom_familier = $_nom_familier;

    return $this;
  }

  /**
   * Get the value of _vie_max_familier
   */
  public function get_vie_max_familier()
  {
    return $this->_vie_max_familier;
  }

  /**
   * Set the value of _vie_max_familier
   *
   * @return  self
   */
  public function set_vie_max_familier($_vie_max_familier)
  {
    $this->_vie_max_familier = $_vie_max_familier;

    return $this;
  }

  /**
   * Get the value of _vie_familier
   */
  public function get_vie_familier()
  {
    return $this->_vie_familier;
  }

  /**
   * Set the value of _vie_familier
   *
   * @return  self
   */
  public function set_vie_familier($_vie_familier)
  {
    $this->_vie_familier = $_vie_familier;

    return $this;
  }

  /**
   * Get the value of _force_familier
   */
  public function get_force_familier()
  {
    return $this->_force_familier;
  }

  /**
   * Set the value of _force_familier
   *
   * @return  self
   */
  public function set_force_familier($_force_familier)
  {
    $this->_force_familier = $_force_familier;

    return $this;
  }

  /**
   * Get the value of _niveau_familier
   */
  public function get_niveau_familier()
  {
    return $this->_niveau_familier;
  }

  /**
   * Set the value of _niveau_familier
   *
   * @return  self
   */
  public function set_niveau_familier($_niveau_familier)
  {
    $this->_niveau_familier = $_niveau_familier;

    return $this;
  }

  /**
   * Get the value of _photo_familier
   */
  public function get_photo_familier()
  {
    return $this->_photo_familier;
  }

  /**
   * Set the value of _photo_familier
   *
   * @return  self
   */
  public function set_photo_familier($_photo_familier)
  {
    $this->_photo_familier = $_photo_familier;

    return $this;
  }
}
