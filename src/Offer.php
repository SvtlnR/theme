<?
class Offer{
	private $inst;
	public function __construct($con){
		$this->inst=$con;
	}
	public function addOffer($em,$cm,$filename){
		$s = $this->inst->prepare('INSERT INTO offers_table (email, comment, file) values (:em,:cm, :filename)');
		$s->bindParam(':em', $em);
		$s->bindParam(':cm', $cm);
		$s->bindParam(':filename', $filename);
		$s->execute();
		TlgNotific::sendNotif($em,$cm,$filename);
	}
}