{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Deals')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('public/vendors/jkanban/jkanban.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/vendors/quill/quill.snow.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/pages/app-kanban.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!-- Basic Kanban App -->
<section id="kanban-wrapper" class="section">
    <div class="kanban-overlay"></div>
    <div class="row">
        <div class="col s12">
            <!-- New kanban board add button -->
            {{-- <button type="button" class="btn waves-effect waves-light mb-1 add-kanban-btn" id="add-kanban">
        <i class='material-icons left'>add</i> Add New Board
      </button> --}}
            <!-- kanban container -->
            <div id="kanban-app"></div>
        </div>
    </div>

    <!-- User new mail right area -->
    <div class="kanban-sidebar">
        <div class="card quill-wrapper">
            <div class="card-content pt-0">
                <div class="card-header display-flex pb-2">
                    <h3 class="card-title">UI Design</h3>
                    <div class="close close-icon">
                        <i class="material-icons">close</i>
                    </div>
                </div>
                <div class="divider"></div>
                <!-- form start -->
                <form class="edit-kanban-item mt-10 mb-10">
                    <div class="input-field">
                        <input type="text" class="edit-kanban-item-title validate" id="edit-item-title"
                            placeholder="kanban Title">
                        <label for="edit-item-title">Card Title</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="edit-kanban-item-date datepicker" id="edit-item-date"
                            value="21/08/2019">
                        <label for="edit-item-date">Due Date</label>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <div class="input-field mt-0">
                                <small>Label</small>
                                <select class="browser-default">
                                    <option class="blue-text">Blue</option>
                                    <option class="red-text">Red</option>
                                    <option class="green-text">Green</option>
                                    <option class="cyan-text">Cyan</option>
                                    <option class="orange-text">Orange </option>
                                    <option class="blue-grey-text">Blue-grey</option>
                                </select>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="input-field mt-0">
                                <small>Member</small>
                                <div class="display-flex">
                                    <div class="avatar ">
                                        <img src="{{asset('public/images/avatar/avatar-11.png')}}" class="circle" height="36"
                                            width="36" alt="avtar img holder">
                                    </div>
                                    <a class="btn-floating btn-small pulse ml-10">
                                        <i class="material-icons">add</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn btn-file">
                            <span>File</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <!-- Compose mail Quill editor -->
                    <div class="input-field">
                        <span>Comment</span>
                        <div class="snow-container mt-2">
                            <div class="compose-editor"></div>
                            <div class="compose-quill-toolbar">
                                <span class="ql-formats mr-0">
                                    <button class="ql-bold"></button>
                                    <button class="ql-italic"></button>
                                    <button class="ql-underline"></button>
                                    <button class="ql-link"></button>
                                    <button class="ql-image"></button>
                                    <button
                                        class="btn btn-small cyan btn-comment waves-effect waves-light ml-25">Comment</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card-action pl-0 pr-0">
                    <button type="reset" class="btn-small waves-effect waves-light delete-kanban-item mr-1">
                        <span>Delete</span>
                    </button>
                    <button class="btn-small blue waves-effect waves-light update-kanban-item">
                        <span>Save</span>
                    </button>
                </div>
                <!-- form start end-->
            </div>
        </div>
    </div>
</section>
<!--/ Sample Project kanban -->
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('public/vendors/jkanban/jkanban.min.js')}}"></script>
<script src="{{asset('public/vendors/quill/quill.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('public/js/scripts/app-kanban.js')}}"></script>
<script>
    $(document).ready(function () {
    var SITEURL = "{{ url('/') }}";
    $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
           });
    var kanban_curr_el, kanban_curr_item_id, kanban_item_title, kanban_data, kanban_item, kanban_users, kanban_curr_item_date;
    // Kanban Board and Item Data passed by json
    var kanban_board_data = [ 
        @foreach($stages as $stage)
        {
        id:'{{ $stage->id }}',
        title:'{{ $stage->title }}',
        headerBg:'{{ $stage->headerBg }}',
        item: [
            @if(Auth::user()->hasGroup('admin'))
            @forelse($stage->deals as $deal)
          {
            id: "{{ $stage->id }}_{{ $deal->id }}",
            title: "{{ $deal->title }} <br> <span class='red-text darken-1' style='font-weight:bold'>{{ $deal->customer->fullname }}</span>",
            username: "{{ $deal->user->fullname() }}",
            border: "blue",
            dueDate: "{{ Carbon\Carbon::make($deal->due_date)->toFormattedDateString() }}",
            comment: {{ $deal->comments->count() }}
          },
          @empty

          @endforelse
          @else
          @forelse($stage->deals->where('user_id', Auth::user()->id) as $deal)
          {
            id: "{{ $stage->id }}_{{ $deal->id }}",
            title: "{{ $deal->title }} <br> <span class='red-text darken-1' style='font-weight:bold'>{{ $deal->customer->fullname }}</span>",
            username: "{{ $deal->user->fullname() }}",
            border: "blue",
            dueDate: "{{ Carbon\Carbon::make($deal->due_date)->toFormattedDateString() }}",
            comment: {{ $deal->comments->count() }}
          },
          @empty

          @endforelse
          @endif
        ]
        },
        @endforeach
    ];


    // Kanban Board
    var KanbanExample = new jKanban({
    element: "#kanban-app", // selector of the kanban container
    // buttonContent: "+ Add New Item", // text or html content of the board button
    widthBoard: '300px',
    dragBoards: false,                                  
    // click on current kanban-item
    click: function (el) {
    // kanban-overlay and sidebar display block on click of kanban-item
    // $(".kanban-overlay").addClass("show");
    // $(".kanban-sidebar").addClass("show");
    // Set el to var kanban_curr_el, use this variable when updating title
    kanban_curr_el = el;
    
    // Extract the kan ban item & id and set it to respective vars
    kanban_item_title = $(el).contents()[0].data;
    kanban_curr_item_id = $(el).attr("data-eid");
    var id = kanban_curr_item_id.split("_").pop();
    window.location.href = SITEURL + '/app-deals-view/' + id;
    // // set edit title
    // $(".edit-kanban-item .edit-kanban-item-title").val(kanban_item_title);
    },
    
    buttonClick: function (el, boardId) {
    // create a form to add add new element
    var formItem = document.createElement("form");
    formItem.setAttribute("class", "itemform");
    formItem.innerHTML =
    '<div class="input-field">' +
      '<textarea class="materialize-textarea add-new-item" rows="2" autofocus required></textarea>' +
      "</div>" +
    '<div class="input-field display-flex">' +
      '<button type="submit" class="btn-floating btn-small mr-2"><i class="material-icons">add</i></button>' +
      '<button type="button" id="CancelBtn" class="btn-floating btn-small"><i class="material-icons">clear</i></button>' +
      "</div>";
    
    // add new item on submit click
    KanbanExample.addForm(boardId, formItem);
    formItem.addEventListener("submit", function (e) {
    e.preventDefault();
    var text = e.target[0].value;
    KanbanExample.addElement(boardId, {
    title: text
    });
    formItem.parentNode.removeChild(formItem);
    });
    $(document).on("click", "#CancelBtn", function () {
    $(this).closest(formItem).remove();
    })
    },
    dropEl: function (el, target, source, sibling){
      var id = $(el).attr("data-eid");
      console.log(id);
      var stageId = $(target).parent().attr('data-id')
      console.log(stageId);
      $.ajax({
        type: 'POST',
        url: 'http://marbia.crm/ajax/changeDealStage',
        data: {"id": id, "stage_id": stageId}, // Any data that is needed to pass to the controller
        dataType: 'json',
        success: function(returnedData) {
         console.log(returnedData);
        }
    });
    },
    // addItemButton: true, // add a button to board for easy item creation
    boards: kanban_board_data // data passed from defined variable
    });

    autoScroll([
        document.querySelector('.kanban-container')
    ],{
        margin: 20,
        maxSpeed: 5,
        scrollWhenOutside: true,
        autoScroll: function(){
            //Only scroll when the pointer is down, and there is a child being dragged.
            return this.down && KanbanExample.drake.dragging;
        }
    }
);
    
    // Add html for Custom Data-attribute to Kanban item
    var board_item_id, board_item_el;
    // Kanban board loop

    for (kanban_data in kanban_board_data) {
        // Kanban board items loop
        for (kanban_item in kanban_board_data[kanban_data].item) {

            var board_item_details = kanban_board_data[kanban_data].item[kanban_item]; // set item details
            board_item_id = $(board_item_details).attr("id"); // set 'id' attribute of kanban-item

            (board_item_el = KanbanExample.findElement(board_item_id)), // find element of kanban-item by ID
                (board_item_users = board_item_dueDate = board_item_comment = board_item_attachment = board_item_image = board_item_badge =
                    " ");

            // check if users are defined or not and loop it for getting value from user's array
            if (typeof $(board_item_el).attr("data-users") !== "undefined") {
                for (kanban_users in kanban_board_data[kanban_data].item[kanban_item].users) {
                    board_item_users +=
                        '<img class="circle" src=" ' +
                        kanban_board_data[kanban_data].item[kanban_item].users[kanban_users] +
                        '" alt="Avatar" height="24" width="24">';
                }
            }
            // check if dueDate is defined or not
            if (typeof $(board_item_el).attr("data-dueDate") !== "undefined") {
                board_item_dueDate =
                    '<div class="kanban-due-date center mb-5 lighten-5 ' + $(board_item_el).attr("data-border") + '"><span class="' + $(board_item_el).attr("data-border") + '-text center"> ' +
                    $(board_item_el).attr("data-dueDate") +
                    "</span>" +
                    "</div>";
            }
            // check if comment is defined or not
            if (typeof $(board_item_el).attr("data-comment") !== "undefined") {
                board_item_comment =
                    '<div class="kanban-comment display-flex">' +
                    '<i class="material-icons font-size-small">chat_bubble_outline </i>' +
                    '<span class="font-size-small">' +
                    $(board_item_el).attr("data-comment") +
                    "</span>" +
                    "</div>";
            }
            // check if attachment is defined or not
            if (typeof $(board_item_el).attr("data-attachment") !== "undefined") {
                board_item_attachment =
                    '<div class="kanban-attachment display-flex">' +
                    '<i class="font-size-small material-icons">attach_file</i>' +
                    '<span class="font-size-small">' +
                    $(board_item_el).attr("data-attachment") +
                    "</span>" +
                    "</div>";
            }
            // check if Image is defined or not
            if (typeof $(board_item_el).attr("data-image") !== "undefined") {
                board_item_image =
                    '<div class="kanban-image mb-1">' +
                    '<img class="responsive-img border-radius-4" src=" ' +
                    kanban_board_data[kanban_data].item[kanban_item].image +
                    '" alt="kanban-image">';
                ("</div>");
            }
            // check if Badge is defined or not
            if (typeof $(board_item_el).attr("data-badgeContent") !== "undefined") {
                board_item_badge =
                    '<div class="kanban-badge circle lighten-4 ' +
                    kanban_board_data[kanban_data].item[kanban_item].badgeColor +
                    '">' +
                    '<span class="' + kanban_board_data[kanban_data].item[kanban_item].badgeColor + '-text">' +
                    kanban_board_data[kanban_data].item[kanban_item].badgeContent +
                    "</span>";
                ("</div>");
            }
            // add custom 'kanban-footer'
            if (
                typeof (
                    $(board_item_el).attr("data-dueDate") ||
                    $(board_item_el).attr("data-comment") ||
                    $(board_item_el).attr("data-users") ||
                    $(board_item_el).attr("data-attachment")
                ) !== "undefined"
            ) {
                $(board_item_el).append(
                    '<div class="kanban-footer mt-3">' +
                    board_item_dueDate +
                    '<div class="kanban-footer-left left display-flex pt-1">' +
                    board_item_comment +
                    board_item_attachment +
                    "</div>" +
                    '<div class="kanban-footer-right right">' +
                    '<div class="kanban-users">' +
                    board_item_badge +
                    board_item_users +
                    "</div>" +
                    "</div>" +
                    "</div>"
                );
            }
            // add Image prepend to 'kanban-Item'
            if (typeof $(board_item_el).attr("data-image") !== "undefined") {
                $(board_item_el).prepend(board_item_image);
            }
        }
    }
    kanban_board_data.map(function (obj) {
        $(".kanban-board[data-id='" + obj.id + "']").find(".kanban-board-header").addClass(obj.headerBg)
    })


    // Add new kanban board
    //---------------------
    // var addBoardDefault = document.getElementById("add-kanban");
    // var i = 1;

    // addBoardDefault.addEventListener("click", function () {
    //     KanbanExample.addBoards([
    //         {
    //             id: "kanban-" + i, // generate random id for each new kanban
    //             title: "Default Title"
    //         }
    //     ]);
    //     var kanbanNewBoard = KanbanExample.findBoard("kanban-" + i)
    //     if (kanbanNewBoard) {
    //         var kanban_dropdown = document.createElement("div");
    //         kanban_dropdown.setAttribute("class", "dropdown");
    //         kanbanNewBoardData = '<div class="dropdown">' +
    //             '<a class="dropdown-trigger" href="#" data-target="kan' + i + '" > <i class="material-icons white-text">more_vert</i></a>' +
    //             '<ul id="kan' + i + '" class="dropdown-content">' +
    //             '<li><a href="#!"><i class="material-icons">link</i><span class="menu-item">Copy Link</span></a></li>' +
    //             '<li class="kanban-delete"><a href="#!"><i class="material-icons">delete</i><span class="menu-item">Delete</span></a></li>' +
    //             '</ul></div>';
    //         var kanbanNewDropdown = $(kanbanNewBoard).find("header");
    //         $(kanbanNewDropdown).append(kanbanNewBoardData);
    //         $(".dropdown-trigger").dropdown({
    //             constrainWidth: false
    //         });
    //     }
    //     i++;
    // });

    // Delete kanban board
    //---------------------
    $(document).on("click", ".kanban-delete", function (e) {
        var $id = $(this)
            .closest(".kanban-board")
            .attr("data-id");
        addEventListener("click", function () {
            
            // KanbanExample.removeBoard($id);
        });
    });

    // Kanban board dropdown
    // ---------------------

    var kanban_dropdown = document.createElement("div");
    kanban_dropdown.setAttribute("class", "dropdown");
    dropdownKanban();
    function dropdownKanban() {
        kanban_dropdown.innerHTML =
            '<a class="dropdown-trigger" href="#" data-target="" > <i class="material-icons white-text">more_vert</i></a>' +
            '<ul id="" class="dropdown-content">' +
            '<li><a href="#!"><i class="material-icons">link</i><span class="menu-item">Copy Link</span></a></li>' +
            '<li class="kanban-delete"><a href="#!"><i class="material-icons">delete</i><span class="menu-item">Delete</span></a></li>' +
            '</ul>';
        if (!$(".kanban-board-header div").hasClass("dropdown")) {
            $(".kanban-board-header").append(kanban_dropdown);
        }
    }

    // Kanban-overlay and sidebar hide
    // --------------------------------------------
    $(
        ".kanban-sidebar .delete-kanban-item, .kanban-sidebar .close-icon, .kanban-sidebar .update-kanban-item, .kanban-overlay"
    ).on("click", function () {
        $(".kanban-overlay").removeClass("show");
        $(".kanban-sidebar").removeClass("show");
    });

    // Delete Kanban Item
    // -------------------
    $(document).on("click", ".delete-kanban-item", function () {
        $delete_item = kanban_curr_item_id;
        // console.log($delete_item);
        addEventListener("click", function () {
          $.ajax({
          type: 'POST',
          url: 'http://marbia.crm/ajax/getdistrict',
          data: {"id": city_id}, // Any data that is needed to pass to the controller
          dataType: 'json',
          success: function(returnedData) {
          
          }
          });
            KanbanExample.removeElement($delete_item);
        });
    });

    // Kanban Quill Editor
    // -------------------
    var composeMailEditor = new Quill(".snow-container .compose-editor", {
        modules: {
            toolbar: ".compose-quill-toolbar"
        },
        placeholder: "Write a Comment... ",
        theme: "snow"
    });

    // Making Title of Board editable
    // ------------------------------
    // $(document).on("mouseenter", ".kanban-title-board", function () {
    //     $(this).attr("contenteditable", "true");
    //     $(this).addClass("line-ellipsis");
    // });
    // Perfect Scrollbar - card-content on kanban-sidebar
    if ($(".kanban-sidebar").length > 0) {
        var ps_sidebar = new PerfectScrollbar(".kanban-sidebar", {
            theme: "dark",
            wheelPropagation: false
        });
    }
    // set unique id on all dropdown trigger
    for (var i = 1; i <= $(".kanban-board").length; i++) {
        $(".kanban-board[data-id='" + i + "']").find(".kanban-board-header .dropdown-trigger").attr("data-target", i);
        $(".kanban-board[data-id='" + i + "']").find("ul").attr("id", i);
    }
    // materialise dropdown initialize
    $('.dropdown-trigger').dropdown({
        constrainWidth: false
    });
});
$(window).on('resize', function () {
    // sidebar display none on screen resize
    $(".kanban-sidebar").removeClass("show");
    $(".kanban-overlay").removeClass("show");
});
</script>
@endsection