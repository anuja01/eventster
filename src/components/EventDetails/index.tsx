import React, { useState } from "react";
import styled from "styled-components";
import Slider from "../common/Slider";

const Article = ({ test1, test2 }: ArticleDetails) => {
  const [showSlider, setShowSlider] = useState(true);
  return (
    <>
      <div>
        Event details lorum ispium {test1} {test2}
        <Slider
          showSlider={showSlider}
          setShowSlider={setShowSlider}
          image={
            "https://coreui.io/react/docs/static/react-83088efde08a5dedde9f67a954cb4b5b.jpg"
          }
        />
      </div>
    </>
  );
};

export default Article;

interface ArticleDetails {
  test1: string;
  test2: number;
}
