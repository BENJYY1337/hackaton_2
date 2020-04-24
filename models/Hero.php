<?php 

class Hero {

    private $_id_heros;
    private $_nom_heros;
    private $_vie_max_heros;
    private $_vie_heros;
    private $_force_heros;
    private $_niveau_heros;
    private $_photo_heros;
    private $_createdAt;


    public function __construct(){
        
    
    }
    

public function hydrate(array $donnees)
    {
            foreach ($donnees as $key => $value) {
                    $method = 'set_'. $key;
                    if (method_exists($this, $method)) {
                            $this->$method($value);
                    }
            }
    }


// GETTER & SETTER

    /**
     * Get the value of _id_heros
     */ 
    public function get_id_heros()
    {
        return $this->_id_heros;
    }

    /**
     * Set the value of _id_heros
     *
     * @return  self
     */ 
    public function set_id_heros($_id_heros)
    {
        $this->_id_heros = $_id_heros;

        return $this;
    }

    /**
     * Get the value of _nom_heros
     */ 
    public function get_nom_heros()
    {
        return $this->_nom_heros;
    }

    /**
     * Set the value of _nom_heros
     *
     * @return  self
     */ 
    public function set_nom_heros($_nom_heros)
    {
        $this->_nom_heros = $_nom_heros;

        return $this;
    }

    /**
     * Get the value of _vie_max_heros
     */ 
    public function get_vie_max_heros()
    {
        return $this->_vie_max_heros;
    }

    /**
     * Set the value of _vie_max_heros
     *
     * @return  self
     */ 
    public function set_vie_max_heros($_vie_max_heros)
    {
        $this->_vie_max_heros = $_vie_max_heros;

        return $this;
    }

    /**
     * Get the value of _vie_heros
     */ 
    public function get_vie_heros()
    {
        return $this->_vie_heros;
    }

    /**
     * Set the value of _vie_heros
     *
     * @return  self
     */ 
    public function set_vie_heros($_vie_heros)
    {
        $this->_vie_heros = $_vie_heros;

        return $this;
    }

    /**
     * Get the value of _force_heros
     */ 
    public function get_force_heros()
    {
        return $this->_force_heros;
    }

    /**
     * Set the value of _force_heros
     *
     * @return  self
     */ 
    public function set_force_heros($_force_heros)
    {
        $this->_force_heros = $_force_heros;

        return $this;
    }

    /**
     * Get the value of _niveau_heros
     */ 
    public function get_niveau_heros()
    {
        return $this->_niveau_heros;
    }

    /**
     * Set the value of _niveau_heros
     *
     * @return  self
     */ 
    public function set_niveau_heros($_niveau_heros)
    {
        $this->_niveau_heros = $_niveau_heros;

        return $this;
    }

    /**
     * Get the value of _photo_heros
     */ 
    public function get_photo_heros()
    {
        return $this->_photo_heros;
    }

    /**
     * Set the value of _photo_heros
     *
     * @return  self
     */ 
    public function set_photo_heros($_photo_heros)
    {
        $this->_photo_heros = $_photo_heros;

        return $this;
    }

    /**
     * Get the value of _createdAt
     */ 
    public function get_createdAt()
    {
        return $this->_createdAt;
    }

    /**
     * Set the value of _createdAt
     *
     * @return  self
     */ 
    public function set_createdAt($_createdAt)
    {
        $this->_createdAt = $_createdAt;

        return $this;
    }
}


