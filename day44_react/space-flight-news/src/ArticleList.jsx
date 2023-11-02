import { useContext } from "react";
import { Link } from "react-router-dom";
import PageContext from "./PageContext";

export default function ArticleList({ news }) {
	const { page, setPage } = useContext(PageContext);
	return (
		<>
			{page > 0 ? (
				<button onClick={() => setPage(page - 10)}>Previous</button>
			) : (
				""
			)}
			{page / 10 + 1}
			<button onClick={() => setPage(page + 10)}>Next</button>
			<br />
			{news ? (
				news.map((article) => (
					<>
						<Link to={`/article/${article.id}`} key={article.id}>
							{article.title}
						</Link>
						<br />
					</>
				))
			) : (
				<p>Loading...</p>
			)}
		</>
	);
}
