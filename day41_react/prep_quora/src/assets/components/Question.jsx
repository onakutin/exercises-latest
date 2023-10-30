import Answer from "./Answer";

const Question = (props) => {
	return (
		<div className="question">
			<h2>What is next</h2>
			<Answer answer="Let's see" />
			<Answer answer="Who knows" />
			<Answer answer="I don't" />
		</div>
	);
};

export default Question;
