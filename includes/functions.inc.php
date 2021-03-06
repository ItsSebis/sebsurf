<?php

//##############################################################################

function invalidName($name) {
  if (strpos($name, "<") !== false || strpos($name, ">") !== false) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

//##############################################################################

function invalidNick($nick) {
  if (strpos($nick, "<") !== false || strpos($nick, ">") !== false) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

//##############################################################################

function pwMatch($pw, $pwrepeat) {
  if ($pw !== $pwrepeat) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

//##############################################################################

function serviceData($con, $id) {
  $sql = "SELECT * FROM services WHERE id = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $id);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function serviceDataByIndex($con, $index) {
  $sql = "SELECT * FROM services WHERE `index` = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $index);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function dataData($con, $id) {
  $sql = "SELECT * FROM data WHERE id = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $id);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }

}

//##############################################################################

function notifyData($con, $id) {
  $sql = "SELECT * FROM notifications WHERE id = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function requestDataByName($con, $name) {
  $sql = "SELECT * FROM teamrequests WHERE teamname = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function requestData($con, $id) {
  $sql = "SELECT * FROM teamrequests WHERE id = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function teamDataByName($con, $name) {
  $sql = "SELECT * FROM teams WHERE name = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function teamData($con, $id) {
  $sql = "SELECT * FROM teams WHERE id = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $id);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function roleData($con, $roleid) {
  $sql = "SELECT * FROM roles WHERE gid = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $roleid);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function userData($con, $name) {
  $sql = "SELECT * FROM users WHERE account = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function userDataById($con, $id) {
  $sql = "SELECT * FROM users WHERE id = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function groupData($con, $acc) {
  $sql = "SELECT * FROM groups WHERE account = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $acc);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function groupDataById($con, $id) {
  $sql = "SELECT * FROM groups WHERE id = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function createGroup($con, $account, $name, $user) {
  $data = userData($con, $user);
  $sql = "INSERT INTO groups (account, name, createdby) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../profile.php?error=error");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sss", $account, $name, $data["id"]);
  if (!mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header("location: ../profile.php?error=error");
    exit();
  }
  mysqli_stmt_close($stmt);
}

//##############################################################################

function delGroup($con, $gid) {
  $qry = "DELETE FROM groups WHERE id=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $gid);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//##############################################################################

function createData($con, $name, $user, $lessons, $date, $team) {
  $sql = "INSERT INTO data (edate, `name`, account, lessons, team) VALUES (?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../profile.php?error=error");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sssis", $date, $name, $user, $lessons, $team);
  if (!mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header("location: ../profile.php?error=error");
    exit();
  }
  mysqli_stmt_close($stmt);

  header("location: ../profile.php?error=dataadded&name=".$name);
  exit();
}

//##############################################################################

function deleteNews($con, $id) {
  $qry = "DELETE FROM news WHERE id=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function editNews($con, $news, $power=0) {
  $sql = "INSERT INTO news (`publisher`, `news`, `power`) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sss", $_SESSION["username"], $news, $power);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../admin.php?error=edited&page=news");
  exit();
}

//##############################################################################

function createVersion($con, $version, $des) {
  $sql = "INSERT INTO versions (`updater`, `version`, `actions`) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sss", $_SESSION["username"], $version, $des);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../admin.php?error=addedupdate&page=updates&v=".$version);
  exit();
}

//##############################################################################

function createRole($con, $id, $name, $user, $power) {
  $sql = "INSERT INTO roles (gid, name, createdby, `power`) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "issi", $id, $name, $user, $power);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function createUser($con, $role, $full) {

  $space = " ";
  $name = str_replace($space, ".", $full);

  $name = strtolower($name);

  if (strlen($name) > 64) {
    header("location: ../admin.php?error=charlimitreached");
    exit();
  }

  $sql = "INSERT INTO users (account, usrpw, `role`, `fullname`) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  $hashedPwd = password_hash($name, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $hashedPwd, $role, $full);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  #logUserCreate($con, $admin, $name);

  header("location: ../admin.php?error=usrcreated&page=users&usr=".$name);
  exit();

}

//##############################################################################

function loginUser($con, $name, $pw) {
  $nameExists = userData($con, $name);

  if ($nameExists === false) {
    header("location: ../log-in.php?error=wrongid");
    exit();
  }

  $pwHashed = $nameExists["usrpw"];

  $checkPw = password_verify($pw, $pwHashed);

  if ($nameExists["disabled"] == 1) {
    header("location: ../log-in.php?error=disabled");
    exit();
  }
  if ($checkPw === false) {
    header("location: ../log-in.php?error=wrongpw");
    exit();
  }
  else session_start();
  $_SESSION["userid"] = $nameExists["id"];
  $_SESSION["username"] = $nameExists["account"];
  if (empty($nameExists["nick"])) {
    $_SESSION["nick"] = $nameExists["fullname"];
  } else {
    $_SESSION["nick"] = $nameExists["nick"];
  }
  $_SESSION["admin"] = isAdmin($con, $name);
  $_SESSION["adminentry"] = false;
  updateUserLessons($con, $name);
      #logUserLogin($con, $name);
  header("location: ../?error=0");
  exit();

}

//##############################################################################

function getUserPower($con, $name) {
  $sql = "SELECT role FROM users WHERE account = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
      return getRole($con, $row["role"])["power"];
  }
  else {
      return false;
  }
}

//##############################################################################

function isAdmin($con, $name) {
  $sql = "SELECT role FROM users WHERE account = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    $admin = getRole($con, $row["role"])["power"];
    return $admin >= 100;
  }
  else {
      return false;
  }
}

//##############################################################################

function getRole($con, $id) {
  $sql = "SELECT * FROM roles WHERE gid = ?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $id);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function adminPwMatch($con, $name, $pwGiven) {
  $pwHashed = userData($con, $name)["usrpw"];
  return password_verify($pwGiven, $pwHashed);
}

//##############################################################################

function emptyInputLogin($name, $pw) {
  if (empty($name) || empty($pw)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

//##############################################################################

function userList($con) {
  $sql = "SELECT * FROM users ORDER BY `role` ASC, `disabled` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '<select name="user" id="users" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
    echo '<option value="null">W??hle einen Benutzer...</option>';
    while ($row = $rs->fetch_assoc()) {
      if ($row["role"] != 0 || getUserPower($con, $_SESSION["username"]) > 127) {
        echo '
          <option value="'.$row["account"].'">'.$row["fullname"].'</option>
        ';
      }
    }
    echo '
    </select><br>';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function userListNotInGroup($con, $gid) {
  $sql = "SELECT * FROM users ORDER BY `fullname` ASC, `role` ASC, `disabled` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  echo '<select name="user" id="users" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
  echo '<option value="null">W??hle einen Benutzer...</option>';
  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      if (($row["role"] != 0 || getUserPower($con, $_SESSION["username"]) > 127) && !in_array($row["id"], grouperArray($con, $gid))) {
        echo '
          <option value="'.$row["account"].'">'.$row["fullname"].'</option>
        ';
      }
    }
  }
  echo '
  </select><br>';

  mysqli_stmt_close($stmt);

}

//##############################################################################

function teamsListMember($con, $user) {
  $sql = "SELECT * FROM teams ORDER BY `name` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  echo '<select name="team" id="teams" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
  echo '<option value="null">W??hle ein Team...</option>';
  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      if (in_array($user, teamArray($con, $row["id"]))) {
        echo '
          <option value="'.$row["id"].'">'.$row["name"].'</option>
        ';
      }
    }
  }
  echo '
  </select><br>';

  mysqli_stmt_close($stmt);

}

//##############################################################################

function teamsListLeader($con) {
  $sql = "SELECT * FROM teams ORDER BY `name` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  echo '<select name="team" id="teams" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
  echo '<option value="null">W??hle ein Team...</option>';
  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      if (isTeamLeaderOfTeam($con, $_SESSION["username"], $row["id"])) {
        echo '
            <option value="'.$row["id"].'">'.$row["name"].'</option>
        ';
      }
    }
  }
  echo '
  </select><br>';

  mysqli_stmt_close($stmt);

}

//##############################################################################

function teamsList($con) {
  $sql = "SELECT * FROM teams ORDER BY `name` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  echo '<select name="team" id="teams" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
  echo '<option value="null">W??hle ein Team...</option>';
  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      echo '
          <option value="'.$row["id"].'">'.$row["name"].'</option>
      ';
    }
  }
  echo '
  </select><br>';

  mysqli_stmt_close($stmt);

}

//##############################################################################

function servicesListTeam($con, $teamid) {
  $sql = "SELECT * FROM services ORDER BY `index` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    $data = teamData($con, $teamid);
    echo '<select name="service" id="services" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: fit-content; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
    echo '<option value="'.serviceData($con, $data["service"])["id"].'">'.serviceData($con, $data["service"])["name"].'</option>';
    while ($row = $rs->fetch_assoc()) {
      if ($row["id"] != serviceData($con, $data["service"])["id"]) {
        echo '
          <option value="'.$row["id"].'">'.$row["name"].'</option>
        ';
      }
    }
    echo '
    </select><br>';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function userActiveList($con, $user) {
  $sql = "SELECT * FROM users WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $user);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($row = $rs->fetch_assoc()) {
    echo '<select name="disabled" id="disabled" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
      if ($row["disabled"] == 1) {
        echo '
            <option value="1">Inactive</option>
        ';
        echo '
            <option value="0">Active</option>
        ';
      } else {
        echo '
            <option value="0">Active</option>
        ';
        echo '
            <option value="1">Inactive</option>
        ';
      }
    echo '
    </select><br>';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function rolesListUser($con, $user) {
  $sql = "SELECT * FROM roles ORDER BY `power` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '<select name="role" id="roles" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
    echo '<option value="null">'.roleData($con, userData($con, $user)["role"])["name"].'</option>';
    while ($row = $rs->fetch_assoc()) {
      if (($row["gid"] != 0 || getUserPower($con, $_SESSION["username"]) > 127) && $row["gid"] != userData($con, $user)["role"]) {
        echo '
            <option value="'.$row["gid"].'">'.$row["name"].'</option>
        ';
      }
    }
    echo '
    </select><br>';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function rolesList($con) {
  $sql = "SELECT * FROM roles ORDER BY `power` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '<select name="role" id="roles" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
    echo '<option value="null">W??hle eine Rolle...</option>';
    while ($row = $rs->fetch_assoc()) {
      if ($row["gid"] != 0 || getUserPower($con, $_SESSION["username"]) > 127) {
        echo '
            <option value="'.$row["gid"].'">'.$row["name"].'</option>
        ';
      }
    }
    echo '
    </select><br>';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function servicesList($con) {
  $sql = "SELECT * FROM services ORDER BY `index` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  echo '<select name="service" id="services" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
  echo '<option value="null">W??hle einen Dienstbereich...</option>';
  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      echo '
        <option value="'.$row["id"].'">'.$row["name"].'</option>
      ';
    }
  }
  echo '
  </select><br>';

  mysqli_stmt_close($stmt);

}

//##############################################################################
/*
function groupsList($con) {
  $sql = "SELECT * FROM groups ORDER BY `name` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  echo '<select name="group" id="groups" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
  echo '<option value="null">W??hle eine Rolle...</option>';
  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      echo '
        <option value="'.$row["id"].'">'.$row["name"].'</option>
      ';
    }
  }
  echo '
  </select><br>';

  mysqli_stmt_close($stmt);
}
*/
//##############################################################################

/*function groupsListWithMembers($con) {
  $sql = "SELECT * FROM groups ORDER BY `name` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  echo '<select name="group" id="groups" style="background-color: #303030; outline: none; color: white; border: solid #333333; border-radius: 24px; width: 350px; height: 70px; padding: 14px 10px; transition: 0.2s; font-size: larger;">';
  echo '<option value="null">W??hle eine Gruppe...</option>';
  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      if (count(grouperArray($con, $row["id"]))>0) {
        echo '
          <option value="'.$row["id"].'">'.$row["name"].'</option>
        ';
      }
    }
  }
  echo '
  </select><br>';

  mysqli_stmt_close($stmt);
}*/

//##############################################################################

function isTeamLeaderOfTeam($con, $user, $teamid) {
  $sql = "SELECT * FROM teamer WHERE usrname=? AND teamid=? ORDER BY `teamid` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "si", $user, $teamid);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    $leader = false;
    while ($row = $rs->fetch_assoc()) {
      if ($row["leader"] === 1) {
        $leader = true;
      }
    }
    return $leader;
  } else {
    return false;
  }
}

//##############################################################################

function isTeamLeader($con, $user) {
  $sql = "SELECT * FROM teamer WHERE usrname=? ORDER BY `teamid` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $user);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    $leader = false;
    while ($row = $rs->fetch_assoc()) {
      if ($row["leader"] === 1) {
        $leader = true;
      }
    }
    return $leader;
  } else {
    return false;
  }
}

//##############################################################################

function datasUserArray($con, $user) {
    $sql = "SELECT * FROM `data` WHERE account=? ORDER BY `edate` ASC;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: index.php?error=1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $rs = mysqli_stmt_get_result($stmt);

    $teamer = array();

    while ($row = $rs->fetch_assoc()) {
        $teamer[] = $row;
    }
    // in_array($needle, $array) for isTeamerOfTeam
    return $teamer;
}

//##############################################################################

function serviceArray($con) {
    $sql = "SELECT * FROM services ORDER BY `index` ASC;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: index.php?error=1");
        exit();
    }

    mysqli_stmt_execute($stmt);
    $rs = mysqli_stmt_get_result($stmt);

    $teamer = array();

    while ($row = $rs->fetch_assoc()) {
        $teamer[] = $row;
    }
    // in_array($needle, $array) for isTeamerOfTeam
    return $teamer;
}

//##############################################################################

function teamArray($con, $teamid) {
  $sql = "SELECT * FROM teamer WHERE teamid=? ORDER BY `leader` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $teamid);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  $teamer = array();

  while ($row = $rs->fetch_assoc()) {
    $teamer[] = $row["usrname"];
  }
  // in_array($needle, $array) for isTeamerOfTeam
  return $teamer;
}

//##############################################################################

function usersTeamsArray($con, $user) {
  $sql = "SELECT * FROM teamer WHERE usrname=? ORDER BY `leader` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $user);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  $teamer = array();

  while ($row = $rs->fetch_assoc()) {
    $teamer[] = $row["teamid"];
  }
  // in_array($needle, $array) for isTeamerOfTeam
  return $teamer;
}

//##############################################################################

function usersArray($con) {
  $sql = "SELECT * FROM users ORDER BY `fullname` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  $users = array();

  while ($row = $rs->fetch_assoc()) {
    $users[] = $row["account"];
  }
  // in_array($needle, $array) for isTeamerOfTeam
  return $users;
}

//##############################################################################

function usersLeaderTeamsArray($con, $user) {
  $sql = "SELECT * FROM teamer WHERE usrname=? AND leader=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  $yes = 1;

  mysqli_stmt_bind_param($stmt, "ss", $user, $yes);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  $teamer = array();

  while ($row = $rs->fetch_assoc()) {
    $teamer[] = $row["teamid"];
  }
  // in_array($needle, $array) for isTeamerOfTeam
  return $teamer;
}

//##############################################################################

function teamDataArray($con, $teamid) {
  $sql = "SELECT * FROM data WHERE team=? ORDER BY `edate` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $teamid);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  $teamer = array();

  while ($row = $rs->fetch_assoc()) {
    $teamer[] = $row["id"];
  }
  // in_array($needle, $array) for isTeamerOfTeam
  return $teamer;
}

//##############################################################################

function grouperArray($con, $gid) {
  $sql = "SELECT * FROM grouper WHERE gid=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $gid);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  $grouper = array();

  while ($row = $rs->fetch_assoc()) {
    $grouper[] = $row["usrid"];
  }
  // in_array($needle, $array) for isMemberOfGroup
  return $grouper;
}

//##############################################################################

function usersGroupsArray($con, $user) {
  $sql = "SELECT * FROM grouper WHERE usrid=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $user);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  $grouper = array();

  while ($row = $rs->fetch_assoc()) {
    $grouper[] = $row["gid"];
  }
  // in_array($needle, $array) for isMemberOfGroup
  return $grouper;
}

//##############################################################################

function groupTable($con, $gid) {
  $sql = "SELECT * FROM users ORDER BY `account` ASC, `role` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    if (count(grouperArray($con, $gid))>0) {
      echo '
      <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
      <thead>
        <tr>
          <th style="padding-left: 10px; padding-right: 10px;">Name</th>
          <th style="padding-left: 10px; padding-right: 10px;">Rolle</th>
          <th style="padding-left: 10px; padding-right: 10px;">Aktiv</th>
        </tr>
      </thead>
      <tbody>
      ';
      while ($row = $rs->fetch_assoc()) {
        if ($row["account"] != "root" && in_array($row["id"], grouperArray($con, $gid))) {
          if ($row["disabled"] == 1) {
            $active = "<td style='border: 2px solid black; color: red'>Nein</td>";
          } else {
            $active = "<td style='border: 2px solid black; color: lime'>Ja</td>";
          }
          echo "

          <tr>
            <td style='border: 2px solid black;'>".$row['fullname']."</td>
            <td style='border: 2px solid black;'>".roleData($con, $row['role'])["name"]."</td>"
            .$active.
            "
            <td style='border: 2px solid black;'>
              <form action='includes/groupmanager.inc.php' method='post'>
                <input type='hidden' name='group' value='".$gid."'>
                <button type='submit' name='del' value='".$row["account"]."' style='font-size: 1.2rem; border: none; width: fit-content; height: fit-content;'><span class='navilogout'>x</span></button>
              </form>
            </td>
          </tr>

          ";
        }
      }
      echo '
      </tbody>
      </table>
      ';
    } else {
      echo "
        <h3 style='color: red; margin: 30px auto;'>In dieser Gruppe sind keine Benutzer!</h3>
      ";
    }
  } else {
    echo "<p style='color: red;'>Es gibt keine Benutzer! Warte mal, wie bist du hier hergekommen?</p>";
  }

  mysqli_stmt_close($stmt);

}

//*##############################################################################
/*
function roleMemberArray($con, $roleid) {
  $sql = "SELECT * FROM users WHERE role=? ORDER BY `account` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $roleid);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  $teamer = array();

  while ($row = $rs->fetch_assoc()) {
    if ($row["disabled"] != "1") {
      $teamer[] = $row["account"];
    }
  }

  mysqli_stmt_close($stmt);

  // in_array($needle, $array) for isTeamerOfTeam
  return $teamer;

}
*/
//##############################################################################

function notifyTable($con, $usr) {
  $sql = "SELECT * FROM notifications WHERE usr=? ORDER BY `id` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
        <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
        <thead>
          <tr>
            <th style="padding-left: 10px; padding-right: 10px; border: 2px solid black;">Sender</th>
            <th style="padding-left: 10px; padding-right: 10px; border: 2px solid black; color: rgb(0, 162, 255);">Betreff</th>
            <th style="padding-left: 10px; padding-right: 10px; border: 2px solid black;">Datum (GMT)</th>
          </tr>
        </thead>
        <tbody>
    ';
    $read = false;
    while ($row = $rs->fetch_assoc()) {
      $sender = userData($con, $row["sender"]);
      $senderName = "<i>".$row["sender"]."</i>";
      if ($sender !== false) {
        $senderName = $sender["fullname"];
      }
      if (!$read && $row["read"]) {
        echo "
        </tbody>
        </table>
        <tr><p style='color: lime'>??????????????????????????????????????????????????????????????????????????????{ GELESEN }??????????????????????????????????????????????????????????????????????????????</p></tr>
        <table class='profile' style='float: none; margin: 30px auto; font-size: larger; align-items: center;'>
        <tbody>";
        $read=true;
      }
      echo "<tr>";
      echo "  <td style='border: 2px solid black;'>".$senderName."</td>";
      echo "  <td style='border: 2px solid black;'><a href='./notifications.php?notify=".$row['id']."' style='color: rgb(0, 162, 255);'>".$row['subject']."</a></td>";
      echo "  <td style='border: 2px solid black;'>".$row['date']."</td>";
      echo "  <td style='border: 2px solid black;'><a href='./notifications.php?exe=del&id=".$row["id"]."' class='navilogout' style='font-size: 1.2rem;'>x</a></td>";
      echo "</tr>";
    }
    echo '
      </tbody>
      </table>
    ';
  } else {
    echo "<br><p style='color: lime;'>Du hast keine Mitteilungen!</p>";
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function teamTable($con, $teamid) {
  $sql = "SELECT * FROM teamer WHERE teamid=? ORDER BY `leader` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $teamid);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
        <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
        <thead>
          <tr>
            <th style="padding-left: 10px; padding-right: 10px;">Name</th>
            <th style="padding-left: 10px; padding-right: 10px;">Moderator</th>
            <th style="padding-left: 10px; padding-right: 10px;"></th>
          </tr>
        </thead>
        <tbody><br>
    ';
    while ($row = $rs->fetch_assoc()) {
      echo "
        <tr id='".userData(con(), $row["usrname"])['id']."' class>
          <td style='border: 2px solid black;'>".$row['usrname']."</td>";

      if ($row["leader"] === 1) {
          echo "<td style='border: 2px solid black;'><form action='includes/teammanager.inc.php' method='post'><input name='team' value='".$teamid."' type='hidden'>
            <button type='submit' name='mod' style='border: none; padding: 0; margin: 0; color: lime; width: fit-content; height: fit-content;' value='".$row['usrname']."'>Ja</button></form></td>";
      } else {
        echo "<td style='border: 2px solid black;'><form action='includes/teammanager.inc.php' method='post'><input name='team' value='".$teamid."' type='hidden'>
            <button type='submit' name='mod' style='border: none; padding: 0; margin: 0; color: red; width: fit-content; height: fit-content;' value='".$row['usrname']."'>Nein</button></form></td>";
      }
      echo "</tr>";
    }
    echo '
      </tbody>
      </table>
    ';
  } else {
    return false;
  }

  mysqli_stmt_close($stmt);
  return true;

}

//##############################################################################

function permissionUL($con, $user) {
    $power = getUserPower($con, $user);
    echo "<ul style='text-align: left;'>";
    echo "<li>Eigene Events einsehen und Bearbeiten</li>";
    echo "<li>Messenger verwenden</li>";
    echo "<li>Eigenen Spitznamen ??ndern</li>";
    if ($power >= 40) {
      echo '<br>';
      echo "<li>Zugriff auf Sektion \"Teams\"</li>";
      echo "<li>Zugriff auf Sektion \"Datenbank\"</li>";
      echo "<li>Teammitglieder in Teams mit Moderator-Level bearbeiten</li>";
      echo "<li>Team daten in Teams mit Moderator-Level bearbeiten</li>";
      echo "<li>Events eines Teams mit Moderator-Level signieren</li>";
      echo "<li>Team-Anfragen senden</li>";
    }
    if ($power >= 50) {
      echo '<br>';
      echo "<li>Events jeglicher User signieren</li>";
      echo "<li>Team daten in allen Teams bearbeiten</li>";
    }
    if ($power >= 80) {
      echo '<br>';
      echo "<li>Teammitglieder in jeglicher Teams bearbeiten</li>";
    }
    if ($power >= 100) {
      echo '<br>';
      echo "<li>Zugriff auf Sektion \"Verwaltung\"</li>";
      echo "<li>Verwaltung und Bearbeitung von Benutzern</li>";
      echo "<li>Verwaltung und Bearbeitung von Gruppen</li>";
      echo "<li>Verwaltung und Bearbeitung von Neuigkeiten</li>";
      echo "<li>Verwaltung und Bearbeitung von Rollen niedrigerer Power</li>";
      echo "<li>Verwaltung und Bearbeitung von Teams</li>";
      echo "<li>Verwaltung und Bearbeitung von Services</li>";
      echo "<li>Team-Anfragen einsehen und Akzeptieren/Ablehnen</li>";
    }
    if ($power >= 110 && $power < 127) {
      echo '<br>';
      echo "<li>Zuweisung von Rollen (niedrigerer Power) bei Benutzern</li>";
    }
    if ($power >= 127) {
      echo '<br>';
      echo "<li>Zuweisung jeglicher Rollen bei jeglichen Benutzern</li>";
    }
    if ($power >= 128) {
      echo '<br>';
      echo "<li>Hallo root!</li>";
    }
}

//##############################################################################

function teamUL($con, $user) {
  if (count(usersTeamsArray($con, $user)) == 0) {
    echo '<p>Keine Teams</p>';
  }
  echo "<ul style='text-align: left;'>";
  foreach (usersTeamsArray($con, $user) as $teamid) {
    $data = teamData($con, $teamid);
    echo "<li>".$data["name"]."</li>";
  }
  echo "</ul>";
}

//##############################################################################

function groupUL($con, $user) {
  if (count(usersGroupsArray($con, userData($con, $user)["id"])) == 0) {
    echo '<p>Keine Gruppen</p>';
  }
  echo "<ul style='text-align: left;'>";
  foreach (usersGroupsArray($con, userData($con, $user)["id"]) as $groupid) {
    $data = groupDataById($con, $groupid);
    echo "<li>".$data["name"]."</li>";
  }
  echo "</ul>";
}

//##############################################################################

function teams($con) {
  $sql = "SELECT * FROM teams ORDER BY `name` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
        <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
        <thead>
          <tr>
            <th style="padding-left: 10px; padding-right: 10px;">Name</th>
            <th style="padding-left: 10px; padding-right: 10px;">Dienstbereich</th>
          </tr>
        </thead>
        <tbody><br>
    ';
    while ($row = $rs->fetch_assoc()) {
      echo "

      <tr>
        <td style='border: 2px solid black;'><a class='user' href='admin.php?page=teams&team=".$row["id"]."'>".$row["name"]."</a></td>
        <td style='border: 2px solid black;'>".serviceData($con, $row['service'])['name']."</td>
      </tr>

      ";
    }
    echo '
      </tbody>
      </table>
    ';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function services($con) {
  $sql = "SELECT * FROM services ORDER BY `index` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
        <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
        <thead>
          <tr>
            <th style="padding-left: 10px; padding-right: 10px;">Name</th>
            <th style="padding-left: 10px; padding-right: 10px;">Index</th>
          </tr>
        </thead>
        <tbody><br>
    ';
    while ($row = $rs->fetch_assoc()) {
      echo "

      <tr>
        <td style='border: 2px solid black;'><a class='user' href='admin.php?page=teams&service=".$row["id"]."'>".$row["name"]."</a></td>
        <td style='border: 2px solid black;'>".$row["index"]."</td>
      </tr>

      ";
    }
    echo '
      </tbody>
      </table>
    ';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function notification($con, $id) {
  $sql = "SELECT * FROM notifications WHERE id=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      readNotification($con, $id);
      $sender = userData($con, $row["sender"]);
      $senderName = "<i>".$row["sender"]."</i>";
      if ($sender !== false) {
        $senderName = $sender["fullname"];
      }
      echo "

      <div class='main'>
        <h1>".$row['subject']."</h1><br>
        <h3>Sender: ".$senderName."</h3><br>
        <p>Inhalt:</p><br>
        <p id='text' style='width: 60%; border: 2px solid #404040; margin: 0 auto; text-align: left; padding: 10px; border-radius: 10px;'>".$row['text']."</p><br>
        <a href='./notifications.php?exe=del&id=".$id."' class='navilogout' style='border: solid white; padding: 4px; border-radius: 5px;'>L??schen</a><br><br>
        <a href='./notifications.php' style='border: solid white; padding: 4px; border-radius: 5px;'>??? Zur??ck</a>
      </div>
      ";
    }
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function roles($con) {
  $sql = "SELECT * FROM roles ORDER BY `power` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
      <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
      <thead>
        <tr>
          <th style="padding-left: 10px; padding-right: 10px;">ID</th>
          <th style="padding-left: 10px; padding-right: 10px;">Name</th>
          <th style="padding-left: 10px; padding-right: 10px;">Erstellt von</th>
          <th style="padding-left: 10px; padding-right: 10px;">Power</th>
        </tr>
      </thead>
      <tbody>
    ';
    while ($row = $rs->fetch_assoc()) {
      if ($row["gid"] > 0 || getUserPower($con, $_SESSION["username"]) > 127) {
        echo "

        <tr>
          <td style='border: 2px solid black;'>".$row['gid']."</td>
          <td style='border: 2px solid black;'><a class='user' href='admin.php?page=roles&role=".$row["gid"]."'>".$row["name"]."</a></td>
          <td style='border: 2px solid black;'>".userData($con, $row['createdby'])["fullname"]."</td>
          <td style='border: 2px solid black;'>".$row['power']."</td>
        </tr>

        ";
      }
    }
    echo '
      </tbody>
      </table>
    ';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function groups($con) {
  $sql = "SELECT * FROM groups ORDER BY `name` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);
  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
      <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
      <thead>
        <tr>
          <th style="padding-left: 10px; padding-right: 10px;">Name</th>
          <th style="padding-left: 10px; padding-right: 10px;">Account</th>
          <th style="padding-left: 10px; padding-right: 10px;">Erstellt von</th>
        </tr>
      </thead>
      <tbody>
    ';
    while ($row = $rs->fetch_assoc()) {
      $data = userDataById($con, $row['createdby']);
      echo "

      <tr>
        <td style='border: 2px solid black;'>".$row["name"]."</td>
        <td style='border: 2px solid black;'><a class='user' href='admin.php?page=groups&gid=".$row["id"]."'>".$row["account"]."</a></td>
        <td style='border: 2px solid black;'>".$data["fullname"]."</td>
      </tr>

      ";
    }
    echo '
      </tbody>
      </table>
    ';
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function teamDatas($con, $team) {
  if ($team == "null") {
    if (getUserPower($con, $_SESSION["username"]) >= 80) {
      $sql = "SELECT * FROM data ORDER BY `edate` DESC;";
    } else {
      echo "

        <tr>
          <td style='border: 2px solid black;'></td>
          <td style='border: 2px solid black;'></td>
          <td style='border: 2px solid black;'></td>
          <td style='border: 2px solid black;'>W??hle ein Team!</td>
          <td style='border: 2px solid black;'></td>
          <td style='border: 2px solid black;'></td>
        </tr>

        ";
        exit();
    }
  } else {
    $sql = "SELECT * FROM data WHERE team=? ORDER BY `edate` DESC;";
  }
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=12");
    exit();
  }
  if ($team != "null") {
    mysqli_stmt_bind_param($stmt, "s", $team);
  }
  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      $teamName = teamData($con, $row["team"])["name"];
      echo "

      <tr>
        <td style='border: 2px solid black;'>".userData($con, $row['account'])["fullname"]."</td>
        <td style='border: 2px solid black; max-width: 25%;'><a class='user' href='datacenter.php?data=".$row['id']."'>".$row['name']."</a></td>
        <td style='border: 2px solid black;'>".$teamName."</td>
        <td style='border: 2px solid black;'>".$row['lessons']."</td>
        <td style='border: 2px solid black;'>".$row['edate']."</td>";
        if ($row["signed"] == 0) {
          echo "
          <td style='border: 2px solid black;'><form action='includes/datamanager.inc.php' method='post'><button type='submit' name='sign' 
          style='border: none; padding: 0; margin: 0; color: lime; width: fit-content; height: fit-content;' value='".$row['id']."'>Signieren</button></form></td>";
        } else {
          echo "<td style='border: 2px solid black;'>".userDataById($con, $row['signed'])["fullname"]."</td>";
        }
      echo "</tr>";
    }
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function datas($con, $user, $team, $datac) {
  if ($team == "null") {
    $sql = "SELECT * FROM data WHERE `account`=? ORDER BY `edate` DESC;";
  } else {
    $sql = "SELECT * FROM data WHERE `account`=? AND team=? ORDER BY `edate` DESC;";
  }
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }
  if ($team == "null") {
    mysqli_stmt_bind_param($stmt, "s", $user);
  } else {
    mysqli_stmt_bind_param($stmt, "ss", $user, $team);
  }
  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  $page = "profile.php";
  if ($datac) {
      $page = "datacenter.php";
  }

  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      $teamName = teamData($con, $row["team"])["name"];
      echo "

      <tr>
        <td style='border: 2px solid black;'><a class='user' href='".$page."?data=".$row['id']."'>".$row['name']."</a></td>
        <td style='border: 2px solid black;'>".$teamName."</td>
        <td style='border: 2px solid black;'>".$row['lessons']."</td>
        <td style='border: 2px solid black;'>".$row['edate']."</td>"; 
        if ($row["signed"] != 0) {
          echo "<td style='border: 2px solid black;'>".userDataById($con, $row['signed'])["fullname"]."</td>";
        } else {
          if (getUserPower($con, $_SESSION["username"]) < 50 || !$datac) {
            echo "<td style='border: 2px solid black; color: red;'>Nicht Signiert</td>";
          } else {
            echo "
            <td style='border: 2px solid black;'><form action='includes/datamanager.inc.php' method='post'><button type='submit' name='sign' 
            style='border: none; padding: 0; margin: 0; color: lime; width: fit-content; height: fit-content;' value='".$row['id']."'>Signieren</button></form></td>";
          }
        }
      echo "
      </tr>

      ";
    }
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function dataDownload($con, $user, $team) {
  if ($team == "null") {
    $sql = "SELECT * FROM data WHERE `account`=? ORDER BY `edate` DESC;";
  } else {
    $sql = "SELECT * FROM data WHERE `account`=? AND team=? ORDER BY `edate` DESC;";
  }
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }
  if ($team == "null") {
    mysqli_stmt_bind_param($stmt, "s", $user);
  } else {
    mysqli_stmt_bind_param($stmt, "ss", $user, $team);
  }
  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      $teamName = teamData($con, $row["team"])["name"];
      if ($row["signed"] != 0) {
        echo "

        <tr>
          <td style='border: 2px solid black;'>".$row['name']."</td>
          <td style='border: 2px solid black;'>".$teamName."</td>
          <td style='border: 2px solid black;'>".serviceData($con, teamData($con, $row["team"])["service"])["index"]."</td>
          <td style='border: 2px solid black;'>".$row['lessons']."</td>
          <td style='border: 2px solid black;'>".$row['edate']."</td>
          <td style='border: 2px solid black;'>".userDataById($con, $row['signed'])["fullname"]."</td>
        </tr>

        ";
      }
    }
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function allTeamRequests($con) {
  $sql = "SELECT * FROM teamrequests ORDER BY `id` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
        <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
        <thead>
          <tr>
            <th style="padding-left: 10px; padding-right: 10px;">Teamname</th>
            <th style="padding-left: 10px; padding-right: 10px;">Dienstbereich</th>
            <th style="padding-left: 10px; padding-right: 10px;">Ersteller</th>
          </tr>
        </thead>
        <tbody><br>
    ';
    while ($row = $rs->fetch_assoc()) {
      
      echo "
        <tr>
          <td style='border: 2px solid black;'>".$row['teamname']."</td>
          <td style='border: 2px solid black;'>".serviceData($con, $row['service'])["name"]."</td>
          <td style='border: 2px solid black;'>".$row['by']."</td>
          <form action='includes/teammanager.inc.php' method='post'>
            <td style='border: 2px solid black;'><button style='border: none; width: auto; color: lime; cursor: pointer;' type='submit' name='acceptrequest' value=".$row['id'].">Annehmen</button></td>
            <td style='border: 2px solid black;'><button style='border: none; width: auto; color: red; cursor: pointer;' type='submit' name='denyrequest' value=".$row['id'].">Ablehnen</button></td>
          </form>
        </tr>
      ";
    }
    echo '
      </tbody>
      </table>
    ';
  } else {
    mysqli_stmt_close($stmt);
    echo "<br><p style='color: lime;'>Zurzeit gibt es keine offenen Erstellungs-Anfragen! Gute Arbeit!</p>";
    return false;
  }

  mysqli_stmt_close($stmt);
  return true;

}

//##############################################################################

function userTeamRequests($con, $user) {
  $sql = "SELECT * FROM teamrequests WHERE `by`=? ORDER BY `id` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $user);
  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
        <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
        <thead>
          <tr>
            <th style="padding-left: 10px; padding-right: 10px;">Teamname</th>
            <th style="padding-left: 10px; padding-right: 10px;">Dienstbereich</th>
          </tr>
        </thead>
        <tbody><br>
    ';
    while ($row = $rs->fetch_assoc()) {
      
      echo "
        <tr>
          <td style='border: 2px solid black;'>".$row['teamname']."</td>
          <td style='border: 2px solid black;'>".serviceData($con, $row['service'])["name"]."</td>
          <form action='includes/teammanager.inc.php' method='post'>
            <td style='border: 2px solid black;'><button style='border: none; width: auto; color: red; cursor: pointer;' type='submit' name='cancelrequest' value=".$row['id'].">Zur??ckziehen</button></td>
          </form>
        </tr>
      ";
    }
    echo '
      </tbody>
      </table>
    ';
  } else {
    echo "<br><p style='color: red;'>Du hast keine offenen Erstellungs-Anfragen!</p>";
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function news($con) {
  $sql = "SELECT * FROM news ORDER BY `id` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
        <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
        <thead>
          <tr>
            <th style="padding-left: 10px; padding-right: 10px;">Herausgeber</th>
            <th style="padding-left: 10px; padding-right: 10px;">Datum</th>
          </tr>
        </thead>
        <tbody><br>
    ';
    while ($row = $rs->fetch_assoc()) {
      
      echo "
        <tr>
          <td style='border: 2px solid black;'>".$row['publisher']."</td>
          <td style='border: 2px solid black;'>".$row['date']."</td>
        </tr>
      ";
    }
    echo '
      </tbody>
      </table>
    ';
  } else {
    echo "<p style='color: red;'>Hier gibt es nichts zu sehen. :(</p>";
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function homeNews($con) {
  $sql = "SELECT * FROM news ORDER BY `id` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      if ($row["power"] <= getUserPower($con, $_SESSION["username"])) {
          $data = userData($con, $row["publisher"]);
          if ($data === false) {
              $publisher = "Gel??schter Benutzer";
              $role = "Keine Rolle";
          } else {
              $role = roleData($con, $data['role'])["name"];
              $publisher = $data["fullname"];
          }
          echo '<div class="main">';
          if (getUserPower($con, $_SESSION["username"]) > 100) {
              echo "
          <form action='includes/newsmanager.inc.php' method='post'>
            <button class='delnews' type='submit' name='del' value='".$row["id"]."' style='border:none; font-size: 1.2rem; float: right; margin: 0; width: auto; height: auto; border-radius: 0; padding: 0; position: relative; right: 5px; color: red;'>x</button>
          </form>
          ";
          }
          echo("
          <p style='color: grey;'>Ver??ffentlicht: ".$row['date']."</p><br>
          <p style='color: lime; max-width: 80%; text-align: center; border: solid #202020; margin: 0 auto; border-radius: 15px; padding: 10px; width: fit-content; background-color: #2f2f2f'>".$row['news']."</p><br>
          <p style='color: grey;'>von ".$publisher." (".$role.")</p><br>
        ");
          echo '</div>';
      }
    }
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function usersFiltered($con, $facc, $role) {
  $facc = strtolower($facc);
  if ($role == "null") {
    $sql = "SELECT * FROM users ORDER BY `disabled` ASC, `account` ASC, `role` ASC;";
  } else {
    $sql = "SELECT * FROM users WHERE `role`=? ORDER BY `disabled` ASC, `account` ASC;";
  }
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  if ($role != "null") {
    mysqli_stmt_bind_param($stmt, "s", $role);
  }
  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
    <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
    <thead>
      <tr>
        <th style="padding-left: 10px; padding-right: 10px;">Account</th>
        <th style="padding-left: 10px; padding-right: 10px;">Vollname</th>
        <th style="padding-left: 10px; padding-right: 10px;">Rolle</th>
        <th style="padding-left: 10px; padding-right: 10px;">Aktiv</th>
      </tr>
    </thead>
    <tbody>
    ';
    while ($row = $rs->fetch_assoc()) {
      if (($row["role"] != 0 || getUserPower($con, $_SESSION["username"]) > 127) && (empty($facc) || strpos($row["account"], $facc) !== false)) {
        if ($row["disabled"] == 1) {
          $active = "<td style='border: 2px solid black; color: red'>Nein</td>";
        } else {
          $active = "<td style='border: 2px solid black; color: lime'>Ja</td>";
        }
        echo "

        <tr>
          <td style='border: 2px solid black;'><a class='user' href='admin.php?page=users&usr=".$row["account"]."'>".$row["account"]."</a></td>
          <td style='border: 2px solid black;'>".$row['fullname']."</td>
          <td style='border: 2px solid black;'>".roleData($con, $row['role'])["name"]."</td>"
          .$active.
          "
        </tr>

        ";
      }
    }
    echo '
    </tbody>
    </table>
    ';
  } else {
    echo "<p style='color: red;'>Es gibt keine Benutzer! Warte mal, wie bist du hier hergekommen?</p>";
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function users($con) {
  $sql = "SELECT * FROM users ORDER BY `disabled` ASC, `account` ASC, `role` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  if ($rs->num_rows > 0) {
    echo '
    <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
    <thead>
      <tr>
        <th style="padding-left: 10px; padding-right: 10px;">Account</th>
        <th style="padding-left: 10px; padding-right: 10px;">Vollname</th>
        <th style="padding-left: 10px; padding-right: 10px;">Rolle</th>
        <th style="padding-left: 10px; padding-right: 10px;">Aktiv</th>
      </tr>
    </thead>
    <tbody>
    ';
    while ($row = $rs->fetch_assoc()) {
      if ($row["role"] != 0 || getUserPower($con, $_SESSION["username"]) > 127) {
        if ($row["disabled"] == 1) {
          $active = "<td style='border: 2px solid black; color: red'>Nein</td>";
        } else {
          $active = "<td style='border: 2px solid black; color: lime'>Ja</td>";
        }
        echo "

        <tr>
          <td style='border: 2px solid black;'><a class='user' href='admin.php?page=users&usr=".$row["account"]."'>".$row["account"]."</a></td>
          <td style='border: 2px solid black;'>".$row['fullname']."</td>
          <td style='border: 2px solid black;'>".roleData($con, $row['role'])["name"]."</td>"
          .$active.
          "
        </tr>

        ";
      }
    }
    echo '
    </tbody>
    </table>
    ';
  } else {
    echo "<p style='color: red;'>Es gibt keine Benutzer! Warte mal, wie bist du hier hergekommen?</p>";
  }

  mysqli_stmt_close($stmt);

}

//##############################################################################

function usersOverview($con) {
    $sql = "SELECT * FROM users WHERE `disabled`=0 ORDER BY `account` ASC, `role` ASC;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: index.php?error=1");
        exit();
    }

    mysqli_stmt_execute($stmt);

    $rs = mysqli_stmt_get_result($stmt);

    $serviceSpalten = "";
    $services = array();
    foreach (serviceArray($con) as $sData) {
        $serviceSpalten = $serviceSpalten.'<th style="padding-left: 10px; padding-right: 10px; font-size: 12pt; max-width: 200px;">'.$sData["name"].'</th>';
        $services[] = $sData["id"];
    }

    if ($rs->num_rows > 0) {
        echo '
    <table class="profile" style="float: none; margin: 30px auto; font-size: larger; align-items: center;">
    <thead>
      <tr>
        <th style="padding-left: 10px; padding-right: 10px; font-size: 12pt;">Benutzer</th>'.$serviceSpalten.'
      </tr>
    </thead>
    <tbody>
    ';
        while ($row = $rs->fetch_assoc()) {
            if ($row["account"] != "root" && getAllLessonsCount($con, $row['account'], 'null') > 0) {
                $serviceRows = "";
                foreach ($services as $service) {
                    $count = getAllLessonsCountArea($service, $row["account"]);
                    $serviceRows .= "<td style='border: 2px solid black;'>".$count."</td>";
                }
                echo "
        
                    <tr>
                      <td style='border: 2px solid black;'>".$row['fullname']."</td>".$serviceRows."
                    </tr>
        
                ";
            }
        }
        echo '
    </tbody>
    </table>
    ';
    } else {
        echo "<p style='color: red;'>Es gibt keine Benutzer! Warte mal, wie bist du hier hergekommen?</p>";
    }

    mysqli_stmt_close($stmt);

}

//###############################################################################

function setPw($con, $user, $pw, $admin) {
  $qry = "UPDATE users SET usrpw=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  $hashedPwd = password_hash($pw, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ss", $hashedPwd, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  if ($admin) {
    header("location: ../admin.php?error=pwset&pw=".$pw."&user=".$user);
  } else {
    header("location: ../settings.php?error=pwset");
  }

}

//###############################################################################

function getAllNotifyCount($con, $usr) {
  $sql = "SELECT * FROM notifications WHERE usr=? ORDER BY `id` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  $count=0;

  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      if (!$row["read"]) {
        $count++;
      }
    }
  }

  return $count;
}

//###############################################################################

function getAllRequestsCount($con) {
  $sql = "SELECT * FROM teamrequests ORDER BY `id` ASC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  $count=0;

  if ($rs->num_rows > 0) {
    while ($rs->fetch_assoc()) {
      $count++;
    }
  }

  return $count;
}

//###############################################################################

function getAllLessonsCount($con, $user, $team, $signed=true) {
  if ($team == "null") {
    $sql = "SELECT * FROM data WHERE `account`=? ORDER BY `lessons` DESC;";
  } else {
    $sql = "SELECT * FROM data WHERE `account`=? AND team=? ORDER BY `lessons` DESC;";
  }
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=1");
    exit();
  }

  if ($team == "null") {
    mysqli_stmt_bind_param($stmt, "s", $user);
  } else {
    mysqli_stmt_bind_param($stmt, "ss", $user, $team);
  }
  mysqli_stmt_execute($stmt);

  $rs = mysqli_stmt_get_result($stmt);

  $count=0;

  if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
      if ($row["signed"] != 0 || $signed == false) {
        $count+=$row["lessons"];
      }
    }
  }

  return $count;
}

//###############################################################################

function getAllLessonsCountArea($area, $user) {
    $con = con();
    $teams = usersTeamsArray($con, $user);
    $count = 0;

    foreach ($teams as $team) {
        $team = teamData($con, $team);
        if ($team["service"] == $area) {
            $count += getAllLessonsCount($con, $user, $team["id"]);
        }
    }

    return $count;
}

//###############################################################################

function updateTeamerModStatus($con, $teamid, $user, $mod) {
  $qry = "UPDATE teamer SET leader=? WHERE teamid=? AND usrname=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "iis", $mod, $teamid, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function createService($con, $name, $index) {
  $sql = "INSERT INTO services (name, `index`) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $index);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function delService($con, $id) {
  $qry = "DELETE FROM services WHERE id=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//##############################################################################

function createRequest($con, $user, $teamName, $service) {
  $sql = "INSERT INTO teamrequests (`by`, teamname, service) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sss", $user, $teamName, $service);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function delRequest($con, $id) {
  $qry = "DELETE FROM teamrequests WHERE id=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function delNotification($con, $id) {
  $qry = "DELETE FROM notifications WHERE id=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ./?error=12");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function delUser($con, $usr) {
  delUserData($con, $usr);
  delUserNotifications($con, $usr);
  delUserRequests($con, $usr);
  delUserTeamer($con, $usr);
  $qry = "DELETE FROM users WHERE account=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function delUserData($con, $usr) {
  $qry = "DELETE FROM data WHERE account=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function delUserNotifications($con, $usr) {
  $qry = "DELETE FROM notifications WHERE usr=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function delUserTeamer($con, $usr) {
  $qry = "DELETE FROM teamer WHERE usrname=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function delUserRequests($con, $usr) {
  $qry = "DELETE FROM teamrequests WHERE `by`=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $usr);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//##############################################################################

function createTeam($con, $name, $service) {
  $sql = "INSERT INTO teams (name, service) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "si", $name, $service);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function delTeam($con, $teamid) {
  $qry = "DELETE FROM teams WHERE id=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $teamid);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//##############################################################################

function sendNotification($con, $usr, $sender, $subject, $text) {
  $sql = "INSERT INTO notifications (usr, sender, subject, `text`) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ssss", $usr, $sender, $subject, $text);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  // mail (nicht rechtlich ok, maybe mit privater E-Mail?)

  /*$to = $usr."@example.com";
  $mail = "<html lang='de'><body style='background-color: #252322; color: #FFFFFF;'>
    <style>

    a {
      text-decoration: underline;
      color: white;
    }
    a:hover {
      color: GRAY;
    }
    a:active {
      color: red;
    }

    </style>
  ".$text."<br><br>Von: ".$sender."</html></body>";
  $headers = array(
    'From' => 'sebsurf@stormarnschueler.de',
    'Content-Type' => 'text/html; charset=utf-8'
  );

  mail($to, $subject, $mail, $headers);*/
}

//##############################################################################

function addTeamer($con, $teamid, $user) {
  $sql = "INSERT INTO teamer (teamid, usrname) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "is", $teamid, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function delTeamer($con, $teamid, $user) {
  $qry = "DELETE FROM teamer WHERE teamid=? AND usrname=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "is", $teamid, $user);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//##############################################################################

function addGrouper($con, $gid, $user) {
  $data = userData($con, $user);
  $sql = "INSERT INTO grouper (gid, usrid) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ii", $gid, $data["id"]);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function delGrouper($con, $gid, $user) {
  $data = userData($con, $user);
  $qry = "DELETE FROM grouper WHERE gid=? AND usrid=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ii", $gid, $data["id"]);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function delRole($con, $id) {
  $qry = "DELETE FROM roles WHERE gid=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $id);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function delData($con, $id) {
  $qry = "DELETE FROM data WHERE id=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../profile.php?error=eerror");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $id);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function editServiceName($con, $id, $name) {
  $qry = "UPDATE services SET `name`=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editServiceIndex($con, $id, $index) {
  $qry = "UPDATE services SET `index`=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $index, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editTeamName($con, $id, $name) {
  $qry = "UPDATE teams SET `name`=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editTeamService($con, $id, $serviceid) {
  $qry = "UPDATE teams SET `service`=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $serviceid, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editRoleId($con, $id, $newid) {
  editRoleIdUsers($con, $id, $newid);
  $qry = "UPDATE roles SET `gid`=? WHERE gid=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $newid, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editRolePower($con, $id, $power) {
  $qry = "UPDATE roles SET `power`=? WHERE gid=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $power, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editRoleName($con, $id, $name) {
  $qry = "UPDATE roles SET name=? WHERE gid=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editGroupAccount($con, $id, $name) {
  $qry = "UPDATE groups SET account=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editGroupName($con, $id, $name) {
  $qry = "UPDATE groups SET name=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editDataName($con, $id, $name) {
  $qry = "UPDATE data SET name=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function signData($con, $id) {
  $qry = "UPDATE data SET signed=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", userData($con, $_SESSION["username"])["id"], $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  sendNotification($con, dataData($con, $id)["account"], "root", "Daten signiert!", userData($con, $_SESSION["username"])["fullname"]." hat dein eingetragenes Event '".dataData($con, $id)["name"]."' signiert!<br>
  Es wird in deinen Sozialstunden vermerkt!");
}

//###############################################################################

function unsignData($con, $id) {
  $wasSigned = dataData($con, $id)["signed"] != 0;
  $qry = "UPDATE data SET signed=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  $unsign = "0";

  mysqli_stmt_bind_param($stmt, "ss", $unsign, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  if ($wasSigned) {
    sendNotification($con, dataData($con, $id)["account"], "root", "Daten nicht mehr signiert!", "Dein Event '".dataData($con, $id)["name"]."' ist nun nicht mehr signiert, weil es wahrscheinlich bearbeitet wurde!");
  }
}

//###############################################################################

function editDataDate($con, $id, $date) {
  $qry = "UPDATE data SET edate=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $date, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editDataTeam($con, $id, $team) {
  $qry = "UPDATE data SET team=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $team, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editDataDuration($con, $id, $lessons) {
  $qry = "UPDATE data SET lessons=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "is", $lessons, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editUserRole($con, $user, $roleid) {
  $qry = "UPDATE users SET role=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "is", $roleid, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function setUserFullname($con, $user, $name) {
  $qry = "UPDATE users SET fullname=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $name, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function setUserNick($con, $user, $nick) {
  $qry = "UPDATE users SET nick=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $nick, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  $nameExists = userData($con, $user);

  if ($user == $_SESSION["username"]) {
    if (empty($nameExists["nick"])) {
      $_SESSION["nick"] = $nameExists["fullname"];
    } else { 
      $_SESSION["nick"] = $nameExists["nick"];
    }
    header("location: ../settings.php?error=setnick");
    exit();
  }
}

//###############################################################################

function readNotification($con, $id) {
  $qry = "UPDATE notifications SET `read`=? WHERE id=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ./?error=1");
    exit();
  }

  $yep = 1;
  mysqli_stmt_bind_param($stmt, "is", $yep, $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function setUserNote($con, $user, $note) {
  $qry = "UPDATE users SET note=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $note, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function setUserDisabled($con, $user, $disabled) {
  $qry = "UPDATE users SET disabled=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "is", $disabled, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function updateUserLessons($con, $user) {
  $qry = "UPDATE users SET lessons=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  $team = "null";

    $allLessonsCount = getAllLessonsCount($con, $user, $team);
    mysqli_stmt_bind_param($stmt, "is", $allLessonsCount, $user);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################
/*
function logUserRole($con, $admin, $target, $roleid) {

  $action = "'".$admin."' changed role of '".$target."' to '".roleData($con, $roleid)["name"]."'";

  $sql = "INSERT INTO log (act, usr, target, ip) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ssss", $action, $admin, $target, getIPAddress());
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function logRoleEdit($con, $action, $user) {

  $sql = "INSERT INTO log (act, usr, target, ip) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ssss", $action, $user, $user, getIPAddress());
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function logUserLogin($con, $user) {

  $action = "User login: '".$user."'";

  $sql = "INSERT INTO log (act, usr, target, ip) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ssss", $action, $user, $user, getIPAddress());
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function logUserCreate($con, $user, $created) {

  $action = "Created User: '".$created."'";

  $sql = "INSERT INTO log (act, usr, target, ip) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ssss", $action, $user, $created, getIPAddress());
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function getIPAddress() {  
  //whether ip is from the share internet  
  if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
    $ip = $_SERVER['HTTP_CLIENT_IP'];  
  }  
  //whether ip is from the proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
  //whether ip is from the remote address
  else{  
    $ip = $_SERVER['REMOTE_ADDRESS'];
   }  
   return $ip;  
}
*/
//##############################################################################

function currentNewsData($con) {
  $sql = "SELECT * FROM news ORDER BY `id` DESC;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
      return false;
  }
}

//##############################################################################

function isSetupt($con) {
  $sql = "SELECT * FROM users;";
  $stmt = mysqli_stmt_init($con);

  return mysqli_stmt_prepare($stmt, $sql);
}

//##############################################################################

function someSQL($sql) {
    $con = con();
    $stmt = mysqli_stmt_init($con);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        header("location: ../?error=1&part=customSql");
        exit();
    }
}

//##############################################################################

function fullSetup($con, $aname, $apw) {

  setupTableData($con);
  setupTableNews($con);
  setupTableNotifies($con);
  setupTableRoles($con);
  setupTableTeamer($con);
  setupTableTeamRequests($con);
  setupTableTeams($con);
  setupTableUsers($con);
  setupTableGrouper($con);
  setupTableGroups($con);
  setupTableServices($con);
  #setupTableTickets($con);
  #setupTableTicketInputs($con);
  #setupTableVersions($con);

  #createGroundVersion($con);
  createRoleSystem($con);
  createRoleAdmins($con);
  createRoleSystem($con);
  createRoleUsers($con);
  createFirstNews($con);
  createRootUser($con);
  createAdminUser($con, $aname, $apw);
  createGroup($con, "admins", "Admins", "root");

  loginUser($con, $aname, $apw);

}

//##############################################################################

function setupTableData($con) {
  $sql = "CREATE TABLE `data` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `edate` DATETIME NULL DEFAULT NULL,
    `name` VARCHAR(128) NOT NULL,
    `account` VARCHAR(128) NOT NULL,
    `team` VARCHAR(128) NULL DEFAULT NULL,
    `lessons` INT(11) NOT NULL DEFAULT '1',
    `signed` INT(11) NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id` (`id`)
  )
  COLLATE='utf8mb4_general_ci'
  ;";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=data");
    exit();
  }
}

//##############################################################################

function setupTableNews($con) {
  $sql = "CREATE TABLE `news` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `news` VARCHAR(2000) NOT NULL,
    `publisher` VARCHAR(64) NOT NULL DEFAULT 'root',
    `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`power` INT(11) NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id` (`id`)
  )
  COLLATE='utf8mb4_general_ci'
  ;";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=news");
    exit();
  }
}

//##############################################################################

function setupTableNotifies($con) {
  $sql = "CREATE TABLE `notifications` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `usr` VARCHAR(64) NOT NULL,
    `sender` VARCHAR(64) NOT NULL,
    `subject` VARCHAR(64) NOT NULL,
    `text` VARCHAR(1000) NOT NULL,
    `read` TINYINT(1) NOT NULL DEFAULT '0',
    `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	  PRIMARY KEY (`id`),
    UNIQUE INDEX `id` (`id`)
  )
  COLLATE='utf8mb4_general_ci'
  ;";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=notifies");
    exit();
  }
}

//##############################################################################

function setupTableRoles($con) {
  $sql = "CREATE TABLE `roles` (
    `gid` INT(11) NOT NULL,
    `name` VARCHAR(64) NOT NULL,
    `createdby` VARCHAR(64) NOT NULL DEFAULT 'root',
    `power` SMALLINT(6) NOT NULL DEFAULT '0',
    PRIMARY KEY (`gid`),
    UNIQUE INDEX `id` (`gid`)
  )
  COLLATE='utf8mb4_general_ci'
  ;
  ";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=roles");
    exit();
  }
}

//##############################################################################

function setupTableTeamer($con) {
  $sql = "CREATE TABLE `teamer` (
    `teamid` INT(11) NOT NULL,
    `usrname` VARCHAR(64) NOT NULL,
    `leader` TINYINT(1) NOT NULL DEFAULT '0'
  )
  COLLATE='utf8mb4_general_ci'
  ;";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=teamer");
    exit();
  }
}

//##############################################################################

function setupTableTeamRequests($con) {
  $sql = "CREATE TABLE `teamrequests` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `by` VARCHAR(64) NOT NULL,
    `teamname` VARCHAR(64) NOT NULL,
    `service` INT(11) NOT NULL,
    PRIMARY KEY (`teamname`),
    UNIQUE INDEX `teamname` (`teamname`),
    UNIQUE INDEX `id` (`id`)
  )
  COLLATE='utf8mb4_general_ci'
  ;";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=requests");
    exit();
  }
}

//##############################################################################

function setupTableTeams($con) {
  $sql = "CREATE TABLE `teams` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(128) NOT NULL,
    `service` INT(11) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `name` (`name`),
    UNIQUE INDEX `id` (`id`)
  )
  COLLATE='utf8mb4_general_ci'
  ;";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=teams");
    exit();
  }
}

//##############################################################################

function setupTableUsers($con) {
  $sql = "CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `account` VARCHAR(64) NOT NULL,
    `nick` VARCHAR(64) NULL DEFAULT NULL,
    `fullname` VARCHAR(128) NULL DEFAULT NULL,
    `usrpw` VARCHAR(128) NOT NULL,
    `note` VARCHAR(2000) NOT NULL DEFAULT '',
    `role` INT(11) NOT NULL DEFAULT '999',
    `lessons` INT(11) NOT NULL DEFAULT '0',
    `disabled` TINYINT(1) NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`),
    UNIQUE INDEX `account` (`account`),
    UNIQUE INDEX `id` (`id`)
  )
  COLLATE='utf8mb4_general_ci'
  ";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=tusers");
    exit();
  }
}

//##############################################################################

function setupTableGroups($con) {
  $sql = "CREATE TABLE `groups` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `account` VARCHAR(64) NOT NULL,
    `name` VARCHAR(64) NOT NULL,
    `createdby` VARCHAR(64) NOT NULL DEFAULT '1',
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id` (`id`)
  )
  COLLATE='utf8mb4_general_ci'
  ;
  ";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=groups");
    exit();
  }
}

//##############################################################################

function setupTableGrouper($con) {
  $sql = "CREATE TABLE `grouper` (
    `gid` INT(11) NOT NULL,
    `usrid` INT(11) NOT NULL
  )
  COLLATE='utf8mb4_general_ci'
  ;
  ";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=grouper");
    exit();
  }
}

//##############################################################################

function setupTableServices($con) {
  $sql = "CREATE TABLE `services` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(64) NOT NULL,
    `index` INT(11) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id` (`id`),
    UNIQUE INDEX `name` (`name`),
    UNIQUE INDEX `index` (`index`)
  )
  COLLATE='utf8mb4_general_ci'
  ;
  ";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  } else {
    header("location: ../setup.php?error=1&part=services");
    exit();
  }
}

//##############################################################################

function createRoleSystem($con) {
  $sql = "INSERT INTO roles (gid, name, createdby, `power`) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../setup.php?error=1&part=rsystem");
    exit();
  }

  $arg1 = "0";
  $arg2 = "System";
  $arg3 = "root";
  $arg4 = "128";

  mysqli_stmt_bind_param($stmt, "ssss", $arg1, $arg2, $arg3, $arg4);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function createRoleAdmins($con) {
  $sql = "INSERT INTO roles (gid, name, createdby, `power`) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../setup.php?error=1&part=radmins");
    exit();
  }

  $arg1 = "1";
  $arg2 = "Administrator";
  $arg3 = "root";
  $arg4 = "127";

  mysqli_stmt_bind_param($stmt, "ssss", $arg1, $arg2, $arg3, $arg4);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function createRoleUsers($con) {
  $sql = "INSERT INTO roles (gid, name, createdby) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../setup.php?error=1&part=rusers");
    exit();
  }

  $arg1 = "999";
  $arg2 = "Benutzer";
  $arg3 = "root";

  mysqli_stmt_bind_param($stmt, "sss", $arg1, $arg2, $arg3);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function createAdminUser($con, $name, $pw) {
  $sql = "INSERT INTO users (account, usrpw, `role`) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../setup.php?error=1&part=uadmin");
    exit();
  }

  $hashedPwd = password_hash($pw, PASSWORD_DEFAULT);
  $adminrole = "1";

  mysqli_stmt_bind_param($stmt, "sss", $name, $hashedPwd, $adminrole);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function createRootUser($con) {
  $sql = "INSERT INTO users (account, usrpw, `role`, disabled, `fullname`) VALUES (?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../setup.php?error=1&part=uroot");
    exit();
  }

  $arg1 = "root";
  $arg3 = "0";
  $arg4 = "0";
  $arg5 = "root";
  $hashedPwd = password_hash("SebsurfRoot", PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssss", $arg1, $hashedPwd, $arg3, $arg4, $arg5);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//##############################################################################

function createFirstNews($con) {
  $sql = "INSERT INTO news (`publisher`, `news`) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=1");
    exit();
  }

  $arg1 = "root";
  $news = "Willkommen bei SebSurf, ich bin root! <br><br><span style='color:lime; text-decoration: underline;'>Menu:</span><br>
  'Events': Hier kann man seine Ereignisse Verwalten und seine pers??nlichen Notizen einsehen. <br>
  'Teams': Hier verwaltet man seine Teams. <br>
  'Datenbank': Hier verwaltet man die Events seines Teams.<br>
  'Verwaltung': Administrator Bereich, hier werden Benutzer und weitere Dinge, wie Rollen oder Teams verwaltet. <br>
  'Mitteilungen': Hier werden deine pers??nlichen Mitteilungen angezeigt. <br>
  'Einstellungen': Hier kannst du dein Passwort oder deinen Spitznamen (Nickname) ??ndern.";

  mysqli_stmt_bind_param($stmt, "ss", $arg1, $news);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

//###############################################################################

function editRoleIdUsers($con, $roleid, $newid) {
  $qry = "UPDATE users SET role=? WHERE role=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ii", $newid, $roleid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function clearRole($con, $roleid) {
  $qry = "UPDATE users SET role=? WHERE role=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  $arg1 = 999;

  mysqli_stmt_bind_param($stmt, "ii", $arg1, $roleid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function clearGroup($con, $gid) {
    $qry = "DELETE FROM grouper WHERE gid=?;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $qry)) {
        header("location: ../?error=1");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $gid);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
}

//###############################################################################

function clearTeamUsers($con, $teamid) {
  $qry = "DELETE FROM teamer WHERE teamid=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $teamid);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function clearTeamData($con, $teamid) {
  $qry = "DELETE FROM data WHERE team=?;";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "i", $teamid);
  mysqli_stmt_execute($stmt);

  mysqli_stmt_close($stmt);
}

//###############################################################################

function editUserAccountNameData($con, $old, $new) {
  $qry = "UPDATE data SET account=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $new, $old);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function editUserAccountNameNews($con, $old, $new) {
  $qry = "UPDATE news SET publisher=? WHERE publisher=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $new, $old);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function editUserAccountNameNotifyUsr($con, $old, $new) {
  $qry = "UPDATE notifications SET usr=? WHERE usr=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $new, $old);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function editUserAccountNameNotifySender($con, $old, $new) {
  $qry = "UPDATE notifications SET sender=? WHERE sender=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $new, $old);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function editUserAccountNameRoleCreator($con, $old, $new) {
  $qry = "UPDATE roles SET createdby=? WHERE createdby=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $new, $old);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function editUserAccountNameTeamer($con, $old, $new) {
  $qry = "UPDATE teamer SET usrname=? WHERE usrname=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $new, $old);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function editUserAccountNameTeamRequests($con, $old, $new) {
  $qry = "UPDATE teamrequests SET by=? WHERE by=?";
  $stmt = mysqli_stmt_init($con);
  if (mysqli_stmt_prepare($stmt, $qry)) {
    mysqli_stmt_bind_param($stmt, "ss", $new, $old);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  }
}

//###############################################################################

function editUserAccountName($con, $old, $new) {
  editUserAccountNameData($con, $old, $new);
  editUserAccountNameNews($con, $old, $new);
  editUserAccountNameNotifySender($con, $old, $new);
  editUserAccountNameNotifyUsr($con, $old, $new);
  editUserAccountNameRoleCreator($con, $old, $new);
  editUserAccountNameTeamer($con, $old, $new);
  editUserAccountNameTeamRequests($con, $old, $new);
  $qry = "UPDATE users SET account=? WHERE account=?";
  $stmt = mysqli_stmt_init($con);
  if (!mysqli_stmt_prepare($stmt, $qry)) {
    header("location: ../index.php?error=1");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $new, $old);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  #logUserRole($con, $_SESSION["username"], $user, $roleid);
}

//###############################################################################

function lookForUnsigned($con) {
  $allusers = count(usersArray($con));
  $userdone = 0;
  foreach (usersArray($con) as $user) {
    if (isTeamLeader($con, $user)) {
      $count = 0;
      foreach (usersLeaderTeamsArray($con, $user) as $teamid) {
        foreach (teamDataArray($con, $teamid) as $dataid) {
          $data = dataData($con, $dataid);
          if ($data["signed"] == 0) {
            $count++;
          }
        }
      }
      if ($count > 0) {
        sendNotification($con, $user, "root", "Nicht signierte Events!", "In deinen teams wurden ".$count." unsignierte Events gefunden!<br> Bitte signiere oder l??sche diese 
        <a href='datacenter.php'>hier</a>!");
      }
    }
    $userdone++;
    echo "Checked '".$user."' | ".$userdone."/".$allusers." | ".(100/$allusers*$userdone)."%\n";
  }
}

//###############################################################################

function hourOverview($con, $user, $signed=true) {
    foreach (serviceArray($con) as $serviceData) {
        $count = 0;
        foreach (datasUserArray($con, $user) as $dataData) {
            if (teamData($con, $dataData["team"])["service"] == $serviceData["id"] && ($dataData["signed"] !== 0 || $signed == false)) {
                $count = $count+$dataData["lessons"];
            }
        }
        echo "<p>".$serviceData["name"].": <span style='color: #00cccc;'>".$count."</span></p>";
    }
}