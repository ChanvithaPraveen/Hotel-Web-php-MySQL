const first_name = document.getElementById('first_name')
const last_name = document.getElementById('last_name')
const form = document.getElementsByClassName('form')
const errorElement = document.getElementById('error')

form.addEventListener('Reserve', (e) => {
  let messages = []
  if (first_name.value === '' || first_name.value == null) {
    messages.push('Name is required')
  }

  if (last_name.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (last_name.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (last_name.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})