import "./App.css";
import TodoItem from "./components/TodoItem";

function App() {
	const tasks = ["Take out the trash", "Buy vegetables", "Pay the bills"];

	return (
		<>
			{tasks.map((task) => (
				<TodoItem key={task} desc={task} />
			))}
		</>
	);
}

export default App;
