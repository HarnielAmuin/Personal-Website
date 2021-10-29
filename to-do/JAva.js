var todos = [
    {
    	id: 1,
    	text: 'Meeting with my boss',
    	isCompleted: true,
    },
    {
    	id: 2,
    	text: 'Meeting with my secretary',
    	isCompleted: true,
    },
    {
    	id: 3,
    	text: 'Meeting with my maid',
    	isCompleted: true
    }
    ];


    console.log(todos[2].text)

    for ( i = 0; i < todos.length; i++) {
          console.log(todos[i].text)
    }
    
    todos[3] = {
    	id: 4,
    	text: 'Meeting with my teacher',
    	isCompleted: true,
    },
    console.log(todos)



    for (var t of todos) {
    	console.log(t.id)
    }