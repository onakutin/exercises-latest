import Toggle from "./Toggle";

const TodoItem = ({ text }) => {
	return (
		<>
			<div className="todo-item">
				<Toggle />
				<p>{text}</p>
			</div>
			{/* <div className="todo-item">
				<Toggle />
				<p>buy vegetables</p>
			</div>
			<div className="todo-item">
				<Toggle />
				<p>pay the bills</p>
			</div> */}
		</>
	);
};

export default TodoItem;
