<?php
class Room{
  public $room_id;
  public $room_number;
  public $floor;
  public $beds;

  public function __construct($_room_id, $_room_number, $_floor, $_beds) {
    $this->room_id = $_room_id;
    $this->room_number = $_room_number;
    $this->floor = $_floor;
    $this->beds = $_beds;
  }

  public function getRoomData() {
    return [
      'id' => $this->room_id,
      'number' => $this->room_number,
      'floor' => $this->floor,
      'beds' => $this->beds,
    ];
  }
}
?>
