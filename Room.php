<?php
class Room {
  private $room_id;
  private $room_number;
  private $floor;
  private $beds;

  public function __construct($_room_id, $_room_number, $_floor, $_beds) {
    $this->room_id = $_room_id;
    $this->room_number = $_room_number;
    $this->floor = $_floor;
    $this->beds = $_beds;
  };

  public getRoomData() {
    return [
      'id' = $this->room_id,
      'number' = $this->room_number,
      'floor' = $this->floor,
      'beds' = $this->beds,
    ]
  };
}

?>
