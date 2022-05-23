<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>


 <style>
    * {
    box-sizing: border-box;
}

.to_do_container {
    width: 600px;
    margin: 30px auto 0;
    background-color: #f6f6f6;
}

.to_do_container .add_task {
    padding: 15px;
    background-color: #009688;
    position: relative;
    width: 100%;
}

.to_do_container .add_task input {
    display: inline-block;
    padding: 10px 15px;
    border: none;
    background-color: rgba(255, 255, 255, 0.3);
    width: calc(100% - 15px);
    color: #fff;
    font-size: 20px;
}

.to_do_container .add_task input:focus {
    outline: none;
}

.to_do_container .add_task .plus {
    position: absolute;
    height: 43px;
    width: 43px;
    background-color: #fff;
    right: 12px;
    border-radius: 50%;
    line-height: 43px;
    text-align: center;
    color: #009688;
    cursor: pointer;
    font-size: 38px;
    transition: transform 0.6s;
}

.to_do_container .add_task .plus:hover {
    transform: rotate(90deg);
}

.to_do_container .tasks_content {
    padding: 15px;
}

.to_do_container .tasks_content .notaskmessage {
    color: #777;
    font-size: 15px;
}

.to_do_container .tasks_content>span {
    display: block;
    background-color: #fff;
    padding: 10px;
}

.to_do_container .tasks_content>span:not(:last-child) {
    margin-bottom: 10px;
    cursor: pointer;
}

.to_do_container .tasks_content .taskbox .delete {
    float: right;
    background-color: #e91e63;
    padding: 4px 10px;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 4px;
}

.finished {
    text-decoration: line-through;
    color: rgb(175, 115, 115);
}

.tasks_states {
    overflow: hidden;
    margin: 10px auto;
    width: 600px;
    font-size: 12px;
}

.tasks_states .task_count {
    width: 50%;
    float: left;
    padding: 10px;
}

.tasks_states .task_completed {
    width: 50%;
    float: right;
    padding: 10px;
    text-align: right;
}

.tasks_states .task_count span,
.tasks_states .task_completed span {
    color: #fff;
    padding: 1px 5px;
    font-size: 10px;
    border-radius: 4px;
    font-weight: bold;
    text-align: center;
}

.tasks_states .task_count span {
    background-color: #e91e63;
}

.tasks_states .task_completed span {
    background-color: #03a9f4;
}
 </style>
</head>

<body>
    <div class="to_do_container">

        <div class="add_task">
            <input type="text"></input>
            <span class="plus">+</span>
        </div>
        <div class="tasks_content">
            <span class="notaskmessage">No tasks to show</span>
            <!--  -->
            <!-- <span class="taskbox">Task one

                <span class="delete">Delete</span>
            </span>
            <span class="taskbox">Task two

                <span class="delete">Delete</span>
            </span> -->
            <!--  -->

        </div>

    </div>

    <div class="tasks_states">
        <div class="task_count">
            Tasks <span>0</span>

        </div>
        <div class="task_completed">
            Completed <span>0</span>

        </div>

    </div>









    <script >
        let theinput = document.querySelector('.add_task input');
let theAddButton = document.querySelector('.add_task .plus');
let taskscontainer = document.querySelector('.tasks_content');
let tasksCount = document.querySelector('.task_count span');
let tasksComplete = document.querySelector('.task_completed span');

let noTasksMessage = document.querySelector('.tasks_content .notaskmessage');

window.onload = function() {
    theinput.focus();
}
theAddButton.onclick = function() {
    if (theinput.value === '') {
        console.log('no value');

    } else {
        if (document.body.contains(document.querySelector('.noTasksMessage'))) {
            noTasksMessage.remove();
        }
        noTasksMessage.remove();
        let mainSpan = document.createElement('span');
        let deletespan = document.createElement('span');
        let text = document.createTextNode(theinput.value);
        let delete_text = document.createTextNode('Delete');
        mainSpan.appendChild(text);
        mainSpan.className = 'taskbox';
        deletespan.appendChild(delete_text);
        deletespan.className = 'delete';
        mainSpan.appendChild(deletespan);
        taskscontainer.appendChild(mainSpan);
        theinput.value = '';
        theinput.focus();


    }

}




function createnotasks() {
    let msgspan = document.createElement('span');
    let txt = document.createTextNode('no Tasks Message to show');
    msgspan.appendChild(txt);
    mainSpan.className = 'notaskmessage';
    taskscontainer.appendChild(msgspan);
}
document.addEventListener('click', function(e) {
    if (e.target.className == 'delete') {
        e.target.parentNode.remove();
        console.log(taskscontainer.childElementCount);

        if (taskscontainer.childElementCount == 0) {
            createnotasks();
        }


    }
    if (e.target.classList.contains('taskbox')) {
        e.target.classList.toggle('finished');
    }
    calculateTasks();


});



function calculateTasks() {
    tasksCount.innerHTML = document.querySelectorAll('.tasks_content .taskbox').length;
    tasksComplete.innerHTML = document.querySelectorAll('.tasks_content .finished').length;

}
    </script>
</body>

</html>
