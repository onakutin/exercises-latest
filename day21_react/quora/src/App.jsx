import "./App.css";
import { Fragment } from "react";
import Answer from "./components/Answer";
import { NewAnswer } from "./components/NewAnswer";
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
				{data.map((question) => (
					<Fragment key={question.title}>
						<Question title={question.title} question={question.question} />
						{question.answer.map((answer, i) => (
							<Answer key={`${question.title}_${i}`} answer={answer} />
						))}
						<NewAnswer />
					</Fragment>
				))}
			</div>
		</>
	);
}

export default App;
