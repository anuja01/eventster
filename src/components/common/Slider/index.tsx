import React from "react";
import styled from "styled-components";

const StyledWrapper = styled.div`
  display: flex;
`;
const StyledImage = styled.img`
  width: 400px;
  height: 400px;
`;
const Slider = ({
  showSlider = true,
  setShowSlider,
  image = "https://coreui.io/react/docs/static/react-83088efde08a5dedde9f67a954cb4b5b.jpg"
}: Slider) => {
  return (
    <>
      {showSlider ? (
        <StyledWrapper>
          <StyledImage src={image} />
        </StyledWrapper>
      ) : null}
    </>
  );
};

interface Slider {
  showSlider: boolean;
  setShowSlider: void;
  image: string;
}
export default Slider;
