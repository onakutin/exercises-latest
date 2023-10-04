import "./App.css";
import TodoItem from "./components/TodoItem";

function App() {
	return (
		<>
			<TodoItem text="take out the trash" />
			<TodoItem text="buy vegetables" />
			<TodoItem text="pay the bill" />
		</>
	);
}

export default App;
