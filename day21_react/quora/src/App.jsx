import "./App.css";
import Answer from "./components/Answer";
import Question from "./components/Question";

function App() {
	const data = [
		{
			title: "title1",
			question: "question1",
			answer: ["answer1", "answer2", "answer3"],
		},
		{
			title: "title2",
			question: "question2",
			answer: ["answer1", "answer2", "answer3"],
		},
		{
			title: "title3",
			question: "question3",
			answer: ["answer1", "answer2", "answer3"],
		},
	];

	return (
		<>
			<div className="question">
				<Question title={data[0].title} question={data[0].question} />
				<Answer answer={data[0].answer[0]} />
				<Answer answer={data[0].answer[1]} />
				<Answer answer={data[0].answer[2]} />
			</div>
			<div className="question">
				<Question title={data[1].title} question={data[1].question} />
				<Answer answer={data[1].answer[0]} />
				<Answer answer={data[1].answer[1]} />
				<Answer answer={data[1].answer[2]} />
			</div>
			<div className="question">
				<Question title={data[2].title} question={data[2].question} />
				<Answer answer={data[2].answer[0]} />
				<Answer answer={data[2].answer[1]} />
				<Answer answer={data[2].answer[2]} />
			</div>
		</>
	);
}

export default App;
