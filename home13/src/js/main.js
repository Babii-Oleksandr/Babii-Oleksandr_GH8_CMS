$(document).ready(function() {
  toTask()
})
function toTask() {
  $('.add-task').on('click',function() {
    let enterTask = $('.enter-task').val()
    if(!enterTask){
      alert('Please, enter task')
      return false
    }
    let newTask = '<div class="item"> <button class="edit-task" onclick="editTask(this)">Edit</button> ' +
      '<button class="delete-task" onclick="deleteTask(this)">Delete</button> <strong>'+ enterTask +'</strong></div>'
    $('.tasks').append(newTask)
    $('.enter-task').val('')
  })
}

function deleteTask(btn) {
  $(btn).parent('.item').remove()
}

function editTask (btn) {
  let enterTaskEdit = $(btn).siblings('strong').text()
  let newInput = '<input class="input-edit-task" value="'+ enterTaskEdit +'"> ' +
    ' <button class="save-task" onclick="saveTask(this)">Save</button> '
  $(btn).siblings('strong').html(newInput)
  $(btn).parents('.item').find('.edit-task').hide()
}

function saveTask (btn) {
  let enterTaskEdit  = $(btn).parents('.item').find('input').val()
  $(btn).parents('.item').find('.edit-task').show()
  $(btn).parents('.item').find('strong').html(enterTaskEdit)
}

