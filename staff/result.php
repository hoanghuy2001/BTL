<!doctype html>
<html lang="en">
  <head>
    <title>Kết Quả</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/allcss.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/mycourse.css">
    <!-- Icon CDN -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Text -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php require "./partial/header-logined.php"?>
    <div class="content container-fluid !direction !spacing">
      <div class="row">
        <div class="col-3 navigation-bar">
          <?php require "./partial/nav-bar.php"?>
        </div>
        <div class="col-9">
          <div class="link row">
              <div class="text">Kết quả khoá học</div>
          </div>
          <div class="wrapper-content row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <div class="title row">
                            <h3 class="box-title">Kết quả</h3> 
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">
                              <iconify-icon icon="material-symbols:add-box"></iconify-icon>Tạo kết quả
                            </button>                         
                          </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Khoá Học</th>
                                            <th>Tên Khoá học</th>
                                            <th>ID học viên</th>
                                            <th>Tên học viên</th>
                                            <th>Điểm</th>
                                            <th>Đánh giá</th>
                                            <th>Tác vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                        $output = '<tr> 
                                        <td>1</td>
                                        <td>11254366</td>
                                        <td>Lập Trình C++</td>
                                        <td>111111111</td>
                                        <td>Nguyễn Văn A</td>
                                        <td>9.0</td>
                                        <td>Nắm khá vững kiến thức</td>'; 
                                        $output.= '<td style = "font-size: 18px">
                                            <button type="button" data-toggle="modal" data-target="#editModal" class="btn btn-success"><iconify-icon icon="material-symbols:edit"></iconify-icon></button>
                                            <button type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger deletecourse" style="color: #fff"><iconify-icon icon="mdi:trash"></iconify-icon></button>
                                          </td>
                                        </tr>';                                         
                                        echo $output;
                                      ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
          </div>
        </div>
      </div>
      <!-- Create Request Modal -->
      <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="createRequestModalTitle">Tạo đánh giá học viên</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="inputName">Họ và Tên</label>
                  <input type="text" class="form-control" id="inputName" placeholder="Hồ Hoàng Huy">
                </div>
                <div class="form-group">
                  <label for="inputID">ID Khoá Học</label>
                  <input type="number" class="form-control" id="inputEmail" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputID">ID Học Viên</label>
                  <input type="number" class="form-control" id="inputEmail" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputID">Điểm</label>
                  <input type="number" class="form-control" id="inputEmail" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputText">Đánh giá</label>
                  <input type="text" style="height: 200px" class="form-control" id="inputText" placeholder="">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Delete Request Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #dc3545; color: white">
              <h5 class="modal-title" id="exampleModalLabel">Xoá Yêu Cầu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Bạn có chắc sẽ xoá yêu cầu chứ ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Yes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Accept Request Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="createRequestModalTitle">Chỉnh sửa đánh giá học viên</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                <div class="form-group">
                  <label for="inputName">Họ và Tên</label>
                  <input type="text" class="form-control" id="inputName" placeholder="Hồ Hoàng Huy">
                </div>
                <div class="form-group">
                  <label for="inputID">ID Khoá Học</label>
                  <input type="number" class="form-control" id="inputEmail" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputID">ID Học Viên</label>
                  <input type="number" class="form-control" id="inputEmail" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputID">Điểm</label>
                  <input type="number" class="form-control" id="inputEmail" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputText">Đánh giá</label>
                  <input type="text" style="height: 200px" class="form-control" id="inputText" placeholder="">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require "../partial/footer.php"?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>