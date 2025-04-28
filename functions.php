<?php
// Funkcja dodająca piosenkę do bazy danych
function add_song($title, $link) {
  global $conn;
  $sql = "INSERT INTO songs (title, link) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $title, $link);
  $stmt->execute();
  $stmt->close();
}

// Funkcja zwiększająca liczbę głosów na piosenkę
function vote_up($id, $userID) {
  global $conn;
  $vote = "UPDATE users SET user_votes = user_votes - 1 WHERE id_user =" . $userID;
  $conn->query($vote);
  $sql = "UPDATE songs SET votes = votes + 1 WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $stmt->close();
}

// Funkcja zmniejszająca liczbę głosów na piosenkę
function vote_down($id, $userID) {
  global $conn;
  $vote = "UPDATE users SET user_votes = user_votes - 1 WHERE id_user =" . $userID;
  $conn->query($vote);
  $sql = "UPDATE songs SET votes = votes - 1 WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $stmt->close();
}

// Funkcja pobierająca listę piosenek z bazy danych
function get_songs() {
  global $conn;
  $sql = "SELECT * FROM songs ORDER BY votes DESC";
  $result = $conn->query($sql);
  $songs = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $songs[] = $row;
    }
  }
  return $songs;
}
?>