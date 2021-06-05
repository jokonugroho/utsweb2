<?php 
    Abstract class Contact
    {
        public $address, $email, $telepon, $sosmed;

        public function __construct($address = '', $email = '', $telepon = '', $sosmed = '')
        {
            $this->address = $address;
            $this->email = $email;
            $this->telepon = $telepon;
            $this->sosmed = $sosmed;
        }

        public function setAddress($address)
        {
            $this->address = $address;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function setTelepon($telepon)
        {
            $this->telepon = $telepon;
        }
        public function setSosmed($sosmed)
        {
            $this->sosmed = $sosmed;
        }

        public function getAddress()
        {
            return $this->address;
        }

        public function getEmail()
        {
            return $this->email;
        }
        public function getTelepon()
        {
            return $this->telepon;
        }
        public function getSosmed()
        {
            return $this->sosmed;
        }
    }

    class Contacts extends Contact
    {
        public function __construct($address = '', $email = '', $telepon = '', $sosmed = '')
        {
            parent::__construct($address, $email, $telepon, $sosmed);
        }
    }

    $cContacts = new Contacts('Kiaracondong, Bandung, Indonesia', 'jokonugroho150@gmail.com', '(+62) 89678839592', '@koynugroho');
?>

<h3 id="typing">Kontak</h3>
    <div class="col-3">
        <h4>Alamat</h4>
        <p><?php echo $cContacts->getAddress(); ?></p>
    </div>

    <div class="col-3">
        <h4>Email</h4>
        <p><?php echo $cContacts->getEmail(); ?></p>
    </div>

    <div class="col-3">
        <h4>Telepon</h4>
        <p><?php echo $cContacts->getTelepon(); ?></p>
    </div>

    <div class="col-3">
        <h4>Social Media</h4>
        <p><?php echo $cContacts->getSosmed(); ?></p>
</div>
