
<html lang="zh-Hant-TW">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主頁面</title>       
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <i class="fa fa-ravelry fa-lg" aria-hidden="true"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                申請</a>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">使用者登入</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <span>帳號:</span>
                                    <input type="textbox">
                                </div>
                                <div class="py-2">
                                    <span>密碼:</span>
                                    <input type="textbox">
                                </div>
                                <div>
                                    <a href="#">忘記密碼</a>
                                </div>
                                <hr width="100%">
                                <div>
                                    <span>沒有帳密?</span>
                                    <a href="#">註冊</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary">登入</button>
                            </div>
                        </div>
                        </div>
                    </div>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                待辦事項</a>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">使用者登入</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <span>帳號:</span>
                                    <input type="textbox">
                                </div>
                                <div class="py-2">
                                    <span>密碼:</span>
                                    <input type="textbox">
                                </div>
                                <div>
                                    <a href="#">忘記密碼</a>
                                </div>
                                <hr width="100%">
                                <div>
                                    <span>沒有帳密?</span>
                                    <a href="#">註冊</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary">登入</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                完成事項</a>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">使用者登入</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <span>帳號:</span>
                                    <input type="textbox">
                                </div>
                                <div class="py-2">
                                    <span>密碼:</span>
                                    <input type="textbox">
                                </div>
                                <div>
                                    <a href="#">忘記密碼</a>
                                </div>
                                <hr width="100%">
                                <div>
                                    <span>沒有帳密?</span>
                                    <a href="#">註冊</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary">登入</button>
                            </div>
                        </div>
                        </div>
                    </div>
            </li>
            </ul>
            <div class="user">
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                <strong>登入</strong>
                </a>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">使用者登入</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <span>帳號:</span>
                                    <input type="textbox">
                                </div>
                                <div class="py-2">
                                    <span>密碼:</span>
                                    <input type="textbox">
                                </div>
                                <div>
                                    <a href="#">忘記密碼</a>
                                </div>
                                <hr width="100%">
                                <div>
                                    <span>沒有帳密?</span>
                                    <a href="#">註冊</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary">登入</button>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </nav>


    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/w3.js') }}"></script>
    <script src="{{ asset('js/holder.min.js') }}"></script>

</body>
</html>
