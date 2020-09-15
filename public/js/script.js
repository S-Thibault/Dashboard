$(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});

function myFunction() {
  if (document.getElementById('demo').innerHTML === 'Show') {
    document.getElementById('Show-stars').classList.add('d-none');
    document.getElementById('demo').innerHTML = 'Hide';
  } else {
    document.getElementById('Show-stars').classList.remove('d-none');
    document.getElementById('demo').innerHTML = 'Show';
  }
}

document.getElementById('demo').addEventListener('click', myFunction);
