import { useBlockProps } from '@wordpress/block-editor';

export default function Edit() {
    return(
        <div {...useBlockProps()}>
            <h3> hello </h3>
        </div>
    )
}